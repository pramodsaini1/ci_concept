<?php
echo form_open("cookie/submit");
echo form_label("Email-Id");
$data=array("type"=>"email","name"=>"email","placeholder"=>"Enter Your Email-Id");
echo form_input($data);
echo "<br> <br>";
echo form_label("Password");
$data=array("type"=>"password","name"=>"pass");
echo form_input($data);
echo "<br><br>";
$data=array("type"=>"submit","value"=>"Login");
echo form_submit($data);
echo form_close();

?>