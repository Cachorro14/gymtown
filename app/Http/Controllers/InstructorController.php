<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructor.instructor-index', compact('instructores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor.instructor-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'telefono' => 'required|string|min:5|max:255',
            'horario' => 'required|string|min:5|max:255',
            'sueldo' => 'required|integer|min:1|',
        ]);

        Instructor::create($request->all());

        return redirect()->route('instructor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        return view('instructor.instructor-show', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('instructor.instructor-form', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        Instructor::where('id', $instructor->id)->update(
            $request->except('_token', '_method')
        );

        return redirect()->route('instructor.show', $instructor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();

        return redirect()->route('instructor.index');
    }
}
