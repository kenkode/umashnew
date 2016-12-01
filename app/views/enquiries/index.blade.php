@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Enquiries</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('enquiries/create')}}">New Enquiry</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Date</th>
        <th>Client</th>
        <th>Subject</th>
        <th>Description</th>
        
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($enquiries as $enquiry)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $enquiry->date }}</td>
          <td>{{ $enquiry->surname.' '.$enquiry->firstname.' '.$enquiry->other_names}}</td>
          <td>{{ $enquiry->subject }}</td>
          <td>{{ $enquiry->description }}</td>
         
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('enquiries/show/'.$enquiry->id)}}">View</a></li>
                    <li><a href="{{URL::to('enquiries/edit/'.$enquiry->id)}}">Update</a></li>
                   
                    <li><a href="{{URL::to('enquiries/delete/'.$enquiry->id)}}"  onclick="return (confirm('Are you sure you want to delete this client?'))">Delete</a></li>
                    
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