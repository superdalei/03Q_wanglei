<?php 	
/**
* 
*/
class Db
{
	function __construct()
	{
		header("Content-Type: text/html; charset=utf-8");
		$con = @mysql_connect("127.0.0.1","root","root");
		mysql_select_db("1603q");
	}

	public function select($table){
		$sql = "select * from ".$table;
		$r = mysql_query($sql);
		$arr = "";
		while ($c = mysql_fetch_assoc($r)) {
			$arr[] = $c;
		}
		return $arr;
	}
	public function del($table,$id){
		$sql = "select * from " .$table." where id=" .$id;
		$r = mysql_query($sql);
		$c = mysql_fetch_assoc($r);
		if($c['num']<=0){
			return false;
		}
		$num = $c['num'] - 1;
		$sql2 = "update ".$table." set num = " .$num ." where id= " .$id;
		$r2 = mysql_query($sql2);
		if($r2){
			return ture;
		}
	}

	public function add($table,$data){
		$action_add = $data['action_add'];
		$over_add = $data['over_add'];
		$num = $data['num'];
		$sql = "insert into ".$table." (action_add,over_add,num) values(".$action_add.",".$over_add.",".$num.")";
		$r2 = mysql_query($sql);
		if($r2){
			return ture;
		}
	}
}

 ?>