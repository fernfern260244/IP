<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>หน้าแก้ไขข้อมูลสินค้า</title>
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
    <div class="bg-orange-200 grid grid-col-2 grid-flow-col gap-0 ">
    <div class="bg-orange-200 grid place-content-center gap-0 grid-cols-2 ">
        <div class="bg-orange-200 my-10  rounded-sm w-full justify-center">
          <img src="https://picsum.photos/200" alt="img" class="object-none object-center m-auto" />
 
        </div>
        <form class="bg-orange-200  rounded-sm px-10 py-5 grid grid-flow-row ">
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 200px; height: 45px;"   placeholder="Name" required >  
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px; height: 100px"   placeholder="รายละเอียดสินค้า" required>
        </form>
      </div>
    </div>

    <div>
        <form class="bg-amber-600 shadow rounded-sm px-10 py-5 grid grid-flow-col"  > 
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 160px ; height: 50px  "   placeholder="หมวดหมู่" required>
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 160px ; height: 50px  "   placeholder="สีสินค้า" required>
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 160px ; height: 50px  "   placeholder="ขนาด" required>
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 160px ; height: 50px  "   placeholder="สภาพสินค้า" required>
            <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 160px ; height: 50px  "   placeholder="จัดหวัด,อำเภอ" required>
        </form>
    </div>

    <div>
        <div class="grid grid-cols-2 gap-0">
            <div class="col-span-1 bg-orange-200 p-4">
                <div class="flex items-center justify-center h-64 bg-amber-600 p-8">
                <div class="w-76 h-60 bg-amber-600  p-4">
                  ค่าจัดส่ง <br>
                  <input class = "hadow appearance-none border border-black rounded w-full py-2 px-1 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 150px ; height: 25px  "   placeholder="กว้าง(cm)" required>
                  <input class = "hadow appearance-none border border-black rounded w-full py-2 px-1 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 150px ; height: 25px  "   placeholder="ยาว(cm)" required>
                  <input class = "hadow appearance-none border border-black rounded w-full py-2 px-1 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 150px ; height: 25px  "   placeholder="สูง(cm)" required>
                </div>
              </div>
              </div>
            <div class="col-span-1 bg-orange-200 p-4">เบอร์โทรศัพท์ของสินค้า <br>
             <input class = "hadow appearance-none border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline m-5 " style="width: 200px ; height: 50px  "   placeholder="xxx-xxxx-xxxx" required>
            </div>
          </div>

          
          
    </div>

    <div class="bg-orange-200 flex justify-self-end p-40" >
        <button class="bg-green-400 text-white font-bold py-2 px-4 rounded ml-auto ">เพิ่มสินค้า</button>
        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded ml-5">ลบสินค้า</button>
    </div>
</body>
</html>