<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKPB ITS</title>
    <link rel="icon" href="dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="dist/output.css">

</head>

<body>

<?php    

require 'components/header.php';

?>

    <!-- Carousel -->
   <section id="carouseltw1_40" class="pt-48 pb-16">
    <div class="max-w-3xl mx-auto ">

        <div id="default-carousel" class="sticky" data-carousel="static">
         
            <div class="overflow-hidden relative h-96 rounded-lg ">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="dist/img/tower_1/lantai_7/706-2.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/tower_1/lantai_8/806.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/tower_1/lantai_6/606-1.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
    
                
            </div>
            
            
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                
            </div>
           
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Anterior</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Siguiente</span>
                </span>
            </button>
    
            
        </div>
    
        
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

   </section>

   <!-- Carousel End -->
    
<!-- Tentang Start -->
<section id="about" class="bg-slate-300">
    <div class="container">
    <div class="mx-auto pt-16 pb-16">
    <h2 class="font-bold mb-5 md:text-3xl lg:text-4xl ">Tentang</h2>
    <p class="mx-auto text-justify ">Untuk mendukung kegiatan seminar/konferensi, pertemuan, workshop, pelatihan dan lain-lain sejenisnya, Direktorat Sarana dan Prasarana memberikan pelayanan peminjaman Ruang/Gedung dan Area sesuai peruntukkannya dan sesuai dengan ketentuan yang berlaku. 
        Ruang/Gedung dan Area hanya dapat dipinjam oleh civitas akademika ITS atau instansi yang telah memiliki kerjasama dengan ITS.</p>
   
    </div>
    </div>
</section>

<!-- Tentang End -->


<!-- Card Ruangan Start -->
        
<section id="rincianruangantw1_40" class="pt-10 pb-10 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
            <h3 class="font-semibold text-xl text-primary mb-2">Rincian Ruangan Bersama Kapasitas 40 di Tower 1</h3>
                
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat necessitatibus possimus velit veniam.</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full px-4  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Kapasitas 40 Kursi</h3>
                            <p class=" text-base text-secondary mb-6"> 
                            <ul>
                                <li>
                                    TW1-506
                                </li> 
                                <li>
                                    TW1-606
                                </li> 
                                <li>
                                    TW1-706
                                </li> 
                                <li>
                                    TW1-806
                                </li> 
                            </ul>
                            </p>
                    </div>
                </div>
            </div>


           
        </div>
    </div>
</section>


<!-- Card Ruangan End -->

<!-- Rincian Ruangan Slider 11-->
<section id="rincianruangan11" class="pt-10 pb-10 bg-slate-200 ">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-4">
            <h3 class="font-bold text-2xl text-dark mb-2">Rincian Ruangan</h3> 
        </div>
    </div>
    <div class="flex">
        <div class="w-1/12 flex items-center">
            <div class="w-full text-right">
                <button onclick="prev11()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>      
                </button>
            </div>
        </div>
        <div id="sliderContainer11" class="w-10/12 overflow-hidden">
            <ul id="slider11" class="flex w-full">
                <li class="w-72 p-3">
                    <div class="border rounded-xl p-5 bg-white ">
                        <img src="dist/img/tower_1/lantai_5/506-3.webp" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3"/>
                        <a href="#" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-506</a> 
                                <p class=" text-base font-semibold text-secondary mb-1"> Kapasitas : 40 kursi</p>
                            <!-- <a href="cardclasstw1A.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a> -->
                    </div>
                </li>
                <li class="w-72 p-3">
                    <div class="border rounded-xl p-5 bg-white ">
                        <img src="dist/img/tower_1/lantai_6/606-2.webp" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3"/>
                        <a href="#" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-606</a> 
                                <p class=" text-base font-semibold text-secondary mb-1"> Kapasitas : 40 kursi</p>
                            <!-- <a href="cardclasstw1A.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a> -->
                    </div>
                </li>
                <li class="w-72 p-3">
                    <div class="border rounded-xl p-5 bg-white ">
                        <img src="dist/img/tower_1/lantai_7/706-2.webp" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3"/>
                        <a href="#" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-706</a> 
                                <p class=" text-base font-semibold text-secondary mb-1"> Kapasitas : 40 kursi</p>
                            <!-- <a href="cardclasstw1A.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a> -->
                    </div>
                </li>
                <li class="w-72 p-3">
                    <div class="border rounded-xl p-5 bg-white ">
                        <img src="dist/img/tower_1/lantai_8/806-2.webp" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3"/>
                        <a href="#" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-806</a> 
                                <p class=" text-base font-semibold text-secondary mb-1"> Kapasitas : 40 kursi</p>
                            <!-- <a href="cardclasstw1A.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a> -->
                    </div>
                </li>
                
            </ul>
        </div>
        <div class="w-1/12 flex items-center">
            <div class="w-full">
                <button onclick="next11()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>      
                </button>
            </div>
        </div>
    </div>
        
</section>
<!-- Rincuan Ruangan Slider 11 End -->




<!-- Fasilitas Start -->
<section id="fasilitas" class=" pt-24 pb-12">
    <div class="container">
        <h2 class="font-bold mb-8 md:text-3xl lg:text-4xl ">Fasilitas</h2>
        <div class="flex flex-wrap mx-auto">


            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/chair.svg"  alt="chair" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black  text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">40 Kursi</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/ac.svg"  alt="airconditioner" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Air Conditioner</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/cctv.svg"  alt="cctv" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">CCTV</p>
                </div>

                

                


            </div>

            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/projector.svg"  alt="lcdprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">LCD projector</p>
                </div>
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/internet.svg"  alt="internet" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Internet Kecepatan Tinggi</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/projector.svg"  alt="laserprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Interactive Laser Projector</p>
                </div>
                
            
            </div>

            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/speaker.svg"  alt="speaker" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black  text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Speaker</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/mic.svg"  alt="mic" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Mic</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fasilitas End -->

<?php    

require 'components/footer.php';

?>

    <script src="dist/js/script.js"></script>
    <script src="dist/js/slider-tw1-40.js"></script>
    <script type="module" src="script.js"></script>
</body>
</html>

