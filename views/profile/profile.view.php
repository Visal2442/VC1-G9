<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "controllers/register/register.account.controller.php" ?>

<div class="flex p-5 items-center justify-center">
	<div class=" flex flex-col items-center justify-center">
		<?php
			if (!isset($_SESSION['profile'])) {
		?>
			<img src="../../assets/profile/unnamed.png" class="h-52 w-52 rounded-full m-9">
		<?php
		} else {
		?>
			<img src="../../assets/profile/<?= $_SESSION['profile'] ?>" class="h-52 w-52 rounded-full m-9">
		<?php
		}
		?>
		
		<label class="block text-sm font-medium text-white dark:text-white" for="file_input">
			<svg fill="none" class="w-10 h-10  -mt-24  ml-40 rounded-full p-2 bg-slate-900" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"></path>
				<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"></path>
			</svg>
		</label>
		<input class="hidden w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
	</div>
	<div class="mb-3">
		<h1 class="text-white px-1 font-bold text-2xl m-3">My Profile</h1>
		<h4 class="text-white px-1 text-xl m-3">Name : <?= "<span>" . $_COOKIE['username'] . "</span>"; ?></h4>
		<h4 class="text-white px-1 text-xl m-3">Email : <?= "<span>" . $_COOKIE['email'] . "</span>"; ?></h4>
		<h4 class="text-white px-1 text-xl m-3">Date of birth : <?= "<span>" . $_COOKIE['date'] . "</span>"; ?></h4>
		<h4 class="text-white px-1 text-xl m-3">Address : <?= "<span>" . $_COOKIE['address'] . "</span>"; ?></h4>
	</div>
</div>


<?php require "views/partials/footer.php" ?>