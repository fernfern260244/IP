<?php include('server.php'); ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>หน้าติดตามสถานะสินค้า</title>
</head>
<body>
    <nav class="py-0 bg-amber-700 shadow-lg ">
        <div class="container mx-auto px-2 flex justify-between ">
            <div class="pr-20  ">
                <a href="indext.html"><img class="image" src="images/logo.png" style="height: 80px;width: 80px;" ></a>
            </div>
            <div class=" flex flex-row space-x-4">  
                
                <div class="flex flex-row">
                    <div><span><a href=""><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
        </div>
       </nav>

  <div class="bg-orange-200 grid grid-rows-3 grid-flow-col gap-0 border-b">
    
    <div class=" row-span-4 ">
      <img class ="hidden md:inline-flex my-0 md:ml-5  rounded-sm w-28 mt-2 justify-center " src="images/unnamed.jpg" >
    </div>
    
    <div class="bg-orange-200 col-span-4 p-1">ชื่อสินค้า :</div>
    <div class="bg-orange-200 col-span-4 p-1">ที่อยู่ผู้ซื้อ :</div>
    <div class="bg-orange-200 col-span-4 p-1">การชำระเงิน :</div>
    <div class="bg-orange-200 col-span-4 p-1">สถานะสินค้า :</div>
  </div>
 
  
 

</div>

  </div>
</body>
</html>