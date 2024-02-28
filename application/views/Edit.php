<?php
if(isset($rec)){
    foreach($rec as $row){
        echo form_open("Welcome/update".$row->sn);
        echo form_label("Name:","user");
        $data=array("type"=>"text","name"=>"user","value"=>$row->name);
        echo form_input($data);
        echo "<br><br>";
        echo form_label("Avg:","avg");
        $data=array("type"=>"text","name"=>"avg","value"=>$row->avgr);
        echo form_input($data);
        echo "<br><br>";
        $data=array("type"=>"submit","value"=>"update");
        echo form_submit($data);
        echo form_close();
    }
}
?>