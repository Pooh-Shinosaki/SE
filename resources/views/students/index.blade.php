@extends('layouts.student')

@section('content')
<div class="container">
    <h1>รายชื่อนักศึกษา</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">รหัสนักศึกษา</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">เพศ</th>
            <th scope="col">อายุ</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            <td>{{ $student->std }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->age }}</td>
            <td><button type="button" class="btn btn-danger">ลบ</button></td>
          </tr>
          @endforeach
        </tbody>
      </table>

</div>
@endsection
