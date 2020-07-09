<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //la rotta sara' localhost:8000/students
        $students = Student::all();
        // dd($students);
        //!occhio al percorso della view
        return view('students.index', compact('students'));
        //come secondo parametro in alternativa avrei potuto passare un array
        //['students'=>$students]
        //nella view index.blade.php mi trovo la collection $students da poter ciclare
    }

    /**
     * !!Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //la rotta sara' localhost:8000/students/create
        //qui avro' il form per la creazione di un nuovo studente(Show the form for creating a new resource.)
        return view('students.create');
    }

    /**
     * !!Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * !!Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // $student = Student::find($id);  //!ricorda che find restituisce l'oggetto non una collection
        return view('students.show', compact('student'));
    }

    /**
     * !!Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * !!Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * !!Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}