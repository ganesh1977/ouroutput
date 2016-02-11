<?php
mysql_connect("localhost","root","");
mysql_select_db("intouch");
$r = mysql_query("SELECT email,first_name,home_phone FROM `imp_v_patient` where patient_id=49426");
$res = mysql_fetch_array($r);
//print_r($res);
return $res;
?>