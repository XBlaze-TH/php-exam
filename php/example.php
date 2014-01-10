<?php
/**
 * Created by PhpStorm.
 * User: Yaksha
 * Date: 1/9/14
 * Time: 10:35 AM
 * Description: mô tả chức năng một số hàm php mới học.
 */
header('Content-Type: text/html; charset=UTF-8');

/*
 * htmlentities()
 * Mã hóa lại dòng string (bao gồm cả các phần tử có cú pháp html)
 * Sử dụng với echo để in ra đúng y nguyên nội dung chuỗi lên trình duyệt.
 */

include("03.php");

$element = '<a href="http://www.google.com">Google Link</a>';
echo htmlentities($element) . '<br />';

/*
 * html_entity_decode()
 * Có tác dụng ngược lại với htmlentities();
 */

$decode = htmlentities($element);
echo html_entity_decode($decode) . '<br />';

/*
 * htmlspecialchars();
// * giống như htmlentities() tuy nhiên htmlentities() mã hóa tất cả các ký tự trong string
 * còn htmlspecialchars() chỉ mã hóa những ký tự đặc biệt (đặc biệt đối với html: tức là các
 * mã ký tự mà html quy định)
 */

$new = htmlspecialchars($element);
echo $new . '<br />';

echo 'Một ví dụ khác để so sánh: (¡™£¢∞§¶)<br />' . "\n";
$testString = '¡™£¢∞§¶';
echo 'Original: ' . $testString ."<br />\n";
echo 'htmlentities(): ' . htmlentities($testString). "<br />\n";
echo 'decode: ' . html_entity_decode(htmlentities($testString)) . "<br />\n";
echo 'htmlspecalchars(): ' . htmlspecialchars($testString) . "<br />\n";
echo 'decode: ' . html_entity_decode(htmlspecialchars($testString)) . "<br />\n";

// Trong PHP 5.4 bộ mã mặc định là UTF-8;

