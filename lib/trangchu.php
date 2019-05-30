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

function LayTinXemNhieuNhat($sotin) {
    $conn = myConnect();
    $qr = " 
            SELECT * FROM tin 
            ORDER BY SoLanXem 
            DESC LIMIT 0,$sotin
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinMoiNhat_TheoLoaiTin_MotTin($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin 
            WHERE idLT = $idLT
            ORDER BY idTin DESC
            LIMIT 0,1
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayCacTinMoiKhac_TheoLoaiTin($idLT,$sotin) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin
            WHERE idLT = $idLT
            ORDER BY idTin DESC
            LIMIT 1,$sotin
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

function HienQuangCao($vitri) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM quangcao
            WHERE vitri = $vitri
            LIMIT 0,3
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayDanhSachTheloai() {
    $conn = myConnect();
    $qr = "
            SELECT * FROM theloai
    ";
    $result = mysqli_query($conn,$qr);
    return $result;
}

function LayDanhSachLoaiTin_TheoTheLoai($idTL) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM loaitin
            WHERE idTL = $idTL
    ";
    $result = mysqli_query($conn,$qr);
    return $result;

}
function LayTinMoiNhat_TheoTheLoai_MotTin($idTL) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin 
            WHERE idTL = $idTL
            ORDER BY idTin DESC
            LIMIT 0,1
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayCacTinMoiKhac_TheoTheLoai($idTL,$sotin) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin
            WHERE idTL = $idTL
            ORDER BY idTin DESC
            LIMIT 1,$sotin
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinMoi_TheoLoai($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin
            WHERE idLT = $idLT
            ORDER BY idTin DESC
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinMoi_TheoLoai_Phantrang($idLT, $from, $sotinmottrang) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM tin
            WHERE idLT = $idLT
            ORDER BY idTin DESC
            LIMIT $from ,$sotinmottrang
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayDuongDan_LoaiTin($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT TenTL, Ten FROM theloai, loaitin
            WHERE  theloai.idTL = loaitin.idTL AND idLT = $idLT
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayChiTietTin($idTin) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM Tin
            WHERE idTin = $idTin
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}

function LayTinCungLoai($idLT) {
    $conn = myConnect();
    $qr = "
            SELECT * FROM Tin
            WHERE idLT = $idLT
            ORDER BY idTin DESC
            LIMIT 1,3
    ";
    $result = mysqli_query($conn, $qr);
    return $result;
}


?>