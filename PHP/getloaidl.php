<?php
     include "connect.php";
     $query = "SELECT * FROM loaihinhdulich";
     $data = mysqli_query($conn,$query);
     $mangloaidl = array();
     while($row=mysqli_fetch_assoc($data)){
     	array_push($mangloaidl,new Loaidl(
     		$row['id'],
     		$row['tenloaidulich'],
     		$row['hinhanhloaidulich']
     	));

     }
     echo json_encode($mangloaidl);
     class Loaidl{
     	function Loaidl($id,$tenloaidulich,$hinhanhloaidulich){
     	$this->id=$id;
     	$this->tenloaidulich=$tenloaidulich;
     	$this->hinhanhloaidulich=$hinhanhloaidulich;
     }
 }
?>