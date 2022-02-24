<?php

    session_start();
    
    include 'autoload.php';

    $user = new userController();

    $data = $user->getSession();

    $rows = $data->num_rows;

    $output = '';
    $ticketNumber = $_POST['travelTicketCount'];
    $flightDepart = $_POST['flightDepart'];
    $flightArrival = $_POST['flightArrival'];
    $travlPLan = $_POST['travlPLan'];
    $adults = $_POST['adults'];
    $childs = $_POST['childs'];

    if($rows > 0){
        $res = $data->fetch_assoc();
        for ($i=0; $i < $ticketNumber; $i++) { 
            $output .= '
            <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
            <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Customer’s Ticket</p>
        <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
          <div class="w-40  h-full flex flex-col items-center relative">
              <h2 class="text-lg font-openSans pt-1">Flight Number</h2>
              <h2 class="text-lg font-openSans mt-2 ml-0">#'.$_SESSION['FlightNumber'].'</h2>
          </div>
          <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
            <div class="w-full flex flex-col justify-start items-start space-y-8 ml-10">
              <h3 class="text-xl dark:text-white cl:text-lg mt-1 font-semibold leading-6 text-gray-800">Flight Information</h3>
              <div class="flex justify-start items-start flex-col space-y-2">
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Depart: </span> '.$_SESSION['Depart'].'</p>
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Arrival: </span>  '.$_SESSION['ArrivalAirport'].'</p>
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Seats: </span>  '.$_SESSION['Seats'].'</p>
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Aircraft: </span>  '.$_SESSION['aircraft'].'</p>
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Airline: </span>  '.$_SESSION['airline'].'</p>
                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-400">Price: </span>  '.$_SESSION['price'].'</p>
              </div>
            </div>
            <div class="w-full flex flex-col justify-start items-start space-y-8 -ml-20">
              <h3 class="text-xl dark:text-white cl:text-lg mt-1 font-semibold leading-6 text-gray-800">Other Information</h3>
              <div class="flex justify-start items-start flex-col space-y-2">
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Depart Date: </span>
                    '.$flightDepart.'
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Arrival Date: </span>
                    '.$flightArrival.'
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Travel Plan: </span>
                    '.$travlPLan.' 
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Adults: </span>
                    '.$adults.'
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Children: </span>
                    '.$childs.'
                  </p>
                </div>
              </div>
          </div>
 
            <div class="w-full flex flex-col justify-start items-start space-y-8 -ml-20">
              <h3 class="text-xl dark:text-white cl:text-lg mt-1 font-semibold leading-6 text-gray-800">Personal Information</h3>
              <div class="flex justify-start items-start flex-col space-y-2">
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">First Name:</span>
                    '.$res['fname'].'
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Last Name: </span>
                    '.$res['lname'].'
                  </p>
                </div>
                <div class="flex items-center space-x-3">
                  <p class="text-sm dark:text-white leading-none text-gray-800">
                    <span class="dark:text-gray-400 text-gray-400">Email:</span>
                    '.$res['email'].'
                  </p>
                </div>
               
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
            ';
            
        }
        echo $output;

    }

?>