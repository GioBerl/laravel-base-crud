@extends('layouts.app')

@section('page-title', 'Homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Homepage</h1>
            <p>
                Benvenuto nella home page della class X
            </p>
            <p>
                info generali Studenti classe X : <br>
                numero studenti totali: {{count($students)}} <br>
                di cui maschi: {{count($maleStudents)}} e femmine: {{count($femaleStudents)}}
            </p>
        </div>
    </div>
</div>

@endsection