<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$s = mysql_query("select name,type from abd");
$ss = array();
$outp='';
while($row = mysql_fetch_assoc($s))
{
   $ss[] = array("Name"=>$row['name'],"Type"=>$row['type']);
    //$outp .= '{"Name":"'  . $row['name'] . '",';
    //$outp .= '"Type":"'. $row['type']     . '"}';
}
//$outp ='{"records":['.$outp.']}';
mysql_close();
//echo($outp);
print json_encode($ss);
exit;
?>