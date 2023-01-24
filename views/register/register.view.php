<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>

<form action="" method="" class="min-w-screen min-h-screen flex items-center justify-center  py-5">
    <div class="md:flex w-full h-1/4">
        <div class="w-1/3 md:py-10  md:px-10 m-auto " style="background-color:#133954; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
            <div class="text-center mb-3">
                <h1 class="font-bold text-3xl text-white">REGISTER</h1>
            </div>
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="" class="text-white  px-1 font-medium">Username</label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                            <input type="text" class="w-full -ml-10 p-1.5 border-2 border-gray-200 outline-none  font-thin" placeholder="Enter your username" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-white  px-1 font-medium">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input type="email" class="w-full -ml-10 pr-3 p-1.5  border-2 border-gray-200 outline-none  font-thin" placeholder="Enter your email" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-white px-1 font-medium">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input type="password" class="w-full -ml-10 pr-3 p-1.5  border-2 border-gray-200 outline-none font-thin" placeholder="Enter your password" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-white   px-1 font-medium"> Confirm  password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="password" class="w-full -ml-10 pr-3 p-1.5  border-2 border-gray-200 outline-none font-thin" placeholder="Enter your confirm password">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-9">
                            <label for="" class="text-white px-1 font-medium text-blak-500">Address</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pr-3 p-1.5  border-2 border-gray-200 outline-none font-thin" placeholder="Enter your address ">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class=" bg-sky-500/50 hover:bg-sky-500/60 register block w-full  mx-auto text-white text-xl  font-bold p-2" >REGISTER</button>
                            <p class="text-sm  text-gray-500 dark:text-white pt-1 pl-1">
                            I have account.<a href="#"
                                class="pl-1  font-lg text-primary-600 dark:text-primary-500 hover:underline hover:text-red-500">
                                Log in </a>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>