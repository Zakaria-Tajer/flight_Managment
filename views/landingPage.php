<?php

    session_start();
    var_dump($_SESSION['unique_id']);
    include 'autoload.php';
    include 'includes/header.inc.php';



?>
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<body>

<div class=" w-full min-h-screen">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto" >
            <a href="#" class="flex">
                Logo Here
            </a>
            <div class="flex md:order-2 items-center">
				<div class="flex items-center space-x-2 " id="">
					<h1 class="mr-4">Name</h1>
					<div class="w-10 h-10 bg-blue-700 rounded-full -translate-x-2">
						<img src="" alt="" class="w-10 h-10 rounded-full object-cover">
					</div>
				</div>
                <a type="button" class="py-3 px-10 bg-indigo-600 hover:bg-indigo-800 duration-700 rounded-lg ml-2 text-white sm:mr-2 font-mono" href="<?= $router->generate('login') ?>">login</a>
                <button id="btn" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <div  class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1 " id="show_nav">
                <!-- <button  @click="open = true">ddd</button> -->
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium" >
                <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Book</a>
                </li>
                <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Where to fly</a>
                </li>
                <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Covid Restrictions</a>
                </li>
                </ul>
            </div>
        </div>
        
    </nav>

    <div 
        class="bg-white text-center w-3/4 mt-[10rem] mx-auto md:w-full sm:w-full">
            <h1 class="font-poppins text-[35px] py-10 ">Find a flight and plan your next adventure</h1>
            <h3 class="Book and manage your flights text-[25px] font-poppins">Find a flight and plan your next adventure</h3>
            
            <div 
                class="flex justify-center items-center mx-auto xl:w-4/5 md:full mt-5 py-1 relative shadow-md mb-4 md:space-x-4 sm:block rounded-lg">
                <div class="flex">
                    <div class="relative w-auto h-10 left-52 mb-2 flex items-center justify-center cursor-pointer space-x-6 p-4" id="tripChoosing">
                        <select name="" id="" class="w-48 py-1 rounded-lg pl-3 outline-none">                            
                            <option value="" class="pt-10">Round Trip</option>
                            <option value="" class="pt-10">One Way</option>
                        </select>

                        <div class="relative w-60 h-8 rounded-lg flex items-center " id="DropMenu">
                            <div class="flex items-center justify-center w-full space-x-3">
                                <h4 class="text-sm font-mono" id="Mainadults">1</h4>
                                <h2 class="text-sm font-mono">Travelers</h2>
                            </div>
                            <i class="fa-solid fa-chevron-down absolute right-2 text-sm" id="down"></i>
                            <div class="hidden -translate-y-[5px]" id="Chevronup">
                                <i class="fa-solid fa-chevron-up absolute right-2 text-sm "></i>
                            </div>
                            <div>
                                
                            </div>
                            <div class="w-60 bg-white z-10 absolute top-10 flex rounded-lg hover:bg-gray-300 items-center hidden duration-1000 " id="showMenu">
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
                            <div class="w-60 bg-white shadow-lg rounded-lg z-10 absolute top-20 flex  hover:bg-gray-300 hidden items-center duration-1000" id="showMenus">
                                <div class="py-2 mb-2 w-1/2 flex ">
                                    <h2 class="ml-3 text-sm font-mono">Children</h2>
                                </div>
                                <div class="py-2 mb-2 w-1/2 flex items-center relative ">
                                    
                                    <div class="absolute h-full flex items-center left-2">
                                        <i class="fa-solid fa-plus text-sm pointer-events-auto" id="plus"></i>
                                    </div>
                                    <div class="mx-auto ">
                                        <h2 class="text-sm font-mono" id="Children">1</h2>
                                    </div>
                                    <div class="h-full flex items-center absolute right-2">
                                        <i class="fa-solid fa-minus text-sm pointer-events-auto" id="minus"></i>
                                    </div>
                                    <!-- <div>d</div> -->
                                </div>
                            </div>
                            
                        </div>

                        <div>
                            <!-- <h2>Travelers</h2>                           -->
                            <select name="" id="" class="w-48 py-1 rounded-lg pl-3 outline-none">  
                                <!-- <option value="" class="pt-10">Round Trip</option> -->
                                <!-- <option value="" class="pt-10">One Way</option> -->
                            </select>

                        </div>
                    </div>

                </div>

                <input type="text" class="sm:w-full md:w-80 lg:w-1/4 py-5 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0" placeholder="Departure Airport" id="searchFlight">
                <input type="text" class="sm:w-full md:w-80 lg:w-1/4 py-5 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0" placeholder="Arrival Airport" id="searchFlight">
                <input type="date" class="sm:w-full md:w-3/5 lg:w-40 py-5 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0 md:relative md:right-[108px]" placeholder="Depart/arrival" id="searchFlight" name="DeparteDate">
                <input type="date" class="sm:w-full md:w-3/5 lg:w-40 py-5 outline-none pl-5 lg:border-r-2 rounded-l-lg focus:border-indigo-600 sm:border-2 mb-2 sm:rounded-lg lg:relative lg:right-0 md:relative md:right-[108px]" placeholder="Depart/arrival" id="searchFlightDate" name="ArrivalDate">
                
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
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Flight Number
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Depart Gate
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Arrival
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Seats Number
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Aircraft
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Airline
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
   
<!-- <h1 id="hel"></h1> -->

    <script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>
    <script src="../public/js/styles/landingPage.js"></script>
    <script src="../public/js/userSearch.js"></script>
</body>
</html>