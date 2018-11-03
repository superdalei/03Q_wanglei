<?php 
@include('./CURD.php');
$c = new Db;
$data = $c->select('tick');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<center>
 		<form action="">
 			<table border="3">
 			<tr>
 				<Td><a href="./add.php">添加</a></Td>
 			</tr>
 				<tr>
 					<td>出发地</td>
 					<td>目的地</td>
 					<td>票数</td>
 					<td>操作</td>
 				</tr>
 				<?php 
 				foreach ($data as $key => $v) {
 				 ?>
 				 <tr>
 				 	<td><?php echo $v['action_add'];?></td>
 				 	<td><?php echo $v['over_add'];?></td>
 				 	<td><?php echo $v['num'];?></td>
 				 	<td><a href="./del.php?id=<?php echo $v['id'];?>">抢票</a></td>
 				 </tr>
 				 <?php 
 				 } ?>
 			</table>
 		</form>
 	</center>
 </body>
 </html>