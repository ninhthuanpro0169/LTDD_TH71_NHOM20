<?php
     include "connect.php";
     $page = $_GET['page'];
     $iddl = $_POST['iddulich'];
     $space =5;
     $limit = ($page - 1) * $space;
     $mangdulich = array();
     $query = "SELECT *FROM Dulich WHERE iddulich =$iddl LIMIT $limit,$space";
     $data = mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($data)){
     	array_push($mangdulich,new Dulich(
     	$row['id'],
          $row['tendiadiem'],
          $row['diachi'],
          $row['motadiadiem'],
          $row['hinhanhdiadiemdulich'],
          $row['iddulich'],
          $row['solike'],
          $row['lat'],
          $row['lng']));

   }
   echo json_encode($mangdulich);
   class Dulich{
     function Dulich($id,$tendiadiem,$diachi,$motadiadiem,$hinhanhdiadiemdulich,$iddulich,$solike,$lat,$lng){
          $this->id=$id;
          $this->tendiadiem=$tendiadiem;
          $this->diachi=$diachi;
          $this->motadiadiem=$motadiadiem;
          $this->hinhanhdiadiemdulich=$hinhanhdiadiemdulich;
          $this->iddulich=$iddulich;
          $this->solike= $solike;
          $this ->lat = $lat;
          $this ->lng = $lng;
     }
 }
?>