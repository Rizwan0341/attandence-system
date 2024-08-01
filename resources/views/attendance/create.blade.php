@extends('layouts.app')

@section('content')
    <h1>Mark Attendance</h1>
    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <label for="user_id">User:</label>
        <select id="user_id" name="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="present">Present:</label>
        <input type="checkbox" id="present" name="present" value="1">
        <button type="submit">Save</button>
    </form>
@endsection

