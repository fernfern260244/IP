<?php include 'server.php';

$name = $_POST['name'];
$address = $_POST['address'];
$storeimage = $_POST['storeimage'];


/*$store_check_query = "INSERT INTO `store`(`store_id`, `store_name`, `store_image`, `store_address`, `member_id`, `category_id`, `product_id`) 
VALUES ('','$name','$address','$storeimage','','','')";*/

$store_check_query = "INSERT INTO `store`(`store_id`, `store_name`, `store_image`, `store_address`) 
VALUES ('','$name','$storeimage','$address')";
        $query = mysqli_query($conn,$store_check_query);
        mysqli_close($conn);
?>