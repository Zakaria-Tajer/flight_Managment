<?php
    session_start();
    include 'autoload.php';
    include 'includes/header.inc.php';
?>
</head>
<body>
    
    <div class="min-h-screen bg-[#EEF0F3] flex relative">
       <?php
            include 'includes/navbar.php';
       ?>
        <div class="w-full  h-screen relative z-0">
            <div class="w-2/3 h-56 rounded flex mx-24 my-16 ">
                <div class="w-1/3 bg-white h-full relative rounded-lg">
                    <h2 class="font-Nato text-gray-400 py-6 px-4 text-xl border-r-2 ">TOTAL BOOKING</h2>
                    <h1 class="font-bold text-4xl py-2 px-4">12,000</h1>

                    <a href="" class="underline decoration-1 ml-4 absolute bottom-4 font-poppins text-[#00a7d3]">See Details</a>
                </div>
                <div class="w-1/3 bg-white h-full relative  divide-r-[5px] rounded-lg">
                    <h2 class="font-Nato text-gray-400 py-6 px-4 text-xl border-r-2 ">TOTAL REVENUE</h2>
                    <h1 class="font-bold text-4xl py-2 px-4">12,000</h1>

                    <a href="" class="underline decoration-1 ml-4 absolute bottom-4 font-poppins text-[#00a7d3]">See Details</a>
                </div>
                <div class="w-1/3 bg-white h-full relative  divide-r-[5px] rounded-lg">
                    <h2 class="font-Nato text-gray-400 py-6 px-4 text-xl">TOTAL DEBIT</h2>
                    <h1 class="font-bold text-4xl py-2 px-4">12,000</h1>

                    <a href="" class="underline decoration-1 ml-4 absolute bottom-4 font-poppins text-[#00a7d3]">See Details</a>
                </div>
            </div>

            <div class="w-1/4 bg-white h-full absolute right-0 top-0 ml-auto"></div>

                <div class="w-2/3 bg-gray-300 rounded-lg flex my-20 ml-20">
                    <div class="bg-[#F2F6F9] w-1/3 mx-4 my-6 rounded-md">
                        <h2 class="px-8 py-5">#Pass: JKKKKK334</h2>

                        <div class="flex justify-between">
                            <h3 class="pl-8">From</h3>
                            <h3 class="pr-8">To</h3>
                        </div>
                        
                        <div class="flex justify-between pt-4">
                            <h3 class="pl-8">KZN</h3>
                            <div class="w-36 h-[2px] bg-gray-400 mt-4 mr-2 flex items-center justify-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-plane-departure text-gray-300"></i>
                                </div>
                            </div>
                            <h3 class="pr-8">NYC</h3>
                        </div>
                        
                        <div class="w-80 bg-white mt-14 mx-auto rounded-md">
                            <div class="flex justify-between">
                                <h2 class="px-4 pt-2">payment</h2>
                                <h2 class="px-4 pt-2">Expires Date</h2>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="w-16 h-8 bg-green-300 flex items-center justify-center rounded-md mt-3 ml-3 mb-3">
                                    <h2 class="text-green-600">Paid</h2>
                                </div>
                                <h2 class="pr-6">Date Here</h2>
                            </div>
                        </div>
                        <div class="w-40 h-11 bg-[#A0ACB8] ml-10 mt-4 flex items-center justify-center hover:bg-[#333] hover:transition duration-700">
                            <button class="text-white">More Details</button>
                            <i class="fa-solid fa-arrow-up-long rotate-45 ml-2 text-white"></i>
                        </div>
                        <div class="w-full h-[2px] bg-gray-400 mt-5"></div>
                        <div class="flex justify-between mx-4 py-3">
                            <a href="" class="underline underline-offest-8 decoration-green-400 text-green-500 " >Approve</a>
                            <a href="" class="underline underline-offest-8 decoration-red-400 text-red-500 ">Decline</a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="bg-[#F2F6F9] w-1/3 mx-4 my-6 rounded-md">
                        <h2 class="px-8 py-5">#Pass: JKKKKK334</h2>

                        <div class="flex justify-between">
                            <h3 class="pl-8">From</h3>
                            <h3 class="pr-8">To</h3>
                        </div>
                        
                        <div class="flex justify-between pt-4">
                            <h3 class="pl-8">KZN</h3>
                            <div class="w-36 h-[2px] bg-gray-400 mt-4 mr-2 flex items-center justify-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-plane-departure text-gray-300"></i>
                                </div>
                            </div>
                            <h3 class="pr-8">NYC</h3>
                        </div>
                        
                        <div class="w-80 bg-white mt-14 mx-auto rounded-md">
                            <div class="flex justify-between">
                                <h2 class="px-4 pt-2">payment</h2>
                                <h2 class="px-4 pt-2">Expires Date</h2>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="w-16 h-8 bg-green-300 flex items-center justify-center rounded-md mt-3 ml-3 mb-3">
                                    <h2 class="text-green-600">Paid</h2>
                                </div>
                                <h2 class="pr-6">Date Here</h2>
                            </div>
                        </div>
                        <div class="w-40 h-11 bg-[#A0ACB8] ml-10 mt-4 flex items-center justify-center hover:bg-[#333] hover:transition duration-700">
                            <button class="text-white">More Details</button>
                            <i class="fa-solid fa-arrow-up-long rotate-45 ml-2 text-white"></i>
                        </div>
                        <div class="w-full h-[2px] bg-gray-400 mt-5"></div>
                        <div class="flex justify-between mx-4 py-3">
                            <a href="" class="underline underline-offest-8 decoration-green-400 text-green-500 " >Approve</a>
                            <a href="" class="underline underline-offest-8 decoration-red-400 text-red-500 ">Decline</a>
                        </div>
                    </div>

                    <div class="bg-[#F2F6F9] w-1/3 mx-4 my-6 rounded-md">
                        <h2 class="px-8 py-5">#Pass: JKKKKK334</h2>

                        <div class="flex justify-between">
                            <h3 class="pl-8">From</h3>
                            <h3 class="pr-8">To</h3>
                        </div>
                        
                        <div class="flex justify-between pt-4">
                            <h3 class="pl-8">KZN</h3>
                            <div class="w-36 h-[2px] bg-gray-400 mt-4 mr-2 flex items-center justify-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-plane-departure text-gray-300"></i>
                                </div>
                            </div>
                            <h3 class="pr-8">NYC</h3>
                        </div>
                        
                        <div class="w-80 bg-white mt-14 mx-auto rounded-md">
                            <div class="flex justify-between">
                                <h2 class="px-4 pt-2">payment</h2>
                                <h2 class="px-4 pt-2">Expires Date</h2>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="w-16 h-8 bg-green-300 flex items-center justify-center rounded-md mt-3 ml-3 mb-3">
                                    <h2 class="text-green-600">Paid</h2>
                                </div>
                                <h2 class="pr-6">Date Here</h2>
                            </div>
                        </div>
                        <div class="w-40 h-11 bg-[#A0ACB8] ml-10 mt-4 flex items-center justify-center hover:bg-[#333] hover:transition duration-700">
                            <button class="text-white">More Details</button>
                            <i class="fa-solid fa-arrow-up-long rotate-45 ml-2 text-white"></i>
                        </div>
                        <div class="w-full h-[2px] bg-gray-400 mt-5"></div>
                        <div class="flex justify-between mx-4 py-3">
                            <a href="" class="underline underline-offest-8 decoration-green-400 text-green-500 " >Approve</a>
                            <a href="" class="underline underline-offest-8 decoration-red-400 text-red-500 ">Decline</a>
                        </div>
                    </div>
                    </div>
                </div>
            

        </div>

    </div>










</body>
</html>