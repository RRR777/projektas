@extends('layouts.app') 
@section('content')

<h1>Užsakymo formavimas</h1>

{!! Form::open(['url' => 'create/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Vardas:')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Įveskite vardą'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastname', 'Pavardė:')}}
        {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Įveskite Pavardę'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'El.pašto adresas:')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
    </div>
    <div class="form-group">
        {{Form::label('country', 'Šalis:')}}
        {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Įveskite šalį'])}}
    </div>
    <div class="form-group">
        {{Form::label('orderqty', 'Užsakytas kiekis:')}}
        {{Form::text('orderqty', '1', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::submit('Patvirtinti', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}

@endsection