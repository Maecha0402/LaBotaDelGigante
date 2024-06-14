<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{   
    // Activar la habitacion 
    public function activate($id)
    {
    $room = Room::findOrFail($id);
    $room->status = 'active';
    $room->save();

    return redirect()->route('rooms.index')->with('success', 'Habitación activada con éxito.');
    }
    // Aplicar middleware auth para todas las rutas en este controlador
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Método para mostrar todas las habitaciones
    public function index()
    {
        // Obtener todas las habitaciones
        $rooms = Room::all();
        // Retornar la vista con las habitaciones
        return view('rooms.index', compact('rooms'));
    }

    // Método para mostrar el formulario de creación de habitación
    public function create()
    {
        // Retornar la vista de creación de habitación
        return view('rooms.create');
    }

    // Método para almacenar una nueva habitación
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Crear una nueva habitación con los datos del formulario
        $room = new Room($request->all());

        // Manejar la subida de la imagen 1 si está presente
        if ($request->hasFile('image1')) {
            $imagePath1 = $request->file('image1')->move(public_path('images'), time().'_'. $request->file('image1')->getClientOriginalName());
            $room->image1 = basename($imagePath1);
        }

        // Manejar la subida de la imagen 2 si está presente
        if ($request->hasFile('image2')) {
            $imagePath2 = $request->file('image2')->move(public_path('images'), time().'_'. $request->file('image2')->getClientOriginalName());
            $room->image2 = basename($imagePath2);
        }

        // Manejar la subida de la imagen 3 si está presente
        if ($request->hasFile('image3')) {
            $imagePath3 = $request->file('image3')->move(public_path('images'), time().'_'. $request->file('image3')->getClientOriginalName());
            $room->image3 = basename($imagePath3);
        }

        // Guardar la habitación en la base de datos
        $room->save();

        // Redirigir a la vista de la lista de habitaciones
        return redirect()->route('rooms.index')
            ->with('success', 'Room created successfully');
    }

    // Método para mostrar los detalles de una habitación específica
    public function show(Room $room)
    {
        // Retornar la vista con los detalles de la habitación
        return view('rooms.show', compact('room'));
    }

    // Método para mostrar el formulario de edición de una habitación existente
    public function edit(Room $room)
    {
        // Retornar la vista de edición con los datos de la habitación
        return view('rooms.edit', compact('room'));
    }

    // Método para actualizar una habitación existente
    public function update(Request $request, Room $room)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Actualizar la habitación con los datos del formulario
        $room->fill($request->all());

        // Manejar la subida de la imagen 1 si está presente
        if ($request->hasFile('image1')) {
            // Eliminar la imagen anterior si existe
            if ($room->image1) {
                Storage::delete('images/' . $room->image1);
            }
            // Guardar la nueva imagen
            $imagePath1 = $request->file('image1')->move(public_path('images'), time().'_'. $request->file('image1')->getClientOriginalName());
            $room->image1 = basename($imagePath1);
        }

        // Manejar la subida de la imagen 2 si está presente
        if ($request->hasFile('image2')) {
            // Eliminar la imagen anterior si existe
            if ($room->image2) {
                Storage::delete('images/' . $room->image2);
            }
            // Guardar la nueva imagen
            $imagePath2 = $request->file('image2')->move(public_path('images'), time().'_'. $request->file('image2')->getClientOriginalName());
            $room->image2 = basename($imagePath2);
        }

        // Manejar la subida de la imagen 3 si está presente
        if ($request->hasFile('image3')) {
            // Eliminar la imagen anterior si existe
            if ($room->image3) {
                Storage::delete('images/' . $room->image3);
            }
            // Guardar la nueva imagen
            $imagePath3 = $request->file('image3')->move(public_path('images'), time().'_'. $request->file('image3')->getClientOriginalName());
            $room->image3 = basename($imagePath3);
        }

        // Guardar los cambios
        $room->save();

        // Redirigir a la vista de la lista de habitaciones
        return redirect()->route('rooms.index')
            ->with('success', 'Room updated successfully');
    }

    // Método para eliminar una habitación existente
    public function destroy(Room $room)
    {
        // Eliminar las imágenes asociadas si existen
        if ($room->image1) {
            Storage::delete('images/' . $room->image1);
        }
        if ($room->image2) {
            Storage::delete('images/' . $room->image2);
        }
        if ($room->image3) {
            Storage::delete('images/' . $room->image3);
        }

        // Eliminar la habitación
        $room->delete();

        // Redirigir a la lista de habitaciones con un mensaje de éxito
        return redirect()->route('rooms.index')
            ->with('success', 'Room deleted successfully');
    }
}
