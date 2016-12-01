<html >



<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">

table {
  max-width: 100%;
  background-color: transparent;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #54C571;
    color: white;
}
.table {
  width: 100%;
  margin-bottom: 2px;
}
hr {
  margin-top: 1px;
  margin-bottom: 2px;
  border: 0;
  border-top: 2px dotted #eee;
}

.hr1 {
  display: block;
    height: 1px;
    width: 300px;
    border: 0;
    border-top: 1px solid #000;
    padding: 0;
}

.hr2 {
  display: block;
    height: 1px;
    width: 300px;
    margin-top: -100px;
    border: 0;
    border-top: 1px solid #000;
    padding: 0;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 0.428571429;
  color: #333;
  background-color: #fff;
}



 @page { margin: 50px 30px; }
 .header { position: top; left: 0px; top: -150px; right: 0px; height: 100px;  text-align: center; }
 .content {margin-top: -100px; margin-bottom: -150px}
 .footer { position: fixed; left: 0px; bottom: -30px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman); }





</style>

</head>

<body>

  <div class="header">
      <table >

      <tr>


       
        <td style="width:150px">

            <img src="{{asset('public/uploads/logo/'.$organization->logo)}}" alt="logo" width="100%">
    
        </td>

        <td>
        <strong>
          {{ strtoupper($organization->name)}}
          </strong><br><p>
          {{ $organization->phone}}<br><p> 
          {{ $organization->email}}<br><p> 
          {{ $organization->website}}<br><p>
          {{ $organization->address}}
       

        </td>
        

      </tr>


      <tr>

        <hr>
      </tr>



    </table>
   </div>



<div class="footer">
     <p class="page">Page <?php $PAGE_NUM ?></p>
   </div>


	<div class="content" style='margin-top:0px;'>
   <div align="center"><strong>LIst of cars as from:  {{$from}} To:  {{$to}}</strong></div><br><br>
<hr>
    <table  class="table table-condensed table-bordered table-responsive table-hover">

      <tr><th colspan="4"></th></tr>
      <tr>      


        <td width='20'><strong># </strong></td>
        <td><strong>Registration No</strong></td>
        <td><strong>Make </strong></td>
        <td><strong>Tank Capacity </strong></td>               
        
      </tr>
      <?php $i =1; ?>
      @foreach($cars as $car)
      <tr>


       <td td width='20'>{{$i}}</td>
        <td> {{ $car->reg_no }}</td>
        <td> {{ $car->make }}</td>
        <td> {{ $car->tank_capacity }}</td>

      </tr>
      <?php $i++; ?>
   
    @endforeach

     

    </table>

<br><br>

   
</div>
<div align = "center" class='footer' style='margin-bottom:0px;'>

<hr>
<br>
 <i>{{$organization->footnote1}}<br>
 {{$organization->footnote2}}</i></div>

</body>

</html>



