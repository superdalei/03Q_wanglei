<?php 
include('./CURD.php');
$data = $_REQUEST;
$c = new Db;
$data = $c->add('tick',$data);
if($data){
	echo "<script>alert('添加成功!');location.href='./show.php'</script>";
}
 ?>