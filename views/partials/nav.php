<?php
session_start();
if (isset($_COOKIE['username'])) {
    $display = true;
} else {
    $display = false;
}
?>

<nav class="relative w-full flex flex-wrap items-center justify-between py-4 hover:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
            </svg>
        </button>
        <!-- Nav Left  -->
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
            <a href="/" class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1">
                <img class="h-16 w-16 rounded-full" src="assets/logo/cinema-logo.png">
            </a>
            <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
                <li class="nav-item p-2 md:ml-5">
                    <a href="/" class="text-white text-lg hover:text-yellow-400 sm:my-6 active:text-red-600">Home</a>
                </li>
                <li class="nav-item p-2 md:ml-5">
                    <a href="#" class="text-white text-lg hover:text-yellow-400 sm:my-6 active:text-red-600">About Us</a>
                </li>
                <li class="nav-item p-2 md:ml-5">
                    <a href="#" class="text-white text-lg hover:text-yellow-400 sm:my-6 active:text-red-600">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- Nav Right -->
        <div class="flex items-center relative">
            <div class="dropdown relative flex items-center">
                <div class="relative text-gray-600 mr-5">
                    <input class="border-2 border-gray-300 md:w-96 sm:w-full py-2 pl-3 rounded text-sm outline-white hover:outline-yellow-300" type="text" name="search" id="search" placeholder="Search the show..." autocomplete="off">
                    <i class="material-icons absolute right-1 top-2">search</i>
                    <div class="list absolute z-50" id="show_list">

                    </div>
                </div>
                <button class='<?= !$display ? "" : "hidden"; ?> bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white rounded'>
                    <a href="/login">Log in</a>
                </button>
                <a href="#" class="dropdown-toggle flex items-center hidden-arrow <?= $display ? "" : "hidden"; ?>" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full" style="height: 60px; width: 60px" />
                </a>
                <ul class=" dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-40 m-0 bg-clip-padding border-none left-auto right-0 " aria-labelledby="dropdownMenuButton2">
                    <li>
                        <a href="#" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 ">My Profile</a>
                    </li>
                    <li>
                        <a href="logout.php" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>