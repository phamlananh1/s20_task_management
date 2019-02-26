@extends('home')
@section('title','task')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Task title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Dua Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $task->title }}</td>
            <td>{{ $task->content }}</td>
            <td><img src="{{ asset("storage/$task->image") }}" alt="" width="200px" height="150px"></td>
            <td>{{$task->dua_date}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('tasks.index')}}">Back</a>
@endsection()