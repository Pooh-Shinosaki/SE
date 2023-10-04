@extends('layouts.student')

@section('content')
<div class="container">
    <h1>รายชื่อนักศึกษา</h1>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($US as $User)
            <tr>
                <th>{{  $User->id }}</th>
                <th>{{  $User->name }}</th>
                <th>{{  $User->email }}</th>
                <th><button class="btn btn-danger" type="button">ลบ</button></th>

            </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
