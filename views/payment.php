<?php
  session_start();
    include 'includes/header.inc.php';
    include 'autoload.php';

    if(!isset($_SESSION['unique_id'])){
      header("location: /");
    }
  $user = new userController();

  $data = $user->getSession();
  $numRow = $data->num_rows;
  
  
  // var_dump($_SESSION['unique_Passenger_id']);


?>
  <link rel="stylesheet" href="../public/css/main.css">
    <title>Payment Page</title>
    <script type="text/javascript">
      window.history.forward()
    </script>
    <script src="https://www.paypal.com/sdk/js?client-id=ARm4qFGxts7QlB9J0XVsRjh7zDn0ZS6T1figtrmdSKwElLC6Hzqiqs5DOLMCjzEcMy0KC-YXjqO5UL_3"></script>
</head>
<body>
    <!-- <div class="min-h-screen bg-gray-400 flex"> -->
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">

  <div class="flex justify-start item-start space-y-2 flex-col">
    <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 font-mono">Booking Order </h1>
    <button class="bg-indigo-600 px-6 py-3 rounded-md text-white font-semibold tracking-wide cursor-pointer w-28 absolute right-10 top-8 md:top-8" id="logoutBtn">Logout</button>

    <div class="w-full bg-gray-300 h-[3px]"></div>
    <div class="flex space-x-2">
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600" id="currentDate"></p>
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600" id="currentTime"></p>
    </div>
</div>
<div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
  
  <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8" id="container">

    <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8 " id="MultiPassengerscontainer">

    </div>
      

    
    </div>
    <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 h-1/2 text-gray-700" style="max-width: 600px">
        <div class="w-full pt-1 pb-5">
            <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
              <i class="fa-solid fa-credit-card text-2xl"></i>
            </div>
        </div>
        <div class="mb-10">
            <h1 class="text-center font-bold text-xl uppercase">Secure payment info</h1>
        </div>
        <div class="mb-3 -mx-2 flex items-end">
            <div class="px-2 w-1/2">
               
            </div>
        </div>
        <div id="paypal">
            <!-- <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"   ><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button> -->
        </div>

    </div>
    
  </div>
</div>
    <?php 
      $rows = $data->fetch_assoc();
    ?>
    <div class="bg-blue-600 sm:flex sm:flex-col md:flex-row" id="summary">
      <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 md:w-1/2 bg-gray-50 dark:bg-gray-800 space-y-6 sm:w-full xl:w-2/4">
          <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
          <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
            <div class="flex justify-between w-full">
              <p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
              <p class="text-base dark:text-gray-300 leading-4 text-gray-600" id="total">
                
                <input type="hidden" value="<?php echo $_SESSION['price']?>" id="priceTotal">
              </p>
            </div>
            <div class="flex justify-between items-center w-full">
              <p class="text-base dark:text-white leading-4 text-gray-800">Discount 
                <span class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">
                  CHILDREN
                </span>
                
                </p>
              <p class="text-base dark:text-gray-300 leading-4 text-gray-600" id="Discount"></p>
            </div>
            
          </div>
          <div class="flex justify-between items-center w-full ">
            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800" >Total</p>
            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600" id="ticketFLightPriceTotal">$36.00</p>
          </div>
      </div>
      <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 md:w-1/2 bg-gray-50 dark:bg-gray-800 space-y-6 sm:w-full xl:w-2/4" id="shipping">
        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800 text-center">Ticket Actions</h3>

          <div class="flex lg:justify-start md:justify-center items-center space-x-3">
            <button class="hover:bg-green-700 duration-700 w-60 hidden dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-800 py-5  bg-green-500 text-base font-medium leading-4 text-white" id="ModifierUserFlight">Modifier Ticket</button>
            <button class="hover:bg-red-700 duration-700 w-60 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-800 py-5  bg-red-600 text-base font-medium leading-4 text-white" id="CancelUserFlight">Cancel Ticket</button>
          </div>
      </div>
    </div>

  <div class="w-full min-h-screen flex items-center justify-center bg-blue-400  absolute top-0 hidden" id="containerModifierForm">
    <form class="w-1/2 bg-white px-10 py-10 rounded-lg shadow-lg" id="flightModifierForm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-auto cursor-pointer" viewBox="0 0 320 512" id="closeIcon">
            <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
        </svg>
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="floating_email" 
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                  placeholder=" " id="DepartSearchModifier" />
          <label for="floating_email" 
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Depart
          </label>
          <div class="w-80 bg-gray-500 shadow-md hidden" id="departList">

        </div>
        </div>
      <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="floating_password" id="arrivalAirportSearch" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
          <label for="floating_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Arrival</label>
          <div class="w-80 bg-gray-500 shadow-md hidden" id="ArrivalList">
            
        </div>
      </div>
      <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="repeat_password" id="seatNumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          <label for="floating_repeat_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Seat Number</label>
      </div>
      
      <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
            <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Aircraft (Optional)</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
            <label for="floating_last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Airline (Optional)</label>
        </div>
      </div>
      <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
            <input type="Date" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="ModifiedDepartDate" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Depart Date</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="Date" name="floating_company" id="ModifiedArrivalDate" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Arrival Date</label>
        </div>
      </div>
      <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="Adults" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adults</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="floating_company" id="Children" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Children</label>
        </div>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="ModBtn">Submit</button>
</form>

    </div>
    <div class="w-full bg-blue-500 h-[1100px] flex justify-center absolute top-0 hidden overflow-hidden" id="redirectPage">
        <div class="w-[500px] bg-white h-[500px] rounded-lg shadow-lg space-y-6 relative translate-y-80 ">
            <div class="w-full mt-4">
                <img src="../public/img/images.png" class="block mx-auto">
            </div>
            <div class="flex flex-col items-center space-y-10">
                <h3 class="text-center text-2xl  font-mono">Hang Tight!</h3>
                <p class="text-center font-mono text-lg">You're being redirected to another page,<br> 
                it may takes upto 10 seconds
            </p>
            </div>
        </div>
    </div>
    <script src="../public/js/styles/payment.js"></script>
    <script src="../public/js/UserPayement.js"></script>
    <script src="../public/js/flightModifier.js"></script>
    <script src="../public/js/paypalPayment.js" defer></script>
    <script src="../public/js/logout.js"></script>
    <script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>

</body>
</html>