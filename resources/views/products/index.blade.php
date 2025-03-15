@extends('dashboardcontent') 

@section('contenting') 
<div class="content5">
    <center><h1>Produucts dashboard</h1></center>
    <table class="table table-bordered product-data-table">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Product Owner</th>
            <th>Product Categary</th>
            <th>Product shop</th>
            <th width="150px">Action</th>
            <th width="50px"><button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs">Delete</button></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
</div>
@endsection