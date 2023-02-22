<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
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
                        <input type="text" placeholder="Search" class="input input-bordered rounded-lg pl-3 " />
                    </div>
                </div>
                <div class="flex flex-row">
                    <div><span><a href=""><img src="images/01.png" style="width: 40px;height: 50px;" class="pl-2   pt-6"></a></span></div>
                    <div><span><a href="shoppingCart.html"><img src="images/shop.png" style="width: 50px;height: 50px;"class="pl-6  pt-6"></a></span></div>
                </div>
                <div>
                    <div><span><a href=""><img src="images/pro.png" style="width: 30px;height: 50px;" class="  pt-6"></a></span></div>
                </div>
            </div>
        </div>
       </nav>


       
    <div class="bg-orange-200 pl-20 ml-36 mt-10 pt-12 rounded-md flex flex-row" style="width: 1200px;height: 500px;">
        <div class="bg-slate-100  rounded-lg" style="width: 500px;height: 300px;">
            <!-- This is an example component -->
          <div class="max-w-2xl mx-auto " >

	          <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96" style="width: 500px;height: 400px;">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-amber-800 -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                      <img src="images/Celine-Mini-Ava-in-Tromphe-Canvas-and-Calfskin-Tan-Shoulder-Bag.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="images/กระเป๋า.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="images/unnamed.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>
              <!-- Slider indicators -->
              <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
              </div>
              <!-- Slider controls -->
              <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5  text-amber-800 sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Previous</span>
                  </span>
              </button>
              <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-amber-800 e sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Next</span>
                  </span>
              </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
      </div>
       
    </div>

        <div class="bg-orange-200 ml-36 " style="width: 500px;height: 280px;">
            <div class="grid gap-lg">
                <div class="sc-1q2fzk2-1 ePXdbe">
                    <div class="sc-1q2fzk2-3 hEYThC flex fle. mb-10 ">
                        <h1 class="sc-1q2fzk2-0 eDRNWE mt-">
                            <span class="font-system text-sd125 text-body-1 text-5xl font-bold" data-testid="ad-detail-title">Celine</span>
                        </h1>

                        <button aria-label="favorite-button" data-testid="favorite-button" scale="large" type="button" class="sc-sk8lwe-0 jAeSie sc-1q2fzk2-5 fRyLDA ml-56">
                            <div mode="square" scale="large" class="sc-sk8lwe-1 eEJzsd">
                                <span class="sc-sk8lwe-2 etCBvT">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px">
                                        <path d="M12 19.09a1.2 1.2 0 0 1-.77-.28c-.62-.54-1.18-1-1.73-1.48a34.936 34.936 0 0 1-3.84-3.55A6 6 0 0 1 4 9.79 5.07 5.07 0 0 1 5.25 6.4 4.45 4.45 0 0 1 8.6 4.9 4.32 4.32 0 0 1 12 6.56a4.321 4.321 0 0 1 3.4-1.66 4.45 4.45 0 0 1 3.35 1.5A5.07 5.07 0 0 1 20 9.79a6 6 0 0 1-1.66 4 34.923 34.923 0 0 1-3.8 3.52c-.59.49-1.15 1-1.75 1.49a1.2 1.2 0 0 1-.79.29ZM8.6 6.4a3 3 0 0 0-2.23 1 3.58 3.58 0 0 0-.87 2.39 4.61 4.61 0 0 0 1.3 3 34.062 34.062 0 0 0 3.63 3.34L12 17.49c.54-.47 1-.89 1.53-1.3a35.087 35.087 0 0 0 3.67-3.38 4.61 4.61 0 0 0 1.3-3 3.58 3.58 0 0 0-.87-2.39 3 3 0 0 0-2.23-1A2.92 2.92 0 0 0 13 7.75a5.728 5.728 0 0 0-.31.5.78.78 0 0 1-1.32 0 5.68 5.68 0 0 0-.31-.5A2.919 2.919 0 0 0 8.6 6.4Z"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        
                        
                    </div>
                        <span color="#111111" type="Title4-System-Bold" class="sc-3tpgds-0 iBWLya sc-1q2fzk2-2 ehoPiE">฿ <!-- -->14,900</span>
                        <div class="sc-1q2fzk2-6 aYBEA">
                            <span class="mb-sm inline-block text-body-4 text-sd125">ลงขายโดย <a aria-label="ลงขายโดย M3223426" class="sc-1f9a7ae-0 grxgwt font-bold text-sd125" href="/member/listing/9078564?vertical=generalist" scale="small">เซเวอรีน เมิร์ล</a>
                            </span
                            ></div>
                        </div>
                        <div class="sc-1q2fzk2-4 bElFlV flex flex-row">
                            <div class=" ">
                                <button aria-label="สร้างห้องใหม่" class="flex flex-row ssc-16yqz13-0 eiEwND sc-1dcykbe-0 hvgFTg bg-amber-700 rounded-md mr-10 mt-5" style="height: 30px; width: 130px;" data-testid="seller-profile-chat-button" mode="contained" scale="medium" tabindex="0">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                                    <path d="M14.19 4H9.88A6 6 0 0 0 4 9.51v2.13a6 6 0 0 0 5.18 5.45v.09a2.59 2.59 0 0 1-.69 1.45.71.71 0 0 0-.18.37 1.09 1.09 0 0 0 0 .18.6.6 0 0 0 0 .23.75.75 0 0 0 .59.5c.12.01.24.01.36 0 1.84 0 3.83-2 4.52-2.81h.35A6 6 0 0 0 20 11.03v-.92A6 6 0 0 0 14.19 4Zm0 11.56h-.71a.758.758 0 0 0-.55.28A11 11 0 0 1 10.6 18c0-.11.05-.21.07-.31.02-.1 0 0 0-.06v-.93a2.596 2.596 0 0 0-.13-.58.75.75 0 0 0-.7-.48 4.47 4.47 0 0 1-4.34-4.59v-.92a4.48 4.48 0 0 1 4.38-4.56h4.31a4.45 4.45 0 0 1 4.34 4.08V11.49a4.44 4.44 0 0 1-4.34 4.1v-.03Z"></path>
                                </svg>แชทกับผู้ขาย</button>
                            </div>
                            <div>
                                 <a aria-label="phone call" class="sc-11it86-0 lqkwv flex flex-row bg-amber-700 rounded-md  mt-5 " style="height: 30px; width: 70px;" mode="contained" scale="medium">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px">
                                        <path d="M15.5 19.68A11.26 11.26 0 0 1 4.31 8.74v-1a3.76 3.76 0 0 1 1.94-3.19A2.08 2.08 0 0 1 8 4.28c1.13.41 2.42 2.53 2.69 3.09a1.63 1.63 0 0 1-.12 1.81 4.68 4.68 0 0 1-.84.93 1.995 1.995 0 0 0-.3.32.93.93 0 0 0 0 .13 6.4 6.4 0 0 0 3.85 3.91c.104-.089.201-.186.29-.29.279-.3.587-.572.92-.81a1.65 1.65 0 0 1 1.81-.11c.56.26 2.68 1.55 3.09 2.69a2.1 2.1 0 0 1-.26 1.74 3.74 3.74 0 0 1-2.92 1.91l-.71.08ZM5.84 9.24a9.75 9.75 0 0 0 9 8.92h.66a2.38 2.38 0 0 0 2.35-1.21c.2-.33.16-.43.14-.48a6.76 6.76 0 0 0-2.3-1.83.907.907 0 0 0-.22-.08l-.12.07c-.248.175-.473.38-.67.61a1.872 1.872 0 0 1-1.48.77L13 16a7.79 7.79 0 0 1-4.92-4.9A1.7 1.7 0 0 1 8.71 9a3.67 3.67 0 0 0 .62-.67c.06-.09.07-.12.07-.13a.6.6 0 0 0-.07-.2 6.73 6.73 0 0 0-1.84-2.3s-.15-.06-.48.14A2.42 2.42 0 0 0 5.8 8.32v.92h.04Z"></path>
                                    </svg>โทร</a>
                            </div>
                               
                            </div>
                        </div>
                    <div class="bg-amber-600 mt-5 rounded-md " style="width: 400px;height: 200px;">
<div class="grid gap-lg">
                <div>
                    <h2 class="m-0 mb-md mt-2 ml-2 block font-kaidee text-body-3 font-bold">รายละเอียดสินค้า</h2>
                    <div class="sc-1ir8548-0 kPXKAP">
                        <span type="Body4-System-Regular" class="sc-3tpgds-0 dNQPgd sc-1ir8548-2 iErNFt">
                            <span class="sc-1ir8548-3 bTqyrB">กระเป๋า รุ่นใหม่ล่าสุด</span>
                            
                        </span>
                        <span type="Body4-System-Regular" class="sc-3tpgds-0 dNQPgd sc-1ir8548-4 ioFkNS">
                            <span class="sc-1ir8548-3 bTqyrB">มีประกันหน้าร้านให้1เดือน</span>
                        </span>
                        <a class="sc-1f9a7ae-0 fhafBF sc-1ir8548-1 gCEXkA" scale="small">อ่านเพิ่มเติม<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px">
                            <path d="M19.81 8.25a.75.75 0 0 0-1.06-.06L12 14.24 5.25 8.19a.75.75 0 0 0-1.06.06.76.76 0 0 0 .06 1.06l7.25 6.5a.75.75 0 0 0 1 0l7.25-6.5a.75.75 0 0 0 .06-1.06Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div>

            </div>
            
                </div>
                     </div>

        </div>
       
        

        </div>
    </div>
    <div class="bg-orange-200 pl-20 ml-36 mt-10 mb-10 pt-12 rounded-md flex flex-row" style="width: 670px;height: 240px;">
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" style="width: 500px; height: 140px;" >
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" style="width: 105px;" src="images/pro01.jpg" alt="">
            <div class="flex flex-col justify-between  leading-normal ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ชื่อร้าน</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">คำอธิบายร้าน</p>
            </div>  
        </a>
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