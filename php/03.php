<?php
/**
 * Created by PhpStorm.
 * User: Yaksha
 * Date: 1/8/14
 * Time: 11:48 AM
 * Description: Các toán tử cơ bản
 */
header('Content-Type: text/html; charset=UTF-8');
//echo("<title>Hello world</title>");
$title = "Lesson 03";
echo '<script type="text/javascript">' . "\n";
echo 'document.title = "' . $title . '";' . "\n";
echo '</script>' . "\n";

$name = "Trần Hoàng Hải";
$birthYear = 1989;
$currentYear = 2014;
$age = $currentYear - $birthYear;
if ($age >= 20) {
    echo $name . " is a man." . '<br />';
} else {
    echo $name . " is still a noob boy." . '<br />';
}


/*===========KHAI BÁO HÀM TRONG PHP===========*/
function newl()
{
    echo "<br />\n";
}

function printc($check)
{
    if ($check) {
        echo 'True';
        newl();
        var_dump($check);
        newl();
    } else {
        echo 'False';
        newl();
        var_dump($check);
        newl();
    }
}



/*
 * Các toán tử cơ bản trong PHP:
 */


$a = -15;
$b = 9;

echo "$a + $b = " . ($a + $b);
newl();
echo "$a / $b = " . ($a / $b);
newl();
echo "$a * $b = " . ($a * $b);
newl();
echo "$a % $b = " . ($a % $b);
//Nếu $a, $b không phải là số nguyên thì lấy phần nguyên sau đó lấy dư.
//Phần nguyên được xác định bằng cách bỏ đi phần lẻ sau dấu phẩy (.)
newl();

/*
 * Toán tử logic:
 * -----------------------------------------------------
 * Chú ý các toán tử or, and, xor có mức độ ưu tiên thấp
 * VD:
 * $c = true or false tương đương với ($c = true) or false
 * sẽ thực hiện như sau: gán true cho $c và dừng lại.
 * Câu lệnh chỉ tiếp tục khi phép gán $c = true không thực hiện được.
 *
 * Toán tử này thường gặp khi khai báo database.
 * Trong các phép toán logic thông thường nên sử dụng ||, &&
 * hoặc sử dụng các cặp dấu ngoặc đơn () cho khối điều kiện.
 */
$e = true;
$f = false;
$check1 = $e && $f;
$check2 = (true and false);
$check3 = false || true;
$check4 = (false or true);
$check5 = ($e xor $f);
$check6 = ($f xor $e);
$check7 = ($e xor $e);

printc($check7);


//====================CÁC LOẠI VÒNG LẶP TRONG PHP==================//

/*
 * Vòng lặp while - do:
 * Be careful with conditional variable in PHP.
 * There is no warning for u when coding. :(
 *
 */
$i = 0;
while ($i <= 15) {
    if ($i == 0) {
        echo 'While Do:';
        newl();
    }
    echo $i;
    newl();
//    $i++;
}

$age = 8;

switch ($age) {
    case 1:
        echo "Case $age";
        newl();
        break; //break để ngừng thực hiện các lệnh kế tiếp
    case 2:
        echo "Case $age";
        newl();
        break;
    case 3:
        echo "Case $age";
        newl();
        break;
    default: //default khi tất cả các case đều không thỏa mãn
        echo "Case $age";
        newl();
}

if ($abc = 8) {
    echo $abc;
    newl();
} else {
    echo 'FALSE';
    newl();
}