@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Admissions</h4>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-12">

    @if (Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
     </div>
    @endif

    @if (Session::has('delete_message'))

      <div class="alert alert-danger">
      {{ Session::get('delete_message') }}
     </div>
    @endif

    <div class="panel panel-default">
      <div class="panel-heading">
          <a class="btn btn-success btn-sm" href="{{ URL::to('admissions/create')}}">New Admission</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Date</th>
        <th>Admission #</th>
        <th>Category</th>
        <th>SurName</th>
        <th>First Name</th>
        <th>Certificate #</th>
        <th>Status</th>
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($admissions as $admission)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $admission->date }}</td>
          <td>{{ $admission->admission_no }}</td>
          <td>{{ $admission->category }}</td>
          <td>{{ $admission->surname }}</td>
          <td>{{ $admission->firstname }}</td>
          <td>{{ $admission->certificate_no }}</td>
          <td>{{ $admission->status }}</td>
        
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    
                  <li><a href="{{URL::to('admissions/show/'.$admission->id)}}">View</a></li>
                    <li><a href="{{URL::to('admissions/edit/'.$admission->id)}}">Update</a></li>
                    @if($admission->status == 'admitted')
                    <li><a href="{{URL::to('admissions/release/'.$admission->id)}}"  onclick="return (confirm('Are you sure you want to release this admission?'))">Release</a></li>
                   @endif
                    <li><a href="{{URL::to('admissions/delete/'.$admission->id)}}"  onclick="return (confirm('Are you sure you want to delete this admission?'))">Delete</a></li>
                    
                  </ul>
              </div>

                    </td>



        </tr>

        <?php $i++; ?>
        @endforeach


      </tbody>


    </table>
  </div>


  </div>

</div>

@stop