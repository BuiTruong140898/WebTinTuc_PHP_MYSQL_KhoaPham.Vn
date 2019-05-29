<?php

function TinMoiNhat_MotTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 0,1
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function TinMoiNhat_BonTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 1,8
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}
?>