<?php
    include 'autoload.php';
    include 'includes/header.inc.php';


?>
<title>Document</title>
<body>
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
  
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto" >
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
          <div class="block pl-2 font-semibold text-lg self-start text-gray-700">
            <h2 class="leading-relaxed">Passenger Information</h2>
        </div>
        </div>
    <div class="w-full h-12 hidden items-center justify-center bg-[#333] mt-5 rounded-lg" id="eroorContainer">
        <p class="text-md font-poppins text-white" id="errorText"></p>
    </div>
        <form class="divide-y divide-gray-200 h-auto"  id="passengerFiller" >
          
        </form>
          <div class="pt-4 flex items-center space-x-4">
              <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:bg-blue-800 duration-700 font-poppins" id="FormDone">Done</button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
</div>

<script src="../public/js/passengerInformation.js"></script>

</body>
</html>