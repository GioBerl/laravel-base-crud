@extends('layouts.app')

@section('page-title', 'Studente')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Crea un nuovo Studente</h1>
            <form action="{{route('students.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname"
                        placeholder="Inserisci Nome">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname"
                        placeholder="Inserisci Cognome">
                </div>
                <div class="form-group">
                    <label for="sr_num">Serial Number</label>
                    <input type="number" name="sr_num" class="form-control" id="sr_num"
                        placeholder="Inserisci Matricola">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci Email">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection