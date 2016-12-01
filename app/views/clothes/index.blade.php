@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Dressing and Casket</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('clothes/create')}}">Fill Clothing and Casket Details</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Name</th>
        <th>Casket Type & Colour</th>
        <th>Release Date</th>        
        <th>Officer</th>
        <th>Relative</th>
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($clothes as $clothe)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $clothe->name }}</td>
          <td>{{ $clothe->coffin }}</td>
          <td>{{ $clothe->date_of_departure }}</td>          
          <td>{{ $clothe->officer }}</td>
          <td>{{ $clothe->relative }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('clothes/edit/'.$clothe->id)}}">Update</a></li>

                    <li><a href="{{URL::to('clothes/show/'.$clothe->id)}}">View</a></li>
                   
                    <li><a href="{{URL::to('clothes/delete/'.$clothe->id)}}"  onclick="return (confirm('Are you sure you want to delete this Record?'))">Delete</a></li>
                    
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