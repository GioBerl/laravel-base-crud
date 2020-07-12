@extends('layouts.app')

@section('page-title', 'Lista Studenti')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-3 mb-3">Lista Studenti</h1>
                <a href="{{route('students.create')}}" class="btn btn-primary mt-3">Nuovo Studente</a>
            </div>

            <table class="table table-bordered table-striped mt-5 mb-3 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">sex</th>
                        <th scope="col">sr_num</th>
                        <th scope="col">email</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->sr_num}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="{{route('students.show', ['student'=>$student->id])}}" class="btn btn-sm btn-info">
                                Dettagli
                            </a>
                            <a href="{{route('students.edit', ['student'=>$student->id])}}"
                                class="btn btn-sm btn-warning">
                                Modifica
                            </a>
                            <form action="{{route('students.destroy', ['student'=>$student->id])}}" method="post"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="Elimina">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection