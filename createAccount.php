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
    <div class="bg-neutral-500  ml-56 mt-20  shadow-inner rounded-md flex flex-row drop-shadow-lg" style="width: 1000px;height: 600px;">
        
        <div class="bg-amber-700 rounded-l-lg" style="width: 500px; height: 600px;">
            <h1 class="text-orange-200 flex justify-center pt-10  font-bold" style="font-size: 60px;">Welcome</h1>
            <h1 class="text-orange-200 flex justify-center   font-bold" style="font-size: 30px;">to</h1>
            <h1 class="text-orange-200 flex justify-center  pb-3 font-bold" style="font-size: 50px;">2MTrade</h1>
        
            <div class="flex justify-center mt-64">
                <button class="rounded-md bg-orange-200 hover:bg-orange-100 text-amber-700  hover:text-black" style="width: 150px;height: 50px; font-size: 20px; font-bold" onclick="window.location.href='SignIn.html'">Sign in</button>
            </div>
        </div>
        <div class="bg-orange-200 rounded-r-lg " style="width: 500px; height: 600px;">
            <h1 class="text-orange-900 flex justify-center pt-10 pb-10 font-bold" style="font-size: 50px;">Create Account</h1>
            <div class=" ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;" id="username" type="text" placeholder="Username">
            </div>
            <br>
            <div class=" ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    E-mail
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;" id="E-mail" type="text" placeholder="E-mail">                
            </div>
            <br>
            <div class="ml-24">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                  </label>
                  <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" style="width: 320px;"  id="password" type="password" placeholder="******************">                <br>
            </div>
            
            <div class="flex flex-row justify-center mt-9 mb-5">
                <div class="mr-3"><a href=""><img  src="images/icons8-google-50.png" alt=""></a></div>
                <div class="mr-4"><a href=""><img  src="images/icons8-facebook-50.png" alt=""></a></div>
                <div class="mr-3"><a href=""><img src="images/icons8-line-50.png" alt=""></a></div>
            </div>
            <div class="flex justify-center">
                <button class="rounded-md bg-amber-900 hover:bg-amber-700 text-white hover:text-black " style="width: 150px;height: 50px; font-size: 20px; font-bold">Create Account</button>
            </div>
        </div>
       
        
    </div>
</body>
</html>