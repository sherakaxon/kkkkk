<?



require_once '../config/connect.php';



$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];



mysqli_query($sheet,"INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");



header('Location: /');