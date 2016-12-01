@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Admission</h4>

<hr>
</div>	
</div>
<font color="red"><i>All fields marked with * are mandatory</i></font>

<div class="row">
	<div class="col-lg-10">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('admissions/update/'.$admission->id) }}}" accept-charset="UTF-8" enctype="multipart/form-data">
   
    <fieldset>

         <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#remittance" aria-controls="remittance" role="tab" data-toggle="tab">Deceased</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">First Next Of Kin</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Second Next Of Kin</a></li>
    <li role="presentation"><a href="#other_details" aria-controls="other_details" role="tab" data-toggle="tab">Other Details</a></li>
  </ul>


  <!-- Tab panes -->
  <div class="tab-content">

    
    <div role="tabpanel" class="tab-pane active" id="remittance">
      <br>

      <h5><font color ="green">Deceased Details:</font></h5>
         
        <div class="col-lg-5">
            <label for="username">Admission Number:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="admission_no" id="admission_no" value="{{$admission->admission_no}}" readonly>
          </div>

        <div class="col-lg-5">
                        <label for="username">Date of Admission</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date" id="date" value="{{$admission->date}}">
                        </div>
          </div>




         <div class="col-lg-5">
            <label for="username">Category:</label>
          <select name="category" class="form-control">
          <option value="{{$admission->category}}">{{$admission->category}}</option>
          <option></option>
              <option value="general">General</option>
              <option value="VIP">VIP</option>
              <option value="presidential">Presidential</option>
          </select>
        </div>



      
         <div class="col-lg-5">
            <label for="username">Surname<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="surname" id="surname" value="{{$admission->surname}}">
        </div>

        <div class="col-lg-5">
            <label for="username">First name<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="firstname" id="firstname" value="{{$admission->firstname}}">
        </div>

        <div class="col-lg-5">
            <label for="username">Other Names<!-- <span style="color:red">*</span> --> :</label>
            <input class="form-control" placeholder="" type="text" name="other_names" id="other_names" value="{{$admission->other_names}}">
        </div>

        <div class="col-lg-5">
                        <label for="username">Date of Birth</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date_of_birth" id="date_of_birth" value="{{$admission->date_of_birth}}">
                        </div>
          </div>

        <div class="col-lg-5">
             <label for="username">ID Number:</label>
            <input class="form-control" placeholder="" type="text" name="id_number" id="id_number" value="{{$admission->id_number}}">
        </div>

        <div class="col-lg-5">
            <label for="username">Gender:</label>            
          <select name="gender" class="form-control">
            <option value="{{$admission->gender}}">{{$admission->gender}}</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>              
          </select>
        </div>

        <!-- <div class="col-lg-5">
            <label for="username">marital Status:</label>
          <select name="marital_status" class="form-control">
            <option value="{{$admission->marital_status}}">{{$admission->marital_status}}</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
          </select>
        </div> -->

        <div class="col-lg-5">
            <label for="username">Age:</label>
            <input class="form-control" placeholder="" type="text" name="age" id="age" value="{{$admission->age}}">
        </div>

        <!-- <div class="col-lg-5">
            <label for="username">Level of Education:</label>
            <input class="form-control" placeholder="" type="text" name="level_of_education" id="certificate_no" value="{{$admission->usual_residence}}">
        </div> -->


        <div class="col-lg-5">
            <label for="username">Certificate Number:</label>
            <input class="form-control" placeholder="" type="text" name="certificate_no" id="certificate_no" value="{{$admission->certificate_no}}">
        </div>

        
        <div class="col-lg-5">
                        <label for="username">Date of Death</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date_of_death" id="date_of_death" value="{{$admission->date_of_death}}">
                        </div>
          </div>

        <div class="col-lg-5">
            <label for="username">Cause of Death:</label>
            <input class="form-control" placeholder="" type="text" name="cause_of_death" id="cause_of_death" value="{{$admission->cause_of_death}}">
        </div>




        <div class="col-lg-5">
            <label for="username">Place of Death:</label>
            <input class="form-control" placeholder="" type="text" name="place_of_death" id="place_of_death" value="{{$admission->place_of_death}}">
        </div>

        <div class="col-lg-5">
           <label for="username">Narration:</label>
            <textarea rows="5" class="form-control" name="narration" id="narration" >{{$admission->narration}}</textarea>
        </div>

         <br>
          <br>
          <br>

        </div>

      
    
    <div role="tabpanel" class="tab-pane" id="profile">


        
        


        <hr>
        <h5><font color ="green">First Next of Kin Details:</font></h5>

        <div class="col-lg-5">

            <label for="username">Surname<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin_surname" id="kin_surname" value="{{$admission->kin_surname}}">        

        
            <label for="username">First name<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin_firstname" id="kin_firstname" value="{{$admission->kin_firstname}}">

        
            <label for="username">Other Names</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin_other_names" id="kin_other_names" value="{{$admission->kin_other_names}}">
        
            <label for="username">Phone Number<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin_phone" id="kin_phone" value="{{$admission->kin_phone}}">
        
            <label for="username">ID Number<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin_id_number" id="kin_id_number" value="{{$admission->kin_id_number}}">

            </div>
            <div class="col-lg-5">
        
            <label for="username">Address:</label>
            <input class="form-control" placeholder="" type="text" name="kin_address" id="kin_address" value="{{$admission->kin_address}}">

            <label for="username">Relationship:</label>
            <input class="form-control" placeholder="" type="text" name="kin_relationship" id="kin_relationship" value="{{$admission->kin_relationship}}">

            <div class="form-group">
            <label for="username">Remarks:</label>
            <textarea rows="5" class="form-control" name="kin_remarks" id="kin_remarks" value="{{$admission->kin_remarks}}"></textarea>
            </div>

        </div>

      
    </div>

      <div role="tabpanel" class="tab-pane" id="messages">


        
        <hr>
        <h5><font color ="green">Second Next of Kin Details:</font></h5>

        <div class="col-lg-5">

            <label for="username">Surname<!-- <span style="color:red">*</span> --> :</label>
            <input class="form-control" placeholder="" type="text" name="kin2_surname" id="kin2_surname" value="{{$admission->kin2_surname}}">        

        
            <label for="username">First name<!-- <span style="color:red">*</span> --> :</label>
            <input class="form-control" placeholder="" type="text" name="kin2_firstname" id="kin2_firstname" value="{{$admission->kin2_firstname}}">

        
            <label for="username">Other Names</span> :</label>
            <input class="form-control" placeholder="" type="text" name="kin2_other_names" id="kin_2other_names" value="{{$admission->kin2_other_names}}">
        
            <label for="username">Phone Number:</label>
            <input class="form-control" placeholder="" type="text" name="kin2_phone" id="kin2_phone" value="{{$admission->kin2_phone}}">
        
            <label for="username">ID Number:</label>
            <input class="form-control" placeholder="" type="text" name="kin2_id_number" id="kin2_id_number" value="{{$admission->kin2_id_number}}">

          </div>
          <div class="col-lg-5">

            <label for="username">Address:</label>
            <input class="form-control" placeholder="" type="text" name="kin2_address" id="kin2_address" value="{{$admission->kin2_address}}">

            <label for="username">Relationship:</label>
            <input class="form-control" placeholder="" type="text" name="kin2_relationship" id="kin2_relationship" value="{{$admission->kin2_relationship}}">
        
            <div class="form-group">
            <label for="username">Remarks:</label>
            <textarea rows="5" class="form-control" name="kin2_remarks" id="kin2_remarks" value="{{$admission->kin2_remarks}}"></textarea>
            </div>

        </div>
      </div>


      <div role="tabpanel" class="tab-pane" id="other_details">

        <div class="col-lg-5">
        <hr>
        <h5><font color ="green">Other Details:</font></h5>


        <div class="checkbox">
          <label>
          @if($admission->pathologist == 'YES')
              <input type="checkbox" name="pathologist" id="pathologist" checked>
                    Requires Services of Pathologist

          @else

          <input type="checkbox" name="pathologist" id="pathologist">
                    Requires Services of Pathologist

          @endif
              </label>

        </div>

        <div  id="pathologistinfo">

        <!-- <div class="form-group">
        <label for = "username">Pathologist Fee:</label> 
        
          <div class="input-group">
            <span class="input-group-addon">KES</span>
            <input type="text" class="form-control"  id="pathologist_fee" name="pathologist_fee" value="{{$admission->pathologist_fee}}">
          </div>
        
        </div> -->

        <div class="form-group">
            <label for="username">Name of Doctor:</label>
            <input class="form-control" placeholder="" type="text" name="name_of_doctor" id="name_of_doctor" value="{{$admission->name_of_doctor}}">
        </div>

         <div class="form-group">
            <label for="username">Contact:</label>
            <input class="form-control" placeholder="" type="text" name="contact" id="contact" value="{{$admission->contact}}">
        </div>


        <div class="form-group">
                        <label for="username">Date of Pathology</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date_of_pathology" id="date_of_pathology" value="{{$admission->date_of_pathology}}">
                        </div>
          </div>

        <div class="form-group">
        <label for = "username">Umash Services Fee:</label> 
        
          <div class="input-group">
            <span class="input-group-addon">KES</span>
            <input type="text" class="form-control"  id="umash_services_fee" name="umash_services_fee" value="{{$admission->umash_services_fee}}">
          </div>
        </div>
       </div>

        <div class="checkbox">
          <label>
          @if($admission->police_case == 'YES')
              <input type="checkbox" name="police_case" id="police_case" checked>
                    Police Case
          @else
           <input type="checkbox" name="police_case" id="police_case">
                    Police Case
          
            @endif
          </label>




              <br>
              <p>

                         

        </div>

        <div class="form-group" id="policeinfo">

        <div class="form-group">
            <label for="username">Description:</label>
           <textarea class="form-control" name="description" value="{{$admission->description}}"></textarea>
        </div>
      </div>


      <div class="form-group">
                        <label for="username"><b>Attach Documents</b></label><br>
                        <div id="signPreview"></div>
                        <input class="img" placeholder="" type="file" name="document1" id="document1File" value="{{$admission->document1}}">
                        <input class="img" placeholder="" type="file" name="document2" id="document2File" value="{{$admission->document2}}">
                        <input class="img" placeholder="" type="file" name="document3" id="document3File" value="{{$admission->document3}}">
                        <input class="img" placeholder="" type="file" name="document4" id="document3File" value="{{$admission->document4}}">
                        <input class="img" placeholder="" type="file" name="document5" id="document5File" value="{{$admission->document5}}">
                </div>

        <script type="text/javascript">
            $(document).ready(function(){
            $("#policeinfo").hide();            
            $('#police_case').click(function(){

            if($('#police_case').is(":checked")){
            $('#police_case:checked').each(function(){
            
            $("#policeinfo").show();           

            });
            }else{

              $("#policeinfo").hide(); 
            }
            });



            $("#pathologistinfo").hide();            
            $('#pathologist').click(function(){

            if($('#pathologist').is(":checked")){
            $('#pathologist:checked').each(function(){
            
            $("#pathologistinfo").show();           

            });
            }else{

              $("#pathologistinfo").hide(); 
            }
            });

            
            });
          </script>

<fieldset>
       
       <hr>

       
        
        
        <div class="form-actions col-lg-2">
        
          <button type="submit" class="btn btn-success btn-sm">Update Admission</button>
        </div>

    </fieldset>


    </div>


    </div>

  </div>

  </fieldset>
      
</form>
		

  </div>

</div>

@stop