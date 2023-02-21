<?php include('server.php'); ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ตั้งค่าการแจ้งเตือน</title>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ตั้งค่าการแจ้งเตือน">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <link rel="stylesheet" href="style.css">
</head>


   <body>
    <div class="bg-amber-900 m-8 rounded-md flex flex-row">
      <div class ="bg-white m-16 rounded-md" style="height: 500px;width: 300px;" >
        <div class="border border-1 shadow-md ml-28 mt-12 rounded-full" style="width: 80px;height: 80px;">
            <img class="" src="images/logo.png" >
        </div> 
            <div class="  flex flex-col ml-16 mt-16 gap-y-6 ">  
                <a class="text-black  " href="ประวัติ.html">
                  <button class=" " >ประวัติ</button>
                </a>                  
                <a class="text-black  " href="บัญชีธนาคาร.html">
                  <button class=" " >บัญชีธนาคาร</button>
                </a>                   
                <a class="text-black  " href="ที่อยู่.html">
                  <button class=" " >ที่อยู่</button>
                </a>                  
                 <a class="text-black  " href="เปลี่ยนรหัสผ่าน.html">
                  <button class="b ">เปลี่ยนรหัสผ่าน</button>
                </a>                  
                <a class="text-black font-bold text-lg " href="ตั้งค่าการแจ้งเตือน.html">
                  <button class="">ตั้งค่าการแจ้งเตือน</button>
                </a>                   
            </div>



        </div>  

        <div class=" bg-orange-200 rounded-md flex  justify-center mt-16 " style="width:900px; height: 500px;">
          <div class = "bg-orange-200 rounded-md mt-16" style="width:600px; height: 400px;">


                <div class=" mt-8 mb-8">
                  <p class="text-black font-bold text-3xl flex  justify-center  ">ตั้งค่าการแจ้งเตือน</p>
                </div>                       
                <div class=" "> 
                  <p class="text-black font-bold  ">แจ้งเตือนE-mail</p>
                </div>



            <div class = "flex flex-row ml-2 ">
              <input type="checkbox" id="mail" name="จดหมายข่าว" class="mx-4 " required="required">
              <p  class="">จดหมายข่าว</p>
            </div>

            <div class="flex flex-row  ml-2 mb-16">
              <input type="checkbox" id="private" name="เนื้อหาส่วนตัว" class="mx-4" required="required">
              <p  class="">เนื้อหาส่วนตัว</p>
            </div>
            <p class="text-black font-bold ">แจ้งเตือนSMS</p>
            <div class="flex flex-row ml-2 mb-4" >                           
              <input type="checkbox" id="pomotion" name="โปรโมชั่น" class="mx-4 " required="required">
              <p  class="">โปรโมชั่น</p>
            </div>
            <div class="flex flex-row justify-center">
              <button class=""> ยืนยัน</button>
            </div>
          </div>        
        </div>

    </div>

</body>    
</html>