@extends('layouts.app')

@section('page-title', 'Dettagli Studente')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Studente</h1>
            <p>
                {{$student->firstname}}
            </p>
        </div>
    </div>
</div>

@endsection