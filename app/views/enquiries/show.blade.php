@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-5">
  
  <table class="table table-condensed table-bordered">
    <tr>
      <td>Date</td><td>{{$enquiry->date}}</td>
    </tr>
    <tr>
      <td>Client</td><td>{{ $enquiry->surname.' '.$enquiry->firstname.' '.$enquiry->other_names}}</td>
    </tr>
    <tr>
      <td>Contact Details</td><td>{{$enquiry->contact_details}}</td>
    </tr>
    <tr>
      <td>Subject</td><td>{{$enquiry->subject}}</td>
    </tr>
    <tr>
      <td>Description</td><td>{{$enquiry->description}}</td>
    </tr>
  </table>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('resolutions/create/'.$enquiry->id)}}">New Resolution</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Date</th>
        <th>Resolution</th>
       
        
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($enquiry->resolutions as $resolution)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $resolution->date }}</td>
          <td>{{ $resolution->resolution }}</td>
          
         
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">
                  
                    <li><a href="{{URL::to('resolutions/edit/'.$resolution->id)}}">Update</a></li>
                   
                    <li><a href="{{URL::to('resolutions/delete/'.$resolution->id)}}"  onclick="return (confirm('Are you sure you want to delete this resolution?'))">Delete</a></li>
                    
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