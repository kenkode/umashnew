
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
 .content {margin-top: -100px; margin-bottom: -60px}
 .footer { position: fixed; left: 0px; bottom: -30px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman); }





</style>


</head>

<body>
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
<br>

<div class="row">
  <div class="col-lg-5">
    <div align = "center"><u>MOBILE NUMBER: 0722-790609 P.O. BOX 23567-00625</u></div>
    <div align = "center"><h3>JUBILEE INSURANCE MEMBER PLAN</div></h3>

<table  class="table table-condensed table-bordered table-responsive table-hover">

     <tr><th colspan="2"></th></tr>

     <tr>
      <td colspan="2"><font color="green">Member and Spouse Details</font></td>
    </tr>
     <tr>
       <td>Member Name</td><td>{{$jinsurance->member_name}}</td>
     </tr>
      <tr>
       <td>Member Date of Birth</td><td>{{$jinsurance->member_bdate}}</td>
     </tr>
     <tr>
       <td>Spouse Name</td><td>{{$jinsurance->spouse_name}}</td>
     </tr>
     <tr>
       <td>Spouse Date of Birth</td><td>{{$jinsurance->spouse_bdate}}</td>
     </tr>
      


     <tr>
      <td colspan="2"><font color="green">Dependants' Details</font></td>
    </tr>
     <tr>
       <td colspan = "2">1: {{$jinsurance->first_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth:</td><td>{{$jinsurance->first_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">2: {{$jinsurance->second_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->second_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">3: {{$jinsurance->third_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->third_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">4: {{$jinsurance->fourth_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->fourth_bdate}}</td>
     </tr>     
     
     
   </table>

   </div>

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     
    

     <tr>
      <td colspan="2"><font color="green">Parents' Details</font></td>
    </tr>
     <tr>
       <td colspan = "2">1: {{$jinsurance->parent1_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent1_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent1_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">2: {{$jinsurance->parent2_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent2_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent2_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">3: {{$jinsurance->parent3_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent3_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent3_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">4: {{$jinsurance->parent4_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent4_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent4_id}}</td>
     </tr>
         

    </table>

</div>
</div>





</body>

</html>



