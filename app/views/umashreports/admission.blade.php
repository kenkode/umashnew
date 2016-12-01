
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
    <div align = "center"><u>MOBILE NUMBER: 0722-790609</u></div><br><br>
    <div align = "center"><u>P.O. BOX 23567-00625</u></div>
    <div align = "center"><h3>ADMISSION FORM</div></h3>

<table  class="table table-condensed table-bordered table-responsive table-hover">

     <tr>
      <th colspan="2">Deceased Details</th>
    </tr>
     <tr>
       <td>Admission #</td><td>{{$admission->admission_no}}</td>
     </tr>
      <tr>
       <td>Admission Date </td><td>{{$admission->date}}</td>
     </tr>
     <tr>
       <td>Admission Category </td><td>{{$admission->category}}</td>
     </tr>
     <tr>
       <td>Admission Status</td><td>{{$admission->status}}</td>
     </tr>
      <tr>
       <td>SurName </td><td>{{$admission->surname}}</td>
     </tr>
     <tr>
       <td>First Name </td><td>{{$admission->firstname}}</td>
     </tr>
     <tr>
       <td>Date of Birth </td><td>{{$admission->date_of_birth}}</td>
     </tr>
     <tr>
       <td>Marital Status </td><td>{{$admission->marital_status}}</td>
     </tr>
      <tr>
       <td>ID / Passport Number </td><td>{{$admission->id_number}}</td>
     </tr>
     <tr>
       <td>Usual Residence </td><td>{{$admission->usual_residence}}</td>
     </tr>
     <tr>
       <td>Level of Education </td><td>{{$admission->level_of_education}}</td>
     </tr>
      <tr>
       <td>Certificate # </td><td>{{$admission->certificate_no}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
     <tr>
       <td>Date of Death </td><td>{{$admission->date_of_death}}</td>
     </tr>
      <tr>
       <td>Place of Death </td><td>{{$admission->place_of_death}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
     <tr>
       <td>Date Released</td><td>{{$admission->date_released}}</td>
     </tr>
     
   </table>

   </div>
   

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     <tr>
      <td colspan="2"><font color="green">First Next Of Kin Details</font></td>
    </tr>
     <tr>
       <td>Name </td><td>{{$admission->kin_name}}</td>
     </tr>
     <tr>
       <td>Phone Number</td><td>{{$admission->kin_phone}}</td>
     </tr>
     <tr>
       <td>ID / Passport Number</td><td>{{$admission->kin_id_number}}</td>
     </tr>
     <tr>
       <td>Kin Address</td><td>{{$admission->kin_address}}</td>
     </tr>
     <tr>
       <td>Kin Relationship</td><td>{{$admission->kin_relationship}}</td>
     </tr>

     <tr>
       <td>Remarks</td><td>{{$admission->kin_remarks}}</td>
     </tr>  
    

     <tr>
      <td colspan="2"><font color="green">Second Next Of Kin Details</font></td>
    </tr>
     <tr>
       <td>Name </td><td>{{$admission->kin2_name}}</td>
     </tr>
     <tr>
       <td>Phone Number</td><td>{{$admission->kin2_phone}}</td>
     </tr>
     <tr>
       <td>ID / Passport Number</td><td>{{$admission->kin2_id_number}}</td>
     </tr>
     <tr>
       <td>Kin Address</td><td>{{$admission->kin2_address}}</td>
     </tr>
     <tr>
       <td>Kin Relationship</td><td>{{$admission->kin2_relationship}}</td>
     </tr>

     <tr>
       <td>Remarks</td><td>{{$admission->kin2_remarks}}</td>
     </tr>  


     <tr>
      <td colspan="2"><font color="green">Other Details</font></td>
    </tr>
     <tr>
       <td>Require Pathologist </td><td>{{$admission->pathologist}}</td>
     </tr>
     <!-- <tr>
       <td>Pathologist Fee</td><td>{{$admission->pathologist_fee}}</td>
     </tr> -->
     <tr>
       <td>Umash Service Fee</td><td>{{$admission->umash_services_fee}}</td>
     </tr>
     <tr>
       <td>Name of Doctor</td><td>{{$admission->name_of_doctor}}</td>
     </tr>

     <tr>
       <td>Contact of Doctor</td><td>{{$admission->contact}}</td>
     </tr>

     <tr>
       <td>Date of Pathology</td><td>{{$admission->date_of_pathology}}</td>
     </tr>
     <tr>
       <td>Police Case</td><td>{{$admission->police_case}}</td>
     </tr>


     

    </table>

</div>
</div>





</body>

</html>



