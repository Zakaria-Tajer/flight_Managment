<?php
    session_start();

    include 'autoload.php';
    include 'includes/header.inc.php';


?>

<body>
<div class="min-h-screen bg-gradient-to-tr from-[#485563] to-[#29323c] flex justify-center items-center">
        <div class="bg-white flex space-x-4 drop-shadow-lg w-auto">
            <div class="bg-blue-400 w-[550px]" id="img_container">
                <img src="/public/img/Varios-11-150ppp-01.png" class="w-full h-full object-cover">
            </div>
            <div class="relative" id="registerForm">
                <h1 class="text-3xl font-poppins py-4 px-4 text-[#00a7d3]">Sign in</h1>
                
                <div class="hidden" id="errorContainer">
                    <div class="w-96 bg-[#333] h-12 rounded ml-1 mt-4 flex items-center justify-center" >
                        <h1 class="font-poppins text-white text-center" id="error">Error Here</h1>
                    </div>
                </div>

                <form action="" class="mt-12" id="formRegister">
                    <div class="w-full flex  space-x-4 ">
                        <div>
                            <label for="" class=" block font-openSans mt-2 text-[#006c67]">First Name</label>
                            <input type="text" class=" border-b-2 outline-none border-b-[#0092ba] w-5/6  mb-4 py-2 px-2" name="fname">
                        </div>
                        <div>
                            <label for="" class="block font-openSans mt-2 text-[#006c67]">LastName</label>
                            <input type="text"  class=" border-b-2 outline-none border-b-[#0092ba] w-5/6  mb-4 py-2 px-2" name="lname">
                        </div>
                    </div>
                    

                    <label for="" class="block font-openSans mt-2 text-[#006c67]">Email Address</label>
                    <input type="email"  class=" border-b-2 outline-none border-b-[#0092ba] w-96 mb-4 py-2 px-2" name="email">
                    
                    <label for="" class="block font-openSans mt-2 text-[#006c67]">Password</label>
                    <input type="password"  class=" border-b-2 outline-none border-b-[#0092ba] w-96 mb-4 py-2 px-2" name="password">

                    <label for="" class="block font-openSans mt-2 text-[#006c67]">Confirm Password</label>
                    <input type="password"  class=" border-b-2 outline-none border-b-[#0092ba] w-96 mb-4 py-2 px-2" name="passwordConfirmation">

                    <div class="flex items-center justify-center ">
                        <button class="px-12 py-3 rounded mx-auto bg-[#00a7d3] mt-4 font-openSans text-white" id="register" type="submit">Register Now</button>
                    </div>
                    <div class="w-full h-10 flex items-center justify-center my-4">
                        <h1 class="font-poppins text-lg ">Already SignUp?<a href="" id="loginHref" class="text-[#00a7d3]"> login</a></h1>
                    </div>
                    
                </form>
                <!--  -->

                
            </div>

        </div>
</div>




<script src="../public/js/signup.js"></script>
</body>
</html>