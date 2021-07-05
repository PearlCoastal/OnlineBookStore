
<?php

$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("app_ytuebookstore", $con);

 $input = $_POST['input'];  //传递search框过来的值
 $input= trim($input);
if ($input="")
{
echo '搜索框不能为空.';
exit;
}
$result = mysql_query("SELECT * FROM bookinfo where name like '%$input%'");
if (mysql_num_rows($result) < 1) echo '没有数据';
 
if($input= "%英语%"|| "%english")
 { 
  header("Location:english.php");
  }
if($input= "%专业%"|| "%profession")
 {
  header("Location:profession.php");
  }
mysql_close($con);
?>