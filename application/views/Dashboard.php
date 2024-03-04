<?php
echo"<table border=1 width=100%>";
if($rec){
    foreach($rec as $row){
        echo"<tr><td>$row->first_name</td><td> $row->last_name</td><td>  $row->email</td><td><a href='".base_url()."index.php/cookie/logout'>Logout</a></td></tr>";
        
    }
}
echo"</table>";


?>