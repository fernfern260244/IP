<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="py-0 bg-amber-700 shadow-lg ">
        <div class="container mx-auto px-2 flex justify-between ">
            <div class="pr-20  ">
                <a href="indext.html"><img class="image" src="images/logo.png" style="height: 80px;width: 80px;" ></a>
            </div>
            <div class=" flex flex-row space-x-4">  
                
                <div class="flex flex-row">
                    <div><span><a href="shoppingCart.html"><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
        </div>
       </nav>
        

       <div class="bg-orange-200 ml-36 mt-10 mb-5 rounded-md flex flex-col shadow-md shadow-inner" style="width: 1200px;height: 600px;">
            <div class="bg-slate-100 mt-9 ml-12 flex flex-col" style="width: 1100px;height: 150px;">
                <div class="bg-amber-600 flex flex-row" style="width: 1100px;height: 50px;">
                    <input type="checkbox" checked="checked" class="checkbox  ml-10 w-5 " />
                    <span><p class="ml-10 mt-2 text-2xl">ชื่อร้าน</p></span>
                </div>

                <div class="bg-orange-300 flex flex-row shadow-lg" style="width: 1100px;height: 100px;">
                    <input type="checkbox" checked="checked" class="checkbox  ml-10 w-5 " />
                    <a href=""><img style="width: 90px;" class="mt-1 ml-10 rounded-md" src="images/Celine-Mini-Ava-in-Tromphe-Canvas-and-Calfskin-Tan-Shoulder-Bag.jpg" alt=""></a>
                    <span><p class="mt-8 ml-20 text-3xl">ชื่อสินค้า</p></span>
                    <span><p class="mt-8 ml-24 text-3xl">0</p></span>
                    <button class="ml-96 bg-red-600 w-20 h-10 rounded-lg mt-8">ลบสินค้า</button>
                </div>

                


            </div>

            <div class="bg-orange-300 mt-80 rounded-b-lg flex flex-row shadow-inner" style="width: 1200px;height: 93px;">
                <input type="checkbox" checked="checked" class="checkbox  ml-20 w-5 " />
                <span><p class="mt-6 ml-20 text-4xl">ทั้งหมด</p></span>
                <span><p class="mt-6 ml-80 text-4xl">ยอดทั้งหมด</p></span>
                <span><p class="mt-6 ml-20 text-4xl">0</p></span>
                <a href=""><button class="bg-amber-600 mt-8 ml-36 text-2xl w-32 h-10 rounded-md">ชำระเงิน</button></a>
            
            </div>
       </div>


       <footer class="footer footer-center p-10 bg-primary text-primary-content bg-orange-300 flex justify-center" >
        <div>
          <p class="font-bold flex justify-center text-center">
               2MTrade <br/> Change second-hand goods
          </p> 
          <p>2MTrade © 2023 - All right reserved</p>
        </div> 
        
      </footer>
</body>
</html>