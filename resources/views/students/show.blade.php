@extends('layouts.app')

@section('content')
    <h1>Thông tin sinh viên</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text">Tuổi: {{ $student->age }}</p>
            <p class="card-text">Địa chỉ: {{ $student->address }}</p>
            <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Sửa</a>
            <form method="POST" action="{{ route('students.destroy', $student) }}" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sinh viên này?')">Xoá</button>
            </form>
        </div>
    </div>
@endsection
