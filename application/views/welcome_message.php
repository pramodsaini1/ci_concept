 <?php
  echo form_open("Welcome/submit");
  echo form_label("Roll.No:","roll");
  $data=array("type"=>"text","name"=>"roll");
  echo form_input($data);
  echo "<br><br>";
  echo form_label("Name:","user");
  $data=array("type"=>"text","name"=>"user");
  echo form_input($data);
  echo "<br><br>";
  echo form_label("Avg:","avg");
  $data=array("type"=>"text","name"=>"avg");
  echo form_input($data);
  echo "<br><br>";
  $data=array("type"=>"submit","value"=>"submit");
  echo form_submit($data);
  echo form_close();

  echo"<br><br>";
  echo"<table border=1 width=70%>";
  if(isset($record)){
    foreach($record as $row){
        echo "<tr><td>".$row->sn."</td><td>".$row->name."</td><td>".$row->avgr."</td><td><a href=".base_url()."index.php/Welcome/edit/".$row->sn.">Edit</a></td><td><a href=".base_url()."index.php/Welcome/delete/".$row->sn.">Delete</a></td></tr>";
     }
  }
  echo"</table>";

?>