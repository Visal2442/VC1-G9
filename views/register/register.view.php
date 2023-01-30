<?php require "views/partials/head.php" ?>
<?php require "controllers/register/register.account.controller.php" ?>
<?php session_start(); ?>
<form action="#" method="post" class=" min-w-screen min-h-screen flex items-center justify-center  py-5">
    <div class="md:flex w-full h-1/4">
        <div class="register w-1/3 md:py-10 md:px-10 m-auto">
            <div class="text-center mb-3">
                <h1 class="font-bold text-4xl text-white">REGISTER</h1>
            </div>
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="username" class="text-white px-1 font-medium">Username</label>
                        <div class="flex">
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" placeholder="Enter your username" name="username">
                        </div>
                        <small class="text-red-500"> <?= $username_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="email" class="text-white px-1 font-medium">Email</label>
                            <div class="flex">
                                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" placeholder="Enter your email" name="email">
                            </div>
                            <small class="text-red-500"><?= $email_error; ?></small>
                            <p class="text-red-500"><?= $isTaken_error;?></p>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="password" class="text-white px-1 font-medium">Password</label>
                            <div class="flex">
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" placeholder="Enter your password" name="password">
                            </div>
                            <small class="text-red-500"> <?= $password_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="confirm_password" class="text-white px-1 font-medium"> Confirm  password</label>
                            <div class="flex">
                                <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" placeholder="Enter your confirm password" name="confirm_password">
                            </div>
                            <small class="text-red-500"> <?= $confirm_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="date_of_birth" class="text-white px-1 font-medium text-blak-500">Date Of Birth</label>
                            <div class="flex">
                                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" name="date_of_birth">
                            </div>
                            <small class="text-red-500"> <?= $date_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-9">
                            <label for="address" class="text-white px-1 font-medium text-blak-500">Address</label>
                            <div class="flex">
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0" placeholder="Enter your address" name="address">
                            </div>
                            <small class="text-red-500"> <?= $address_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="bg-sky-500/50 hover:bg-sky-500/60 register block w-full mx-auto text-white text-xl font-bold p-2" type='submit' name="submit">REGISTER</button>
                            <div class="flex justify-between items-center mt-5">
                                <a href="/" class="text-white hover:text-blue-500 hover:underline">Back</a>
                                <p class="text-sm text-white">
                                    I have an account.
                                    <a href="/login"class="pl-1 font-lg font-bold text-primary-600 dark:text-primary-500 hover:underline hover:text-blue-500">Log in </a>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>