<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขสินค้า</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="py-0 bg-amber-700 shadow-lg ">
        <div class="container mx-auto px-2 flex justify-between ">
            <div class="pr-20  ">
                <a href="index.php"><img class="image" src="images/logo.png" style="height: 80px;width: 80px;" ></a>
            </div>
            <div class=" flex flex-row space-x-4">  
                
                <div class="flex flex-row">
                    <div><span><a href="shoppingCart.php"><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
        </div>
       </nav>
    <div class="flex items-center justify-center pt-6">
        <table class="border-separate border border-slate-500">
            <thead>
                <th class="border border-slate-600 px-4 py-4">Product image</th>
                <th class="border border-slate-600 px-4 py-4">Product name</th>
                <th class="border border-slate-600 px-4 py-4">information</th>
                <th class="border border-slate-600 px-2 py-4">category</th>
                <th class="border border-slate-600 px-2 py-4">quanity</th>
                <th class="border border-slate-600 px-2 py-4">price</th>
                <th class="border border-slate-600 px-4 py-4">action</th>

            </thead>
            <tbody>
            <?php 
					$select = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
					if (mysqli_num_rows($select) > 0) {
						while ($row = mysqli_fetch_assoc($select)) {
							
						
				?>
				<tr>
					<td class="border border-slate-600 px-6 py-4"><img class="object-scale-down h-30 w-20" src="images/<?php echo $row['product_image']; ?>"></td>
					<td class="border border-slate-600 px-4"><?php echo $row['product_name']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['product_inf.']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['category_id']; ?></td>
                    <td class="border border-slate-600 px-4"><?php echo $row['product_quantity']; ?></td>
					<td class="border border-slate-600 px-4">$<?php echo $row['product_price/piece']; ?>/-</td>
                    <td class="border border-slate-600 px-4">
                    <a href="updateproduct.php?id=<?php echo $row['product_id']; ?>"class="px-2 py-2 leading-5 text-white bg-amber-500 rounded-md hover:bg-pink-700 focus:outline-none">แก้ไข</a>
					<a href="?delete=<?php echo $row['product_id']; ?>"class="px-2 py-2 leading-5 text-white bg-red-500 rounded-md hover:bg-pink-700 focus:outline-none">ลบ</a>
					</td>
				</tr>
				<?php 
						}
					}
				?>
            </tbody>
        </table>
    </div>   

</body>
</html>