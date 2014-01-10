<script language="php">
/**
 * Created by PhpStorm.
 * User: Yaksha
 * Date: 1/7/14
 * Time: 1:36 AM
 * Description: Lập trình PHP căn bản - Bài 02
 * Có thể khai báo mã php bằng tag <script language="php">
 */
header('Content-Type: text/html; charset=UTF-8');
$a = 10;
$b = 12;
echo "Tổng của hai số $a và $b là: " . ($a + $b);
$name = "John Smith";
/*
 * Block comment
 */
print '<br />' . $name;
</script>

Tích của hai số là: <?=($a * $b) ?>

<?php
/*
 * Chú ý phân biệt các lệnh xuất ra trình duyệt:
 * echo ''; hiển thị ngay thông tin trên trình duyệt, có thể xuất nhiều phần tử cách nhau bởi dấu phẩy (,).
 * print (); tương tự echo nhưng chỉ xuất ra 1 chuỗi.
 * printf (): giống printf trong C.
 */
