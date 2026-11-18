<?php
echo "Ho va ten: TRINH QUOC VUONG <br>";
echo "Ngay sinh: 30/07/2007 <br>";
echo "MSSV:2125110092 <br>";

$HOTEN ="TRINH QUOC VUONG";
$MSSV ="2125110092";
$SDT="0385013321";
$NGAYSINH="30/07/2007";
echo "Họ tên: " . $HOTEN . "<br>";
echo "MSSV: " . $MSSV . "<br>";
echo "Số điện thoại: " . $SDT . "<br>";
echo "Ngày sinh: " . $NGAYSINH . "<br>";

define("HOST", "localhost");
define("DATABASE", "ten_csdl");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";
echo "<hr>";


echo "Nháy kép: Xin chào $hoTen <br>"; 
echo 'Nháy đơn: Xin chào $hoTen <br>';