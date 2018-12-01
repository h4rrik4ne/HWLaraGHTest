@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'GroupController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Speichern', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection

