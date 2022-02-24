<?php
    include 'autoload.php';
    include 'includes/header.inc.php';

?>
<!-- Create by joker banny
<div class=" bg-black inline-block h-10 absolute">
    </div> -->
    <div class="relative">
        <div class="w-20 h-4 right-4 mt-10 text-3xl absolute cursor-pointer" id="hidePopup">
            <i class="fa-solid fa-xmark absolute z-10 "></i>
        </div>
        <div class="h-screen bg-indigo-100 flex justify-center items-center space-x-8 relative">
        <div class="lg:w-2/5 md:w-1/2 w-2/3 " id="register">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" id="popUpformUser">
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Register</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="username" />
                </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
                    </div>
                        <div>
                            <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="password" />
                        </div>
                            <div>
                                <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
                                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="confirm password" />
                            </div>
                                <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
                </form>
            </div>
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-indigo-600 text-white absolute -translate-x-4">
                <h1>OR</h1>
            </div>
        <div class=" lg:w-2/5 md:w-1/2 w-2/3" id="login">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" id="loginPopUpForm">
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Login</h1>
                
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
                    </div>
                        <div>
                            <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="password" />
                        </div>
                            
                        <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Login</button>
                </form>
            </div>
    </div>
    </div>
<script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>

<!-- <script src="../public/js/styles/popUpForm.js"></script> -->