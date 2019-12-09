<?php
    $sqlresident ="SELECT count(id) As resCount FROM residents";
    $resResult=mysqli_query($mysqli,$sqlresident);

    if ($resResult)
    {
        $values=mysqli_fetch_assoc($resResult);
        $residents=$values['resCount'];
    }
    else
        $residents = 0;

    $sqlBlotter ="SELECT count(blotter_no) As blotterCount FROM blotter_record ";
    $blotterResult=mysqli_query($mysqli,$sqlBlotter);
    if ($blotterResult) 
    {
        $values=mysqli_fetch_assoc($blotterResult);
        $cases=$values['blotterCount'];
    }
    else
        $cases = 0;

    $sql3

?>