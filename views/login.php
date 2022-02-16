<?php
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
                
                <h1 class="text-3xl font-poppins py-4 px-4 text-[#00a7d3]">Login</h1>
                
                <div class="hidden" id="errorContainer">
                    <div class="w-96 bg-[#333] h-12 rounded ml-1 mt-4 flex items-center justify-center" >
                        <h1 class="font-poppins text-white text-center" id="error">Error Here</h1>
                    </div>
                </div>
                
                <form action="" class=" relative top-12 mr-5 " id="loginForm">
                    <label for="" class="block font-openSans mt-2 text-[#006c67]">Email Address</label>
                    <input type="email"  class=" border-b-2 outline-none border-b-[#0092ba] w-96 mb-4 py-2 px-2" name="email">
                    
                    <label for="" class="block font-openSans mt-2 text-[#006c67]">Password</label>
                    <input type="password"  class=" border-b-2 outline-none border-b-[#0092ba] w-96 mb-4 py-2 px-2" name="password">

                    <div class="flex items-center justify-center mt-4">
                        <button class="px-12 py-3 rounded mx-auto bg-[#00a7d3] mt-4 font-openSans text-white" type="submit" id="login">Login</button>
                    </div>
                    <div class="w-full h-10 flex items-center justify-center">
                        <h1 class="mt-4 font-poppins text-lg ">Not SignUp?<a href="" id="regHref" class="text-[#00a7d3]"> register</a></h1>
                    </div>
                    
                </form>
                <!-- echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5" -->

                <!--  -->

                
            </div>

        </div>
</div>








    <script src="../public/js/login.js"></script>
</body>
</html>