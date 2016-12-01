
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
    <div align = "center"><h3>RECORD OF CLOTHING AND COFFIN</div></h3>

<table  class="table table-condensed table-bordered table-responsive table-hover">

     <tr>
      <th colspan="2">Deceased Details</th>
    </tr>
     <tr>
       <td>Name</td><td>{{$clothes->name}}</td>
     </tr>
      <tr>
       <td>Date Recorded</td><td>{{$clothes->date}}</td>
     </tr>
     <tr>
       <td>Cross Type </td><td>{{$clothes->crosstype}}</td>
     </tr>
     <tr>
       <td>Coffin Type</td><td>{{$clothes->coffin}}</td>
     </tr>
      <tr>
       <td>Date of Departure </td><td>{{$clothes->date_of_departure}}</td>
     </tr>


     <tr>
      <td colspan="2"><font color="green">Men's Wear Details</font></td>
    </tr>
     <tr>
       <td>Suit </td><td>{{$clothes->suit}}</td>
     </tr>
     <tr>
       <td>Trouser</td><td>{{$clothes->trouser}}</td>
     </tr>
     <tr>
       <td>Coat</td><td>{{$clothes->coat}}</td>
     </tr>
     <tr>
       <td>Shirt</td><td>{{$clothes->shirt}}</td>
     </tr>
     <tr>
       <td>Tie</td><td>{{$clothes->tie}}</td>
     </tr>
     <tr>
       <td>Vest</td><td>{{$clothes->vest}}</td>
     </tr>
     <tr>
       <td>Shoes</td><td>{{$clothes->shoes}}</td>
     </tr>
     <tr>
       <td>Socks</td><td>{{$clothes->socks}}</td>
     </tr>
     <tr>
       <td>Underwear</td><td>{{$clothes->underwear}}</td>
     </tr>
     <tr>
       <td>Belt</td><td>{{$clothes->belt}}</td>
     </tr>
     <tr>
       <td>Cufflincks</td><td>{{$clothes->cufflincks}}</td>
     </tr>
     <tr>
       <td>Boxers</td><td>{{$clothes->boxers}}</td>
     </tr>
     
     
   </table>

   </div>

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     
    

     <tr>
      <td colspan="2"><font color="green">Ladies' wear Details</font></td>
    </tr>
     <tr>
       <td>Dress </td><td>{{$clothes->dress}}</td>
     </tr>
     <tr>
       <td>Trouser</td><td>{{$clothes->trouser_lady}}</td>
     </tr>
     <tr>
       <td>Coat</td><td>{{$clothes->coat_lady}}</td>
     </tr>
     <tr>
       <td>Skirt</td><td>{{$clothes->skirt}}</td>
     </tr>
     <tr>
       <td>Blouse</td><td>{{$clothes->blouse}}</td>
     </tr>
     <tr>
       <td>Stocking</td><td>{{$clothes->stocking}}</td>
     </tr>
     <tr>
       <td>Headwear</td><td>{{$clothes->headwear}}</td>
     </tr>
     <tr>
       <td>Gloves</td><td>{{$clothes->gloves}}</td>
     </tr>
     <tr>
       <td>Petticoat</td><td>{{$clothes->petticoat}}</td>
     </tr>
     <tr>
       <td>Pantie</td><td>{{$clothes->pantie}}</td>
     </tr>
     <tr>
       <td>Camisol</td><td>{{$clothes->camisol}}</td>
     </tr>
     <tr>
       <td>Shoes</td><td>{{$clothes->shoes_lady}}</td>
     </tr>

     <tr>
      <td colspan="2"><font color="green">Baby's Wear / Other Details</font></td>
    </tr>
     <tr>
       <td>1: </td><td>{{$clothes->baby1}}</td>
     </tr>
     <tr>
       <td>2: </td><td>{{$clothes->baby2}}</td>
     </tr>
     <tr>
       <td>3: </td><td>{{$clothes->baby3}}</td>
     </tr>
     <tr>
       <td>4: </td><td>{{$clothes->baby4}}</td>
     </tr>
     <tr>
       <td>5: </td><td>{{$clothes->baby5}}</td>
     </tr>

      <tr>
      <td colspan="2"><font color="green">Extra Details</font></td>
    </tr>
     <tr>
       <td>Receiving Officer </td><td>{{$clothes->officer}}</td>
     </tr>
     <tr>
       <td>Delivering Relative </td><td>{{$clothes->relative}}</td>
     </tr>


     

    </table>

</div>
</div>





</body>

</html>



