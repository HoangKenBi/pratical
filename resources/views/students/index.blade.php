@extends('layouts.app')

@section('content')
    <h1>Danh sách sinh viên</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Tác vụ</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Sửa</a>
                    <form method="POST" action="{{ route('students.destroy', $student) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sinh viên này?')">Xoá</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
