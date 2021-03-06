<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Validation\Rule;
use App\Rules\OnlyTwoSex;

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
        $students = Student::all(); //!mi ritorna una collection
        // dd($students);
        //!occhio al percorso della view
        return view('students.index', compact('students'));
        //come secondo parametro in alternativa avrei potuto passare un array
        //['students'=>$students]
        //nella view index.blade.php mi trovo la collection $students da poter ciclare
    }

    public function info()
    {
        $students = Student::all(); //!mi ritorna una collection
        $maleStudents = Student::where('sex', 'M')->get(); //operatore ==
        $femaleStudents = Student::where('sex', 'F')->get(); //operatore ==
        // dd($maleStudents);
        // dd($students);
        //!occhio al percorso della view
        return view('welcome', compact('students', 'maleStudents', 'femaleStudents'));
        //come secondo parametro in alternativa avrei potuto passare un array
        //['students'=>$students]
        //nella view welcome.blade.php mi trovo la collection $students da poter ciclare
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
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'sex' => ['required','string','max:1', new OnlyTwoSex],
            'sr_num' => 'required|unique:students|numeric|digits:5',
            'email' => 'required|string|unique:students|email',
        ]);
        $data = $request->all();
        $new_student = new Student();
        $new_student->fill($data);
        $new_student->save();
        return redirect()->route('students.index');
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
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * !!Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'sex' => ['required','string','max:1', new OnlyTwoSex],
            // 'sr_num' => 'required|unique:students|numeric|digits:5',
            // 'email' => 'required|string|unique:students|email',
            'sr_num' => [
                'required',
                'numeric',
                'digits:5',
                Rule::unique('students')->ignore($student->id), //?da chiedere a Sofia
            ],
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique('students')->ignore($student->id), //?da chiedere a Sofia
            ],
        ]);
        $data = $request->all();
        $student->update($data);
        return redirect()->route('students.index');
    }

    /**
     * !!Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}