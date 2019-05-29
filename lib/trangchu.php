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
	//echo gettype($result),"\n";
	//echo $result ? 'true' : 'false';

    return $result;
}
?>