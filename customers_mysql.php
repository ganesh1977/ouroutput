<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$s = mysql_query("select name,type from abc");
$ss = array();
$outp='';
while($row = mysql_fetch_assoc($s))
{
   $ss[] = array("name"=>$row['name'],"type"=>$row['type']);
   // $outp .= '{"Name":"'  . $row['name'] . '",';
    //$outp .= '"Type":"'. $row['type']     . '"}';
}
$outp ='{"records":['.$outp.']}';
mysql_close();
//echo($outp);
echo json_encode($outp);
exit;
?>