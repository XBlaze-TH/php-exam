<?php
/**
 * Created by PhpStorm.
 * User: Yaksha
 * Date: 1/7/14
 * Time: 1:30 AM
 * Description: Lập trình PHP căn bản - Bài 01
 */

header('Content-Type: text/html; charset=UTF-8');

$str = "A 'quote' is <b>bold</b>";

echo '<hr />';
// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo '<br />';
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
echo '<hr />';

echo 'Các bước cài đặt để lập trình PHP: <br /> <hr />';
echo '- Cài đặt XAMPP, chạy file setup.bat nếu sử dụng gói portable. <br />';
echo '- Cài đặt một IDE hoặc Editor để soạn mã nguồn PHP. <br />';
echo '- Chạy server Apache, MySQl, tạo project PHP trong thư mục htdocs hoặc thư mục root tương ứng. <br />';
echo '- Hoàn tất cài đặt, bắt tay vào code ứng dụng Web đầu tiên.';

