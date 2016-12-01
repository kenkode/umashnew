<p>
Hello {{$name}}, 
</p>

<p>Your Leave application has been approved by your supervisor. Please await approval from the Human resource: </p>

<br><br>
<p>Regards,</p>
<?php $orgname=Organization::find(1)->pluck('name'); ?>
<p>{{$orgname}}</p>
