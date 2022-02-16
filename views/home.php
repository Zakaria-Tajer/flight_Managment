<?php
    session_start();
    include 'autoload.php';
    include 'includes/header.inc.php';
?>
</head>
<body>
    
    <div class="min-h-screen bg-[#EEF0F3] flex relative">
        <div class="w-[110px] h-screen bg-white flex flex-col items-center space-y-4">
            <div class="w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center mt-10 mb-14">
                <img src="#" alt="">
                <h1>Logo</h1>
            </div>
            <ul class="space-y-8">
                <li class="relative cursor-pointer" id="containerIcons">
                    <div class="flex">
                        <i class="fa-solid fa-house text-xl text-gray-300 py-4 px-7 rounded-md  bg-white shadow-md hover:text-black hover:bg-[#F1F1F1]"></i>
                        <a href="" class="absolute text-center translate-x-20 px-4 py-4 hidden bg-white rounded-md" id="dashboard">dashboard</a>
                    </div>
                </li>
                <li class="relative cursor-pointer" id="containerIcons">
                    <div class="flex">
                        <i class="fa-solid fa-rectangle-list text-xl text-gray-300 py-4 px-7 rounded-md  bg-white shadow-md hover:text-black hover:bg-[#F1F1F1]"></i>
                        <a href="" class="absolute text-center translate-x-20 w-24 py-4 hidden bg-white rounded-md" id="dashboard">Flight List</a>
                    </div>
                </li>            
            </ul>
        </div>
        <div class="w-full bg-blue-300 h-screen relative">
            <div class="w-2/3 h-56 rounded flex mx-20 my-16 ">
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

            <div class="w-1/4 bg-white h-full absolute right-0 top-0"></div>

            <div class="w-2/3 bg-gray-300 h-auto rounded-lg flex mx-20 my-16">
                <div class="bg-white w-1/3 h-[350px]">
                    <h2>#Pass: JKKKKK334</h2>
                    <div class="">
                        <h3>From</h3>
                        <h3>To</h3>
                    </div>
                    
                    <div class="">
                        <h3>KZN</h3>
                        <div class="">Line
                            icon
                        </div>
                        <h3>NYC</h3>
                    </div>
                    
                </div>
            </div>
            
        </div>

    </div>











    <script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>
    <script src="../public/js/styles/index.js"></script>
</body>
</html>