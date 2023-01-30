<?php require "views/partials/head.php" ?>
<?php require "controllers/login/login.account.controller.php" ?>

<div class="flex flex-row items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="login w-full md:mt-0 sm:max-w-md xl:p-0 ">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class=" flex justify-center font-bold leading-tight tracking-tight text-white text-4xl">LOG IN </h1>
            <p class="text-red-500 text-lg rounded <?= empty($account_error) ? "hidden" : "bg-red-300 p-3" ?>"><?= $account_error; ?></p>
            <form class="space-y-4 md:space-y-6" action="#" method='post'>
                <div>
                    <label for="text" class="text-white px-1 font-medium">Username </label>
                    <input type="text" name="username" id="username" placeholder="username" class="border text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:focus:ring-blue-500 outline-0">
                </div>
                <div>
                    <label for="email" class="text-white px-1 font-medium">Email </label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 outline-0" placeholder="example@gmail.com">
                </div>
                <div>
                    <label for="password" class="text-white px-1 font-medium">Password </label>
                    <input type="password" name="password" id="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm hover:text-red-500 font-medium text-white hover:underline dark:text-primary-500">Forgot Password ?</a>
                </div>
                <button type="submit" name="submit" class="bg-sky-500/50 hover:bg-sky-500/60 font-bold block w-full p-1.5 border border-none text-white text-lg">LOG IN</button>
                <div class="flex justify-between items-center">
                    <a href="/" class="text-white items-center hover:text-blue-500">Back</a>
                    <p class="text-sm text-white">Don't have an account yet ?
                        <a href="/register" class="pl-1 font-lg text-primary-600 dark:text-primary-500 hover:underline hover:text-blue-500 font-bold underline">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>