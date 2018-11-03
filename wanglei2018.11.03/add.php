<?php 

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	

	<form action="./add_do.php" method="post"><table>
		<tr>
			<td>出发地</td>
			<td><input type="text" name='action_add' required></td>
		</tr>
		<tr>
			<td>目的地</td>
			<td><input type="text" name="over_add" required></td>
		</tr>
		<tr>
			<td>票数</td>
			<td><select name="num" id="">
			<option value="">请选择...</option>
			<?php 
			for($i=1;$i<100;$i++){
			 ?>

			 	<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php 
			} ?></select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="发放"></td>
			<td></td>
		</tr>
	</table></form>
	</center>
</body>
</html>