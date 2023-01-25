<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>

<form action="" method="" class="" style="background: #06263C ;">
        <div class="flex flex-row items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white  shadow  md:mt-0 sm:max-w-md xl:p-0 " style="background-color: #133954; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class=" flex justify-center font-bold leading-tight tracking-tight text-gray-900 dark:text-white"
                        style="font-size: 2.5rem;">LOG IN </h1>
                    <form class="space-y-4 md:space-y-6" action="#">

                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Username </label>
                            <input type="text" name="username" id="username" placeholder="username"
                                class=" border  text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:focus:ring-blue-500 outline-0  "
                                required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email </label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500  outline-0 "
                                placeholder="example@gmail.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password </label>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   dark:focus:ring-blue-500  outline-0"
                                required>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="text-sm  hover:text-red-500 font-medium text-white hover:underline dark:text-primary-500">
                                Forgot Password ?</a>
                        </div>
                        <button type="submit"
                            class="bg-sky-500/50 hover:bg-sky-500/60   font-bold  block w-full p-1.5 border border-none text-white text-lg :text-darkwhite "
                           > LOG IN </button>
                        <p class="text-sm  text-gray-500 dark:text-white font-bold">
                            I don't have an account yet ? <a href="register.php"
                                class="pl-1  font-medium text-primary-600 dark:text-primary-500 hover:underline hover:text-red-500">
                                Register </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </form>

