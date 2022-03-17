<?php
    session_start();
    include 'autoload.php';
    include 'includes/header.inc.php';

	if(!isset($_SESSION['id'])){
		header("location: /login");
	}
	
    $user = new flightController();

    $data = $user->getFlightsData();

	$numRows = $data->num_rows;


?>

<title>Document</title>
<body>
    
    <div class="min-h-screen flex">
        
	<div class="bg-[#EEF0F3] p-8 rounded-md w-full relative">
		<div class="flex items-center justify-center">
			<!-- on add button click hide form  -->
			<div class="bg-white shadow-lg w-1/2 h-96  fixed mr-40 top-52 flex items-center justify-center invisible rounded-md" id="formPopUp">
				<div class="space-x-3 w-4/5 space-y-4 flex">
					<form class="w-full" id="actionForm" enctype="multipart/form-data">
						<div class="w-full flex items-center justify-around flex-wrap py-4">
							<input type="text" placeholder="Flight Number" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="FlightNumber">
							<input type="text" placeholder="Depart Gate" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="DepartGate">
							<input type="text" placeholder="Arrival" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="ArrivalPlane">
							<input type="text" placeholder="Seats Number" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="SeatsCount">
							<input type="text" placeholder="Aircraft" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="Aircraft">
							<input type="text" placeholder="Airline" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="Airline">
							<input type="text" placeholder="Status" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="Status">
							<input type="text" placeholder="price" 
							class="px-10 w-80 py-2 rounded-md outline-none border-2 focus:border-indigo-600 mb-2 mt-2" name="price">
							<div class="flex space-x-3">
								<button class="bg-green-300 px-20  py-2 text-green-800 font-semibold tracking-wide cursor-pointer rounded mt-4" id="addFlight">Add</button>
								<button class="bg-orange-200 px-20  py-2 text-orange-900 font-semibold tracking-wide cursor-pointer rounded mt-4" id="UpdateFlights">Update</button>
								<button class="bg-red-500 px-20  py-2 text-red-900 font-semibold tracking-wide cursor-pointer rounded mt-4" id="RmvFlights">Remove</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
		
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h2 class="text-gray-600 font-semibold text-xl font-poppins">Fligh List</h2>
		</div>
		<div class="flex items-center justify-between">
			<div class="flex bg-gray-50 items-center p-2 rounded-md">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
					fill="currentColor">
					<path fill-rule="evenodd"
						d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
						clip-rule="evenodd" />
				</svg>
				<input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="searchFlightAdmin" placeholder="search...">
          </div>
				<div class="lg:ml-40 ml-10 space-x-8">
					<button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" id="logoutBtn">Logout</button>
					<!-- <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Create</button> -->
				</div>
			</div>
		</div>
		<div class="ml-20">
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto w-11/12 md:min-w-full">
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
									Depart
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
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Price
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Action
								</th>
							</tr>
						</thead>
						<tbody  id="tbody">
							<?php

							if($numRows > 0){
								while($rows = $data->fetch_assoc()){

								
							?>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<p><?php echo $rows['FlighNumber']?></p>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap"><?php echo $rows['Depart']?></p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['ArrivalAirport']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['Seats']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['aircraft']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['airline']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['status']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										<?php echo $rows['price']?>
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                    <button class="bg-green-300 px-4 py-2 rounded-md text-green-800 font-semibold tracking-wide cursor-pointer md:mb-1" id="PopForm" >Add</button>
                                    <button class="bg-orange-200 px-4 py-2 rounded-md text-orange-900 font-semibold tracking-wide cursor-pointer md:mb-[10px]" id="UpdateFlightsForm">Update</button>
									<input type="text" value="<?php echo $rows['id']?>" id="flight_id" type="hidden" class="hidden">
                                    <a href="<?= $router->generate('flighList')?>" class="bg-red-500 px-4 py-2 rounded-md text-red-900 font-semibold tracking-wide cursor-pointer md:translate-y-4" id="RemoveFlights">Remove</a>
								</td> 

							</tr>
							<?php
								} 
							}
							?>
							
							
						</tbody>
					</table>
					<div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

	<script src="../public/js/flight.js"></script>
	<script src="../public/js/FlightAction.js"></script>
	<script src="../public/js/styles/flightS.js"></script>
	<script src="../public/js/search.js"></script>
	<script src="../public/js/logout.js"></script>
</body>
</html>






