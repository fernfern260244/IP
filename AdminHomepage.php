<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class=" w-auto m-10 grid justify-items-center">
        <div class="border border-1 shadow-md m-3 p-2 rounded-full">
            <img class="w-40 h-40" src="images/logo.png" >
        </div>       
    </div>
    <div class= "bg-orange-200 w-auto  flex  text-center text-xl ">
        <div class="p-5 flex-1 grid grid-cols-1 justify-items-center " >
            <a href="checkgoods.html">ตรวจสอบสินค้า</a>
            <a href="checkgoods.html"><img src="img/check.png" class="m-2" width="40" height="40"></a>
        </div>
        <div class="p-5 flex-1 bg-amber-700 grid grid-cols-1 justify-items-center">
            <a href="checkshop.html">ตรวจลงทะเบียนร้านค้า</a>
            <a href="checkshop.html"><img src="img/edit.png" class="m-2" width="40" height="40"></a>
        </div>
        <div class="p-5  flex-1 grid grid-cols-1 justify-items-center">
            <a href="checkreport.html">ตรวจสอบการรายงาน</a>
            <a href="checkreport.html"><img src="img/document.png" class="m-2" width="40" height="40"></a>
        </div>

    </div>
    <div class="bg-orange-300 h-fit">
        <div class="grid grid-cols-1 justify-items-center text-2xl text-center p-10">
            <a href="statistics.html">สถิติรวมของเว็บไซต์</a>
            <a href="statistics.html"><img src="img/chart-histogram.png" class="m-2" width="40" height="40"></a>
        </div>
    </div>
</body>
</html>