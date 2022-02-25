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

?>

    <title>Payment Page</title>
</head>
<body>
    <!-- <div class="min-h-screen bg-gray-400 flex"> -->
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
  <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

  <div class="flex justify-start item-start space-y-2 flex-col">
    <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 font-mono">Booking Order </h1>
    <div class="w-full bg-gray-300 h-[3px]"></div>
    <div class="flex space-x-2">
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600" id="currentDate"></p>
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600" id="currentTime"></p>
    </div>
</div>
  <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
    <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8" id="container">
      
      <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
          <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
          <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
            <div class="flex justify-between w-full">
              <p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
              <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$56.00</p>
            </div>
            <div class="flex justify-between items-center w-full">
              <p class="text-base dark:text-white leading-4 text-gray-800">Discount <span class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">STUDENT</span></p>
              <p class="text-base dark:text-gray-300 leading-4 text-gray-600">-$28.00 (50%)</p>
            </div>
            <div class="flex justify-between items-center w-full">
              <p class="text-base dark:text-white leading-4 text-gray-800">Shipping</p>
              <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$8.00</p>
            </div>
          </div>
          <div class="flex justify-between items-center w-full">
            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">$36.00</p>
          </div>
        </div>
        <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6" id="shipping">
        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Shipping</h3>
<div class="flex justify-between items-start w-full">
  <div class="flex justify-center items-center space-x-4">
    <div class="w-8 h-8">
      <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
    </div>
    <div class="flex flex-col justify-start items-center">
      <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800">DPD Delivery<br /><span class="font-normal">Delivery with 24 Hours</span></p>
    </div>
  </div>
  <p class="text-lg font-semibold leading-6 dark:text-white text-gray-800">$8.00</p>
</div>
<div class="w-full flex justify-center items-center">
  <button class="hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">View Carrier Details</button>

          </div>
        </div>
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
        <div class="mb-3 flex -mx-2">
            <div class="px-2">
                <label for="type1" class="flex items-center cursor-pointer">
                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
                </label>
            </div>
            <div class="px-2">
                <label for="type2" class="flex items-center cursor-pointer">
                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                    <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png" class="h-8 ml-3">
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Name on card</label>
            <div>
                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="John Smith" type="text"/>
            </div>
        </div>
        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Card number</label>
            <div>
                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000 0000 0000 0000" type="text"/>
            </div>
        </div>
        <div class="mb-3 -mx-2 flex items-end">
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Expiration date</label>
                <div>
                    <select class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                        <option value="01">01 - January</option>
                        <option value="02">02 - February</option>
                        <option value="03">03 - March</option>
                        <option value="04">04 - April</option>
                        <option value="05">05 - May</option>
                        <option value="06">06 - June</option>
                        <option value="07">07 - July</option>
                        <option value="08">08 - August</option>
                        <option value="09">09 - September</option>
                        <option value="10">10 - October</option>
                        <option value="11">11 - November</option>
                        <option value="12">12 - December</option>
                    </select>
                </div>
            </div>
            <div class="px-2 w-1/2">
                <select class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                </select>
            </div>
        </div>
        <div class="mb-10">
            <label class="font-bold text-sm mb-2 ml-1">Security code</label>
            <div>
                <input class="w-32 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="000" type="text"/>
            </div>
        </div>
        <div>
            <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
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
        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Ticket Actions</h3>

          <div class="flex justify-start md:justify-center items-center space-x-3">
            <button class="hover:bg-green-700 duration-700 w-60 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-800 py-5  bg-green-500 text-base font-medium leading-4 text-white" id="ModifierUserFlight">Modifier Ticket</button>
            <button class="hover:bg-red-700 duration-700 w-60 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-800 py-5  bg-red-600 text-base font-medium leading-4 text-white" id="CancelUserFlight">Cancel Ticket</button>
          </div>
      </div>
    </div>
    <div class="w-full min-h-screen flex items-center justify-center bg-blue-400 hidden absolute top-0" id="containerModifierForm">
    <form class="w-1/2 bg-white px-10 py-10 rounded-lg shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-auto cursor-pointer" viewBox="0 0 320 512" id="closeIcon">
        <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
    </svg>
  <div class="relative z-0 mb-6 w-full group">
      <input type="text" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
      <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Depart</label>
  </div>
  <div class="relative z-0 mb-6 w-full group">
      <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
      <label for="floating_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Arrival</label>
  </div>
  <div class="relative z-0 mb-6 w-full group">
      <input type="text" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
      <label for="floating_repeat_password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Seat Number</label>
  </div>
  
  <div class="grid xl:grid-cols-2 xl:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
        <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Aircraft (Optional)</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
        <label for="floating_last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Airline</label>
    </div>
  </div>
  <div class="grid xl:grid-cols-2 xl:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input type="Date" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
        <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Depart Date</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="Date" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
        <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Arrival Date</label>
    </div>
  </div>
  <div class="grid xl:grid-cols-2 xl:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
        <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adults</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
        <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Children</label>
    </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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
    <script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>

</body>
</html>