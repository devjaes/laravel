<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    protected static $url = "http://localhost/servicios/controllers/studentController.php";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Http::get(static::$url);
        $studentsArray = $students->json();

        return view('students.show', compact('studentsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::asForm()->post(static::$url, [
            'dni' => $request->input('dni'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiantes = Http::GET(static::$url);
        $estudiantesArray = $estudiantes->json();
        foreach ($estudiantesArray as $estudiante) {
            if ($estudiante['dni'] == $id) {
                break;
            }
        }

        return view('students.update', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $dni)
    {
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $response = Http::asForm()->put(static::$url . "?dni=" . $dni . "&name=" . $name . "&lastname=" . $lastname . "&address=" . $address . "&phone=" . $phone);

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        $response = Http::delete(static::$url . "?dni=" . $dni);

        return redirect('/students');
    }
}
