<?php
$sql ="SELECT * FROM officials WHERE tmp='$pic1'";
$res = mysqli_query($mysqli,$sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        $id = $row['official_id'];
        $sqlImg ="SELECT * FROM picture WHERE tmp='$pic1'";
        $resImg = mysqli_query($mysqli,$sqlImg);
        while($rowImg = mysqli_fetch_assoc($resImg)){
                echo "<img style='width:140px; height:140px;' src='assets/image/uploads/".$rowImg['name']."'>";
        }
    }
}
?> 