<?php

include 'autoload.php';
include 'includes/header.inc.php';

?>
<title>Document</title>
<link rel="stylesheet" href="../public/css/main.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<body>

    <div class=" w-full min-h-screen">
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex">
                    <img src="../public/img/22434239.png" class="w-40 h-40">
                </a>
                <div class="flex md:order-2 items-center">
                    <div class="flex items-center space-x-2 " id="info">

                    </div>
                    <a id="buttonLo" type="button" class="py-3 px-10 bg-indigo-600 hover:bg-indigo-800 duration-700 rounded-lg ml-2 text-white sm:mr-2 font-mono" href="<?= $router->generate('login') ?>">login</a>
                    <button class="bg-indigo-600 px-6 py-3 rounded-md text-white font-semibold tracking-wide cursor-pointer hidden" id="logoutBtn">Logout</button>

                    <button id="btn" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class=" justify-between items-center w-full md:flex md:w-auto md:order-1 " id="show_nav">
                    <!-- <button  @click="open = true">ddd</button> -->

                </div>
            </div>

        </nav>
        <div class="bg-indigo-600 max-w-[340px] h-16 right-0 translate-y-20 rounded-l-lg flex items-center justify-center space-x-2 flex-wrap absolute animate__backInRight animate_delay-2s hidden" id="alertLogin">
            <i class="fa fa-frown-o text-white text-xl mt-2" aria-hidden="true"></i>
            <p class="text-sm text-white font-openSans mt-2">It looks Like Your Not Register or Logged</p>
            <a href="/login" class="mb-2 text-white underline decoration-slice">Register here</a>
        </div>
        <div class="bg-white text-center w-3/4 mt-[10rem] mx-auto md:w-full sm:w-full">

            <h1 class="font-poppins text-[35px] py-10 ">Find a flight and plan your next adventure</h1>
            <h3 class="Book and manage your flights text-[25px] font-poppins">Find a flight and plan your next adventure</h3>

            <div class="flex justify-center items-center mx-auto xl:w-4/5 md:full mt-5 py-1 relative shadow-md mb-4 md:space-x-4 sm:block rounded-lg">
                <div class=" items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 justify-center hidden" role="alert" id="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p>Please Choose a Date For Your Flight</p>
                </div>
                <div class="flex sm:block">
                    <div class="sm:left-0 sm:relative relative w-auto h-10 left-52 mb-2 flex items-center justify-center cursor-pointer space-x-6 p-4" id="tripChoosing">
                        <select name="" id="selectMenu" class="w-48 py-1 rounded-lg pl-3 outline-none" onchange="showDiv('searchFlightArrival', this)">
                            <option value="0" class="pt-10 text-md font-mono" id="round">Round Trip</option>
                            <option class="pt-10 text-md  font-mono" value="1" id="one">One Way</option>
                        </select>

                        <div class="relative w-60 h-8 rounded-lg flex items-center " id="DropMenu">
                            <div class="flex items-center justify-center w-full space-x-3 ">
                                <h4 class="text-sm font-mono" id="Mainadults">1</h4>
                                <h2 class="text-sm font-mono">Travelers</h2>
                            </div>
                            <i class="fa-solid fa-chevron-down absolute right-2 text-sm cursor-pointer" id="down"></i>
                            <div class="hidden -translate-y-[5px]" id="Chevronup">
                                <i class="fa-solid fa-chevron-up absolute right-2 text-sm  cursor-pointer"></i>
                            </div>
                            <div>

                            </div>
                            <div class="w-60 sm:w-[220px] sm:left-0 left-[1rem] md:left-[1rem] bg-white z-10 absolute top-10 flex rounded-lg hover:bg-gray-300 items-center hidden duration-1000 " id="showMenu">
                                <div class="py-2 mb-2 w-1/2 flex ">
                                    <h2 class="ml-3 text-sm font-mono"> adult</h2>
                                </div>
                                <div class="py-2 mb-2 w-1/2 flex items-center relative ">

                                    <div class="absolute h-full flex items-center left-2 ">
                                        <i class="fa-solid fa-plus text-sm pointer-events-auto" id="plus"></i>
                                    </div>
                                    <div class="mx-auto ">
                                        <h2 class="text-sm font-mono" id="adults">1</h2>
                                    </div>
                                    <div class="h-full flex items-center absolute right-2">
                                        <i class="fa-solid fa-minus text-sm pointer-events-auto" id="minus"></i>
                                    </div>
                                    <!-- <div>d</div> -->
                                </div>
                            </div>
                            <div class="w-60 sm:w-[220px] sm:left-0 md:left-[1rem] left-[1rem] bg-white shadow-lg rounded-lg z-10 absolute top-20 flex  hover:bg-gray-300 hidden items-center duration-1000" id="showMenus">
                                <div class="py-2 mb-2 w-1/2 flex ">
                                    <h2 class="ml-3 text-sm font-mono">Children</h2>
                                </div>
                                <div class="py-2 mb-2 w-1/2 flex items-center relative ">

                                    <div class="absolute h-full flex items-center left-2">
                                        <i class="fa-solid fa-plus text-sm pointer-events-auto" id="plus"></i>
                                    </div>
                                    <div class="mx-auto ">
                                        <h2 class="text-sm font-mono" id="Children">0</h2>
                                    </div>
                                    <div class="h-full flex items-center absolute right-2">
                                        <i class="fa-solid fa-minus text-sm pointer-events-auto" id="minus"></i>
                                    </div>
                                    <!-- <div>d</div> -->
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <input type="text" class="sm:w-full md:w-80 lg:w-1/4 py-3 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0" placeholder="Departure Airport" id="searchFlight">
                <input type="text" class="sm:w-full md:w-80 lg:w-1/4 py-3 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0" placeholder="Arrival Airport" id="searchFlight">
                <input class="sm:w-full md:w-80 lg:w-40 py-3 font-mono outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0 md:relative " placeholder="Depart" id="searchFlightDepart" name="DeparteDate" type="datetime-local">
                <input class="sm:w-full md:w-80 lg:w-40 py-3 font-mono outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0 md:relative " placeholder="Arrival" id="searchFlightArrival" name="ArrivalDate" type="datetime-local">
                <!-- <button onclick="send()">ddd</button> -->

            </div>
        </div>

        <div class="bg-gray-300 w-full hidden" id="container">
            <div class="bg-white p-8 rounded-md w-full">
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Flight Number
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Depart Gate
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Arrival
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Seats Number
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Aircraft
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Airline
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            price
                                        </th>

                                    </tr>
                                </thead>
                                <tbody id="flightContainer">


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto">
            <img src="../public/img/1698fa627c360947a00d1304790fc5aa.jpg" class="block mx-auto" alt="">
        </div>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script>
            config = {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: "today",
                maxDate: new Date().fp_incr(40),
            }
            flatpickr("#searchFlightDepart", config);
        </script>
        <script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>
        <script src="../public/js/styles/landingPage.js"></script>
        <script src="../public/js/userSearch.js"></script>
        <script src="../public/js/bookinginfo.js"></script>
        <script src="../public/js/logout.js"></script>

</body>

</html>