<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$data = json_decode(file_get_contents("php://input"));
$sqql = "insert into abd(name,type) values('$data->uname','$data->type')";
$res = mysql_query($sqql);
if($res)
{
  $arr = array("msg"=>"Inserted successfully");
  $jsr = json_encode($arr);
  print_r($jsr);
}
else
{
  $arr = array("msg"=>"Not Inserted successfully");
  $jsr = json_encode($arr);
  print_r($jsr);
}
?>