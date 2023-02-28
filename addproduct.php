<?php 
include ('server.php'); 
if(isset($_POST['add_product'])){
    $name = $_POST['p_name'];
    $infor = $_POST['p_infor'];
    $category = $_POST['p_category'];
    $quanity = $_POST['p_quanity'];
    $price = $_POST['p_price'];
    $image = $_FILES['p_image']['name'];
    $image_temp_name = $_FILES['p_image']['tmp_name'];
    $folder_image = 'images/'.$image;

    $mysql = "INSERT INTO `product`( `product_name`, `product_image`, `product_inf.`, `product_quantity`, `product_price/piece`, `store_id`, `category_id`) 
    VALUES ('$name','$image','$infor',' $quanity ','$price','','$category');";
    
    $result = mysqli_query($conn,$mysql);
    if($result){
        move_uploaded_file($image_temp_name, $folder_image);
    }}

    $query_select = "SELECT * FROM category ORDER BY category_name asc" or die("Error:". mysqli_connect_error());
    $result_select = mysqli_query($conn , $query_select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มสินค้า</title>
</head>
<body class="bg-amber-500">
    <nav class="py-0 bg-amber-700 shadow-lg ">
        <div class="container mx-auto px-2 flex justify-between ">
            <div class="pr-20  ">
                <a href="index.php"><img class="image" src="images/logo.png" style="height: 80px;width: 80px;" ></a>
            </div>
            <div class=" flex flex-row space-x-4">
                
                <div class="flex-none gap-2 pt-6  ">
                    <div class="form-control ">
                        <input type="text" placeholder="Search" class="input input-bordered rounded-lg pl-3 " />
                    </div>
                </div>
           
                <div class="flex flex-row">
                    <div><span><a href=""><img src="images/01.png" style="width: 40px;height: 50px;" class="pl-2   pt-6"></a></span></div>
                    <div><span><a href=""><img src="images/help.png"style="width: 60px;height: 50px;" class="pl-6  pt-6"></a></span></div>
                    <div><span><a href=""><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                    <div><span><a href=""><img src="images/chat.png"style="width: 50px;height: 50px;" class="pl-6  pt-6 "></a></span></div>
                </div>
            
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
           
        </div>
       </nav>
<section class="max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">เพิ่มสินค้า</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="grid grid-row-1 gap-6 mt-4 ">
            <div>
                <label class=" text-black" >ชื่อสินค้า </label>
                <input id="name" type="text" name="p_name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class=" text-black" >ข้อมูลสินค้า</label>
                <textarea id="infor" type="textarea" name="p_infor" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>

            <div>
                <label class=" text-black" >หมวดหมู่</label>
                <select name="p_category" id="category" required>
                    <option value="">-Choose-</option>
                    <?php foreach($result_select as $result_select){?>
                    <option value="<?php echo $result_select["category_name"];?>">
                    <?php echo $result_select["category_name"];?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label class=" text-black" >จำนวนสินค้า</label>
                <input id="quanity" type="number" name ="p_quanity" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class=" text-black">ราคา</label>
                <input id="price" type="number" name ="p_price" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            
            
            <div>
                <label class="block text-sm font-medium text-black">
                รูปสินค้า  
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="p_image" type="file" accept="image/png, image/jpg, image/jpeg" required class="sr-only">
                    </label>
                    <p class="pl-1 text-white">แนบรูปสินค้า</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" name ="add_product" value="add product"class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">เพิ่มสินค้า</button>
        </div>
    </form>
</section>

</body>
</html>
<?php mysqli_close($conn);?>