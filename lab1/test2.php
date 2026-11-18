<?php
echo "<h3>1. Các phép toán số học cơ bản</h3>";
$a = 15;
$b = 4;
echo "Số a = $a, Số b = $b<br>";
echo "Cộng (a + b) = " . ($a + $b) . "<br>";
echo "Trừ (a - b) = " . ($a - $b) . "<br>";
echo "Nhân (a * b) = " . ($a * $b) . "<br>";
echo "Chia (a / b) = " . ($a / $b) . "<br>";
echo "Chia lấy dư (a % b) = " . ($a % $b) . "<br>";

echo "<h3>2. So sánh biến kiểu số nguyên và chuỗi số</h3>";
$num = 10;       
$str_num = "10"; 

echo "\$num == \$str_num: "; 
var_dump($num == $str_num); 
echo " (So sánh bằng giá trị, bỏ qua kiểu dữ liệu)<br>";

echo "\$num === \$str_num: "; 
var_dump($num === $str_num); 
echo " (So sánh tuyệt đối: cả giá trị và kiểu dữ liệu phải giống nhau)<br>";

echo "\$num != \$str_num: "; 
var_dump($num != $str_num); 
echo " (So sánh khác giá trị)<br>";

echo "\$num !== \$str_num: "; 
var_dump($num !== $str_num); 
echo " (So sánh khác tuyệt đối: khác giá trị hoặc khác kiểu dữ liệu)<br>";

echo "<h3>3. Phép tăng trước và tăng sau</h3>";
$x = 5;
echo "Giá trị ban đầu \$x = 5<br>";
echo "Biểu thức ++$x (Tăng trước): " . (++$x) . " (Giá trị \$x sau khi tăng: $x)<br>";

$y = 5;
echo "Giá trị ban đầu \$y = 5<br>";
echo "Biểu thức $y++ (Tăng sau): " . ($y++) . " (Giá trị \$y sau khi hiển thị: $y)<br>";

echo "<h3>4. Nối chuỗi bằng . và .=</h3>";
$str1 = "Lập trình";
$str2 = " PHP";
$ket_qua = $str1 . $str2; 
echo "Dùng dấu '.': " . $ket_qua . "<br>";

$text = "Học";
$text .= " Web 1"; 
echo "Dùng dấu '.=': " . $text . "<br>";

echo "<h3>5. Đếm số lượng ký tự</h3>";
$chuoi_khong_dau = "Hello PHP";
$chuoi_co_dau = "Xin chào Việt Nam";

echo "Chuỗi không dấu ('$chuoi_khong_dau') dùng strlen(): " . strlen($chuoi_khong_dau) . "<br>";
echo "Chuỗi có dấu ('$chuoi_co_dau') dùng strlen(): " . strlen($chuoi_co_dau) . " (đếm theo số byte)<br>";
echo "Chuỗi có dấu ('$chuoi_co_dau') dùng mb_strlen(): " . mb_strlen($chuoi_co_dau, 'UTF-8') . " (đếm theo số ký tự thực tế)<br>";

echo "<h3>6. Chuyển đổi chữ hoa và chữ thường</h3>";
$str_goc = "Lập Trình Web 1 - PHP & MySQL";
echo "Chuỗi gốc: $str_ goc<br>";
echo "strtoupper(): " . strtoupper($str_goc) . "<br>";
echo "strtolower(): " . strtolower($str_goc) . "<br>";
echo "mb_strtoupper(): " . mb_strtoupper($str_goc, 'UTF-8') . "<br>";
echo "mb_strtolower(): " . mb_strtolower($str_goc, 'UTF-8') . "<br>";

echo "<h3>7. Ép kiểu chuỗi sang int với var_dump()</h3>";
$s1 = "123 abc";
$s2 = "abc 123";

$int_s1 = (int)$s1;
$int_s2 = (int)$s2;

echo "Chuỗi '$s1' sau khi ép kiểu: ";
var_dump($int_s1);
echo "<br>";

echo "Chuỗi '$s2' sau khi ép kiểu: ";
var_dump($int_s2);
echo "<br>";


echo "<h3>8. Hiển thị kiểu dữ liệu bằng var_dump()</h3>";
$i_val = 100;             
$f_val = 45.56;           
$s_val = "Hello World";   
$b_val = true;

echo "Biến số nguyên (int): "; 
var_dump($i_val); 
echo "<br>";

echo "Biến số thực (float): "; 
var_dump($f_val); 
echo "<br>";

echo "Biến chuỗi (string): "; 
var_dump($s_val); 
echo "<br>";

echo "Biến luận lý (bool): "; 
var_dump($b_val); 
echo "<br>";
?>