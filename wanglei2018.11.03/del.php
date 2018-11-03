<?php 
include('./CURD.php');
$id = $_GET['id'];
$c = new Db;
$data = $c->del('tick',$id);
if($data){
	echo "<script>alert('抢票成功!');location.href='./show.php'</script>";
}else{
	echo "<script>alert('票已售完!');location.href='./show.php'</script>";
}

 ?>