@extends('dashboardcontent') 

@section('contenting') 
<div class="content5">
    <center><h1>User dashboard</h1></center>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
   + Add User
  </button>

  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Created</th>
        <th width="150px">Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  @include('users.models')
  <!-- Modal -->
@endsection