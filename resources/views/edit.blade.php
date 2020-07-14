@extends('layouts.dashboard')

@section('content')
<div class="col-sm-6">
    <form method="POST" action="">
        <div class="form-group">
            
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Name">
          @csrf
        </div>
        <div class="form-group">
          <label>Serial Number</label>
          <input type="text" class="form-control" name="serial_no" placeholder="Enter Serial Number">
        </div>
        <div class="form-group">
            <label>Organization</label>
            <input type="text" class="form-control" name="organization"  placeholder="Enter Organization">
          </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

</div>
@stop
