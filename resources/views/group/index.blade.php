@extends('layouts.app')

@section('content')

    <p>
        @foreach($groups as $group)
            Name: <a href="/group/{{ $group->keylink }}">{{ $group->name }}</a> <br>
            Keyid: {{ $group->keylink }} <br>
        @endforeach
    </p>
@endsection