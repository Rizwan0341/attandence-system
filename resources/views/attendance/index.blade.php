@extends('layouts.app')

@section('content')
    <h1>Attendance</h1>
    <a href="{{ route('attendance.create') }}">Mark Attendance</a>
    <ul>
        @foreach($attendance as $entry)
            <li>{{ $entry->user->name }} - {{ $entry->date }} - {{ $entry->present ? 'Present' : 'Absent' }}</li>
        @endforeach
    </ul>
@endsection
