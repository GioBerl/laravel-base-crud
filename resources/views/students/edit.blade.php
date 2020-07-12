@extends('layouts.app')

@section('page-title', 'Modifica Studente')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Modifica Dati Studente</h1>
            <form action="{{route('students.update', ['student'=>$student->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Inserisci Nome"
                        value="{{ old('firstname', $student->firstname) }}">
                    @error('firstname')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname"
                        placeholder="Inserisci Cognome" value="{{ old('lastname', $student->lastname) }}">
                    @error('lastname')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <input type="text" name="sex" class="form-control" id="sex" placeholder="Inserisci Sesso"
                        value="{{ old('sex', $student->sex) }}">
                    @error('sex')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sr_num">Serial Number</label>
                    <input type="number" name="sr_num" class="form-control" id="sr_num"
                        placeholder="Inserisci Matricola" value="{{ old('sr_num', $student->sr_num) }}">
                    @error('sr_num')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci Email"
                        value="{{ old('email', $student->email) }}">
                    @error('email')
                    <small class="text-danger">{{ strtoupper($message) }}</small>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            {{-- !alternativa per raccogliere tutti gli errori e ciclarli --}}
            {{-- @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}

    </div>
</div>
</div>

@endsection