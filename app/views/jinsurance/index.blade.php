@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>List of Members</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('jinsurance/create')}}">New Member</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Member Name</th>
        <th>Date of Birth</th>
        <th>Spouse</th>        
        <th>Date of Birth</th>
        <th>Parent</th>
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($jinsurances as $jinsurance)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $jinsurance->member_name }}</td>
          <td>{{ $jinsurance->member_bdate }}</td>
          <td>{{ $jinsurance->spouse_name }}</td>          
          <td>{{ $jinsurance->spouse_bdate }}</td>
          <td>{{ $jinsurance->parent1_name }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    
                    <li><a href="{{URL::to('jinsurance/show/'.$jinsurance->id)}}">View</a></li>
                    <li><a href="{{URL::to('jinsurance/edit/'.$jinsurance->id)}}">Update</a></li>
                   
                    <li><a href="{{URL::to('jinsurance/delete/'.$jinsurance->id)}}"  onclick="return (confirm('Are you sure you want to delete this Member?'))">Delete</a></li>
                    
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