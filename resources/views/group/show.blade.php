@extends('layouts.app')

@section('content')

    <p>
        Name: {{ $group->name }} <br>
        Keyid: {{ $group->keylink }} <br>
    </p>
@endsection