<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>
<?php require "controllers/register/register.account.controller.php" ?>

<form action="#" method="post" class="min-w-screen min-h-screen flex items-center justify-center  py-5">
    <div class="md:flex w-full h-1/4">
        <div class="w-1/3 md:py-10 md:px-10 m-auto" style="background-color:#133954; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
            <div class="text-center mb-3">
                <h1 class="font-bold text-3xl text-white">REGISTER</h1>
            </div>
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="username" class="text-white px-1 font-medium">Username</label>
                        <div class="flex">
                            <input type="text" class="w-full p-1.5 border-2 border-gray-200 outline-none  font-thin" placeholder="Enter your username" name="username">
                        </div>
                        <small class="text-red-500"> <?= $username_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="email" class="text-white px-1 font-medium">Email</label>
                            <div class="flex">
                                <input type="email" class="w-full pr-3 p-1.5 border-2 border-gray-200 outline-none font-thin" placeholder="Enter your email" name="email">
                            </div>
                            <small class="text-red-500"> <?= $email_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="password" class="text-white px-1 font-medium">Password</label>
                            <div class="flex">
                                <input type="text" class="w-full pr-3 p-1.5 border-2 border-gray-200 outline-none font-thin" placeholder="Enter your password" name="password">
                            </div>
                            <small class="text-red-500"> <?= $password_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="confirm_password" class="text-white px-1 font-medium"> Confirm  password</label>
                            <div class="flex">
                                <input type="password" class="w-full pr-3 p-1.5 border-2 border-gray-200 outline-none font-thin" placeholder="Enter your confirm password" name="confirm_password">
                            </div>
                            <small class="text-red-500"> <?= $confirm_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="date_of_birth" class="text-white px-1 font-medium text-blak-500">Date Of Birth</label>
                            <div class="flex">
                                <input type="date" class="w-full pr-3 p-1.5 border-2 border-gray-200 outline-none font-thin" name="date_of_birth">
                            </div>
                            <small class="text-red-500"> <?= $date_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-9">
                            <label for="address" class="text-white px-1 font-medium text-blak-500">Address</label>
                            <div class="flex">
                                <input type="text" class="w-full pr-3 p-1.5 border-2 border-gray-200 outline-none font-thin" placeholder="Enter your address" name="address">
                            </div>
                            <small class="text-red-500"> <?= $address_error; ?></small>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="bg-sky-500/50 hover:bg-sky-500/60 register block w-full mx-auto text-white text-xl font-bold p-2" type='submit' name="submit">REGISTER</button>
                            <p class="text-sm text-gray-500 dark:text-white pt-1 pl-1">
                                I have account.
                                <a href="/"class="pl-1 font-lg text-primary-600 dark:text-primary-500 hover:underline hover:text-red-500">Log in </a>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>