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
  if(isset($record)){
    foreach($record as $row){
        echo $row->sn." ".$row->name." ".$row->avgr."<br>";
    }
  }

?>