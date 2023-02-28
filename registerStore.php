<?php include 'server.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ลงทะเบียนร้านค้า</title>
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
                
                 <div class="pt-6 pl-5 row-end-4">
                    <button class="rounded-md bg-orange-300 ">Create Account</button>
                    <button class="rounded-md bg-orange-300 ">Sign in</button>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
           
        </div>
       </nav>
<section class="max-w-4xl p-6 mx-auto rounded-md shadow-md bg-orange-200 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">ลงทะเบียนร้านค้า</h1>
    <form action="registerStore_db.php" method = "POST">
        <div class="grid grid-row-1 gap-6 mt-4 ">
            <div>
                <label class=" text-black" for="username">ชื่อร้านค้า </label>
                <input name = "name" id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <!--<div>
                <label class=" text-black" for="emailAddress">Email</label>
                <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class=" text-black" for="password">ชื่อสินค้า</label>
                <input id="nameproduct" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>-->
            <div>
                <label class=" text-black" for="passwordConfirmation">ที่อยู่</label>
                <textarea name = "address" id="address" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>

            <!--<div>
                <label class=" text-black" for="passwordConfirmation">วันเกิด</label>
                <input id="birthday" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>-->
            
            <div>
                <label class="block text-sm font-medium text-black">
                บัตรประชาชน  
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="storeimage" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-white">แนบรูปบัตรประชาชน</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button name = "reg_store" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>

</body>
</html>