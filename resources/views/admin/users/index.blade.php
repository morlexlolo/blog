@extends('layouts.admin')

@section('content')

<h1>Users</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>
  <tbody>

    @if($users)

    @foreach($users as $user)

    <tr>
    
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->is_active ==1 ? 'Active' : 'Not active'}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
    </tr>

    @endforeach
    @endif
   
  </tbody>
</table> 

@endsection