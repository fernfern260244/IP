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
                    <div><span><a href=""><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
        </div>
       </nav>

       <div  class="bg-orange-200 pl-20 ml-36 mt-5 pt-12 rounded-md flex flex-row" style="width: 1200px;height: 320px;">
                <div>
                    <span><img class="rounded-full ml-10" style="height: 230px;width: 250px;" src="images/photo.jfif" alt=""></span>
                </div>

                <div class="bg-amber-600 ml-56 rounded-md " style="height: 220px;width: 500px;">
                       <div class="mt-10 mb-3"><span class="text-center text-2xl "><p>ชื่อลูกค้า</p></span></div> 
                        <div class="mb-3"><span class="text-center text-2xl"><p>E-mail</p></span></div>
                        <div><span class="text-center text-2xl"><p>เบอร์โทรศัพท์</p></span></div>

                </div>
        </div>
        <div class="flex flex-row">

            <div class="bg-orange-200  ml-36 mt-5 rounded-md flex flex-col  mb-5" style="width: 300px;height: 310px;">
            <div class="border border-orange-500 rounded-md"><button class="rounded-md bg-amber-600 shadow-lg "style="height: 60px;width: 300px;" ><a href="createAccount.html">ลงทะเบียนร้านค้า</a> </button></div>
            <div class="border border-orange-500 rounded-md"><button class="rounded-md bg-amber-600 shadow-lg "style="height: 60px;width: 300px;" ><a href="createAccount.html">ที่ต้องชำระ</a> </button></div>
            <div class="border border-orange-500 rounded-md"><button class="rounded-md bg-amber-600 shadow-lg "style="height: 60px;width: 300px;" ><a href="createAccount.html">ที่ต้องจัดส่ง</a> </button></div>
            <div class="border border-orange-500 rounded-md"><button class="rounded-md bg-amber-600 shadow-lg "style="height: 60px;width: 300px;" ><a href="createAccount.html">ที่ต้องได้รับ</a> </button></div>
            <div class="border border-orange-500 rounded-md"><button class="rounded-md bg-amber-600 shadow-lg "style="height: 60px;width: 300px;" ><a href="createAccount.html">สำเร็จแล้ว</a> </button></div>
        </div>

        <div class="bg-orange-200  ml-10 mt-5 rounded-md flex flex-col  mb-5 " style="width: 860px;height: 310px;">
            <div class="bg-orange-200 border-4 border-amber-500 flex flex-row" style="width: 860px;height: 103px;">
                <div class="bg-amber-200" style="width: 100px;">
                        <img style="width: 100px; height: 95px;" src="images/Celine-Mini-Ava-in-Tromphe-Canvas-and-Calfskin-Tan-Shoulder-Bag.jpg" alt="">
                </div>
                <div>
                        <span><p class="text-2xl ml-14">ชื่อสินค้า</p></span>
                        <span><p class="ml-14">รายละเอียดสินค้า</p></span>
                </div>
                <div>
                    <button class="bg-amber-700 ml-96 mt-7" style="width: 80px;height: 40px;">รีวิว</button>
                </div>
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