<!DOCTYPE html>
<html>
<head>
  <title>My App</title>
</head>
<body
<h1>danh sach phieu da dang ky</h1>
  <ul>
    <?php foreach ($danhSachPhieuDK as $phieu): ?>
      <li><?= $phieu['HoTen'] ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>
