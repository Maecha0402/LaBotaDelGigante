<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PlantController extends Controller
{
    // Aplicar middleware auth para todas las rutas en este controlador
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Listar todas las plantas
    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }

    // Mostrar una planta específica
    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('plants.show', compact('plant'));
    }

    // Mostrar el formulario para crear una nueva planta
    public function create()
    {
        return view('plants.create');
    }

    // Almacenar una nueva planta
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'disease_name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'chemical_treatment' => 'nullable|string',
            'treatment_quantity' => 'nullable|string',
            'preventive_measures' => 'nullable|string',
        ]);

        // Crear una nueva planta con los datos del formulario
        $plant = new Plant($request->all());

        // Manejar la subida de la imagen si está presente
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $plant->image = basename($imagePath);
        }

        // Guardar la planta en la base de datos
        $plant->save();

        // Redirigir a la vista de la planta recién creada
        return redirect()->route('plants.show', $plant->id)
            ->with('success', 'Planta creada exitosamente.');
    }

    // Mostrar el formulario para editar una planta existente
    public function edit($id)
    {
        // Encontrar la planta a editar
        $plant = Plant::findOrFail($id);
        return view('plants.edit', compact('plant'));
    }

    // Actualizar una planta existente
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'disease_name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'chemical_treatment' => 'nullable|string',
            'treatment_quantity' => 'nullable|string',
            'preventive_measures' => 'nullable|string',
        ]);

        // Encontrar la planta a actualizar
        $plant = Plant::findOrFail($id);
        
        // Actualizar la planta con los datos del formulario
        $plant->fill($request->all());

        // Manejar la subida de la imagen si está presente
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($plant->image) {
                Storage::delete('images/' . $plant->image);
            }
            // Guardar la nueva imagen
            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $plant->image = basename($imagePath);
        }

        // Guardar los cambios
        $plant->save();

        // Redirigir a la vista de la planta actualizada
        return redirect()->route('plants.show', $plant->id)
            ->with('success', 'Planta actualizada exitosamente.');
    }

    // Eliminar una planta existente
    public function destroy($id)
    {
        // Encontrar la planta a eliminar
        $plant = Plant::findOrFail($id);
        
        // Eliminar la imagen asociada si existe
        if ($plant->image) {
            Storage::delete('images/' . $plant->image);
        }
        
        // Eliminar la planta
        $plant->delete();

        // Redirigir a la lista de plantas con un mensaje de éxito
        return redirect()->route('plants.index')
            ->with('success', 'Planta eliminada exitosamente.');
    }
}
