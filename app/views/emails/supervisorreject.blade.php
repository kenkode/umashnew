<p>
Hello {{$name}}, 
</p>

<p>Your Leave application has been rejected by your supervisor. </p>

<br><br>
<p>Regards,</p>
<?php $orgname=Organization::find(1)->pluck('name'); ?>
<p>{{$orgname}}</p>
