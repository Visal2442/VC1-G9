<nav class=" flex justify-between  border-gray-200 p-6"
        style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
        <div class="nav-left mt-3 ">
            <div class="flex flex-col  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <img class="h-10 w-10 -mt-2.5 rounded-full" src="assets/logo/cinema-logo.png">
                <a href="/" class="block py-2 pr-4 pl-3 text-white  rounded md:bg-transparent md:text-white md:p-0 dark:text-white" aria-current="page">Home</a>
                <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-white hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact Us</a>
            </div>
        </div>
        <div class="nav-right mr-8 w-full md:block md:w-auto" id="mobile-menu  ">
            <div class="btn m-0 flex">
                <form action="#" method="post" class="relative mx-auto text-gray-600 lg:block mr-8">
                    <input
                        class=" border-2 border-gray-300 bg-white w-96 h-10 pl-2 pr-8 rounded-full text-sm outline-white hover:outline-yellow-300"
                        type="text" name="search" id="search" placeholder="Search" autocomplete="off">
                    <button type="submit" name="submit" value="search" class="absolute right-0 top-0 mt-3 mr-3">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px"
                            height="512px">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </form>
                <div class="btn">
                    <button class=' bg-[#185b8b] hover:bg-[#2177B5] hover:underline m-0 py-2 pr-4 pl-3 text-white  rounded'>
                        <a href="/register">Register</a></button>
                    <button class=' bg-[#0d3652] hover:bg-[#0C5384] hover:underline py-2 pr-4 pl-3 ml-auto text-white rounded '>
                        <a href="/login"> Log in </a>
                    </button>
                </div>
            </div>
        </div>
    </nav>