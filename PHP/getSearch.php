<?php
     include "connect.php";

     $mangsearch = array();
     $query = "SELECT *FROM Dulich ";
     $data = mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($data)){
      array_push($mangsearch,new Dulich(
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
   echo json_encode($mangsearch);
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