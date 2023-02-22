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
            
            <div class="flex-none gap-2 pt-6  ">
                <div class="form-control ">
                    <input type=s"text" placeholder="Search" class="input input-bordered rounded-lg pl-3 " />
                </div>
            </div>
       
            <div class="flex flex-row">
                <div><span><a href=""><img src="images/01.png" style="width: 40px;height: 50px;" class="pl-2   pt-6"></a></span></div>
                <div><span><a href="alert.html"><img src="images/help.png"style="width: 60px;height: 50px;" class="pl-6  pt-6"></a></span></div>
                <div><span><a href="shoppingCart.html"><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                <div><span><a href=""><img src="images/chat.png"style="width: 50px;height: 50px;" class="pl-6  pt-6 "></a></span></div>
            </div>
            
             <div class="pt-6 pl-5 row-end-4">
                <button class="rounded-md bg-amber-600 shadow-inner shadow-lg " ><a href="createAccount.html">Create Account</a> </button>
                <button class="rounded-md bg-amber-600 shadow-inner shadow-lg "><a href="signIn.html"> Sign in</a></button>
            </div>
            <div>
                <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
            </div>
        </div>
       
    </div>
   </nav>


  <div class="flex space-x-4">
   <div  class=" bg-orange-100 bg-blur-sm  w-64 justify-center flex-col mt-5 mr-5 ml-5 mb-5 rounded-md drop-shadow-lg shadow-inner">
    <script language="JavaScript">
    <!--
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
     // eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
     window.open(selObj.options[selObj.selectedIndex].value);
      if (restore) selObj.selectedIndex=0;
    }
    //-->
   </script>
    <select name="menu1" onchange="MM_jumpMenu('parent',this,0)" class="select select-success w-40 h-9 mt-8 ml-12 rounded-md">
        <option disabled selected>หมวดหมู่</option>
        <option value="phone.html">โทรศัพท์</option>
        <option value="">บ้านและสวน</option>
        <option value="">พระเครื่อง</option>
        <option value="">นาฬิกา</option>
        <option value="">รองเท้า</option>
        <option value="">กล้อง</option>
        <option value="">กระเป๋า</option>
        <option value="">ของใช้ในครัว</option> 
        <option value="">เครื่องใช้ไฟฟ้า</option>
        <option value="">หนังสือ</option>
        <option value="">เครื่องสำอาง</option>
        <option value="">อะไหล่รถ</option>
        <option value="">กีฬา</option>
        <option value="">อุปกรณ์สัตว์เลี้ยง</option>
        <option value="">อุปกรณ์เครื่องเขียน</option>
        <option value="">ของใช้ทารก</option>
        <option value="">เครื่องประดับ</option>
      </select>

      <div class="flex flex-col-reverse  w-40 ml-16 mt-96">
        <button class="rounded-md bg-amber-900 hover:bg-amber-800 shadow-inner h-10 w-28 text-white  " onclick="window.location.href='help.html'">ช่วยเหลือ</button>
      </div>
      <div>
        <div class="ml-24 mt-5 mb-5">
            <a href=""><img src="images/setting.png" style="width: 40px;height: 60px;" class="pl-2 pt-6 pb-3"></a>
        </div>
      </div>
   </div>
  
   <div class="bg-amber-200 mt-5 w-56 h-60 rounded-t-lg shadow-inner">
    <div class="bg-slate-300 rounded-t-lg ">
      <a href="seeProduct.html"><img class="w-56 h-52 rounded-t-lg" src="images/กระเป๋า.jpg" alt=""></a>
    </div>
    <div class="bg-slate-800 h-14 rounded-b-lg flex flex-row ">
      <button class="bg-gray-200 h-14 w-28 rounded-bl-lg"><img style="width: 30px;height: 30px;" class="ml-10" src="images/chat2.png" alt=""></button>
      <button class="bg-gray-200 h-14 w-28 rounded-br-lg"><img style="width: 30px;height: 30px;" class="ml-10" src="images/shop.png" alt=""></button>
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