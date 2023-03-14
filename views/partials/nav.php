<?php
session_start();
if (isset($_COOKIE['username'])) {
  $display = true;
} else {
  $display = false;
}
?>

<nav class="flex-no-wrap relative flex w-full items-center justify-between py-4 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start" data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-6">
    <button class="block border-0 bg-transparent py-2 px-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="[&>svg]:w-7">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
        </svg>
      </span>
    </button>
    <!-- Nav Left  -->
    <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-te-collapse-item>
      <a class="mt-2 mr-2 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mt-0" href="/">
        <img src="assets/logo/cinema-logo.png" class="h-16 w-16 rounded-full" loading="lazy" />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
        <li class="nav-item p-2 md:ml-5" data-te-nav-item-ref>
          <a class="<?= urlIs('/') ? "text-yellow-400" : "text-white " ?> text-lg hover:text-yellow-600 sm:my-6" href="/" data-te-nav-link-ref>Home</a>
        </li>
        <li class="nav-item p-2 md:ml-5" data-te-nav-item-ref>
          <a class="<?= urlIs('/contact') ? "text-yellow-400" : "text-white " ?> text-lg hover:text-yellow-600 sm:my-6" href="#" data-te-nav-link-ref>About Us</a>
        </li>
        <li class="nav-item p-2 md:ml-5" data-te-nav-item-ref>
          <a class="<?= urlIs('/about') ? "text-yellow-400" : "text-white " ?> text-lg hover:text-yellow-600 sm:my-6" href="#" data-te-nav-link-ref>Contact Us</a>
        </li>
      </ul>
    </div>

    <!-- Nav Right elements -->
    <div class="flex items-center relative">
      <div class="relative flex items-center" data-te-dropdown-ref>
        <div class="relative text-gray-600 mr-5">
          <input class="border-2 border-gray-300 md:w-96 sm:w-full py-2 pl-3 rounded text-sm outline-white hover:outline-yellow-300" type="text" name="search" id="search" placeholder="Search the show..." autocomplete="off">
          <i class="material-icons absolute right-1 top-2">search</i>
          <div class="list absolute z-50 w-full" id="show_list">

          </div>
        </div>
        <button class='<?= !$display ? "" : "hidden"; ?> bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white rounded'>
          <a href="/login">Log in</a>
        </button>
        <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none <?= $display ? "" : "hidden"; ?>" href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
          <img src="../../assets/profile/<?= isset($_COOKIE['profile']) ? $_COOKIE['profile'] : "" ?>" class="h-10 w-10 rounded-full ">
        </a>
        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-52 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-blue-500 w-12 h-12 px-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            <a href="/profile" class="dropdown-item text-sm py-2 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 ">My Profile</a>
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-blue-500 w-12 h-12 px-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            <a href="/cart" class="dropdown-item text-sm py-2 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 ">Cart</a>
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-red-500 w-12 h-12 px-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
            <a href="#" class="dropdown-item text-sm py-2 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " data-te-toggle="modal" data-te-target="#logout" data-te-ripple-init data-te-ripple-color="light">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Right elements -->
  </div>
</nav>

<!-- ==== Modal log out ===== -->

<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        <p class="text-black text-lg">Do you want to log out ?</p>
      </div>
      <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button type="button" class="inline-block bg-gray-50 text-black rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">Close</button>
        <button type="button" class="ml-1 bg-red-600 hover:bg-red-700 inline-block rounded  px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light"><a href="logout.php"> Log Out</a></button>
      </div>
    </div>
  </div>
</div>