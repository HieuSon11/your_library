<?php
class PhieuDangKy {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM phieudangkythuctap');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  //tao phieu dang ky
  public static function create($hoten, $masinhvien, $chuyennganh, $congty) {
    global $pdo;
    
    $sql = "INSERT INTO phieudangkythuctap (HoTen, MaSinhVien, ChuyenNganh, CongTy) VALUES (:hoten, :masinhvien, :chuyennganh, :congty)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':hoten', $hoten);
    $stmt->bindParam(':masinhvien', $masinhvien);
    $stmt->bindParam(':chuyennganh', $chuyennganh);
    $stmt->bindParam(':congty', $congty);

    return $stmt->execute();
  }
}
