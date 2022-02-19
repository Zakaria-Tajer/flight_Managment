<div class="w-[110px] h-screen bg-white flex flex-col items-center space-y-4">
    <div class="w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center mt-10 mb-14">
        <img src="#" alt="">
        <h1>Logo</h1>
    </div>
    <ul class="space-y-8 z-20">
        <li class="relative cursor-pointer" id="containerIcons">
            <div class="flex">
                <i class="fa-solid fa-house text-xl text-gray-300 py-4 px-7 rounded-md  bg-white shadow-md hover:text-black hover:bg-[#F1F1F1]"></i>
                <a href="<?= $router->generate('home') ?>" class="absolute text-center translate-x-20 px-4 py-4 bg-white rounded-md hidden" id="dashboard">dashboard</a>
            </div>
        </li>
        <li class="relative cursor-pointer" id="containerList">
            <div class="flex">
                <i class="fa-solid fa-rectangle-list text-xl text-gray-300 py-4 px-7 rounded-md  bg-white shadow-md hover:text-black hover:bg-[#F1F1F1]"></i>
                <a href="<?= $router->generate('flighList') ?>" class="absolute text-center translate-x-20 w-24 py-4 hidden bg-white rounded-md" id="List">Flight List</a>
            </div>
        </li>            
    </ul>
</div>
<script src="https://kit.fontawesome.com/f821dddf9d.js" crossorigin="anonymous"></script>
<script src="../public/js/styles/index.js"></script>

