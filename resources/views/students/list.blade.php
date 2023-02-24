<!-- index.blade.php -->
@extends('layout')

@section('content')
    <h1>All Students</h1>
    <a href="/students/create">Add Student</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection

