<?


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'kkkk');



$sheet = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($sheet," ALTER TABLE `products` AUTO_INCREMENT = 1");

if (!$sheet) {
    die('Error connect to database!');
}