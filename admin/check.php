<?php
    $sql1 ="SELECT count(id) As total1 FROM residents";
    $result1=mysqli_query($mysqli,$sql1);

    if ($result1)
    {
        $values=mysqli_fetch_assoc($result1);
        $residents=$values['total1'];
    }
    else
        $residents = 0;

    $sql2 ="SELECT count(blotter_no) As total2 FROM blotter_record ";
    $result2=mysqli_query($mysqli,$sql2);
    if ($result2) 
    {
        $values=mysqli_fetch_assoc($result2);
        $cases=$values['total2'];
    }
    else
        $cases = 0;

?>