<?php

function LayTinMoiNhat_MotTin() {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin 
            ORDER BY idTin DESC
            LIMIT 0,1
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinMoi_HienBenPhai() {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin 
            ORDER BY idTin DESC
            LIMIT 1,8
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinXemNhieuNhat() {
    $conn = myConnect();
    $qr = " 
            SELECT * FROM tin 
            ORDER BY SoLanXem 
            DESC LIMIT 0,6
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinMoiNhat_TheoLoai_MotTin($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin 
            where idLT = $idLT
            ORDER BY idTin DESC
            LIMIT 0,1
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayCacTinMoiKhac_TheoLoai($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin
            where idLT = $idLT
            ORDER BY idTin DESC
            LIMIT 1,4
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTenLoaiTin($idLT){
    $conn = myConnect();
    $qr = "
            SELECT * FROM loaitin
            WHERE idLT = $idLT
            LIMIT 0,1
    ";
    $result = mysqli_query($conn, $qr);
    $loaitin = mysqli_fetch_array($result);
    $tenloaitin = $loaitin['Ten'];
    return $tenloaitin;
}
?>