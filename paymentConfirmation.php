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

    <div class="bg-orange-300 rounded-md ml-80 mt-10 flex flex-col mb-5" style="width: 800px;height: 500px;">
        <div class="ml-">
             <div class="flex flex-row ">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-10 ml-10">
           ชื่อ-นามสกุล
                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/2 px-3 mt-10 ml-20">
            เบอร์โทรศัพท์
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="000-000-0000">
            </div>
        </div>
        <div class="flex flex-row ">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-10 ml-10">
                รหัสสั่งซื้อ
                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="XXXXXXXXXX">
            </div>
            <div class="w-full md:w-1/2 px-3 mt-10 ml-20">
                จำนวนเงินที่โอน:
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
            </div>
        </div>
        <div class="flex flex-row ">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-10 ml-10">
                ธนาคารที่โอน
                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="ชื่อ-นามสกุล">
            </div>
             <div class="flex flex-row mt-16 ml-10">
                <div>
                    <label for="date">วันที่โอน : </label>
                    <input type="date" name="date"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                </div>
            </div>
        </div>
        <div class="flex flex-row ml-20 mt-16">
                <label for="slip">หลักฐานการโอน : </label>
                <input type="file">
            
            </div>

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