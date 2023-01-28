<?php
    session_start();
    if(!empty($_SESSION['username'])){
        $display=true;
    }else{
        $display=false;
    }
?>

<nav class=" flex justify-between items-center border-gray-200 p-6"
        style="box-shadow: rgba(0,0, 0, 0.45) 0px 25px 20px -20px;">
        <div class="nav-left mt-3 ">
            <div class="flex flex-col md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <img class="h-16 w-16 -mt-2.5 rounded-full" src="assets/logo/cinema-logo.png">
                <a href="/" class="block py-2 pr-4 pl-3 text-white text-lg border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                <a href="#" class="block py-2 pr-4 pl-3 text-white text-lg border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                <a href="#" class="block py-2 pr-4 pl-3 text-white text-lg border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact Us</a>
            </div>
        </div>
        <div class="nav-right mr-8 w-full md:block md:w-auto" id="mobile-menu  ">
            <div class="btn m-0 flex">
                <div class="relative mx-auto text-gray-600 lg:block mr-5">
                    <input class="border-2 py-4 border-gray-300 bg-white w-96 h-10 pl-2 pr-8 rounded text-sm outline-white hover:outline-yellow-300" type="text" name="search" id="search" placeholder="Search the show..." autocomplete="off" >
                    <i class="material-icons absolute right-1 top-2">search</i>
                    <div class="list absolute z-50" id="show_list">
        
                    </div>
                </div>
                <div class="btn">
                    <button class='<?php echo $display?"":"hidden"; ?> bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white rounded'>
                        <a href="logout.php">Log out</a>
                    </button>
                    <!-- <button class='<?php echo !$display?"":"hidden"; ?> bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white rounded'>
                        <a href="/register">Register</a>
                    </button> -->
                    <button class='<?php echo !$display?"":"hidden"; ?> bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white rounded'>
                        <a href="/login">Log in</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>