@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-12 col-xs-12">
   <div class="users-table">
    <div class="page-header">Users</div>
    <table class="table table-striped">
      <thead class="thead-inverse">
       <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
       </tr>

      </thead>
      <tbody>
      @foreach($users as $key )
       <tr>
        <th class="scope"> {{ $key->id }}</th>
        <td>{{ $key->name }}</td>
        <td> {{ $key->email }}</td>
        <td> {{ $key->role }} </td>
       </tr>
       @endforeach
      </tbody>
    </table>
   
   </div>
 </div>
 </div>
</div>

@endsection

