@extends('layout.app')

@section('content')
    <h1>Dashboard</h1>
    <a href="logout">logout</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Article Title</th>
            <th scope="col">Created By</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->user->Name}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection