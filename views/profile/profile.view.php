<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<section class="w-4/5 my-16 mx-auto flex gap-5">
	<div class="flex flex-col w-2/5 items-center justify-center bg-slate-500 py-5 rounded-lg">
		<img src="../../assets/profile/<?= $_COOKIE['profile'] ?>" alt="avatar" class="rounded-full" width="200">
		<div class="text-center">
			<h5 class="my-3 font-medium text-2xl text-white"><?= $_COOKIE['username'] ?></h5>
			<p class="text-muted mb-1 text-gray-300">Full Stack Developer</p>
			<p class="text-muted mb-4 text-gray-300"><?= $_COOKIE['address'] ?></p>
			<form action="" id="edit-profile-form" method="post" enctype="multipart/form-data">
				<label for="edit-file" class="file-style bg-blue-600 p-3 rounded-lg text-white cursor-pointer">Edit Profile</label>
				<input type="file" id="edit-file" name="edit-profile" class="edit-profile hidden">
			</form>
		</div>
	</div>
	<div class="w-full bg-slate-300 p-5 rounded-lg shadow-lg shadow-indigo-500/40 " text-neutral-50>
		<h1 class="text-2xl font-bold text-center">Your Profile</h1>
		<table class="text-left w-full border border-slate-300">
			<tr class=" border border-t-0 border-l-0 border-r-0 border-b-gray-400 ">
				<th class="font-medium py-5">Full Name</th>
				<td><?= $_COOKIE['username'] ?></td>
			</tr>
			<tr class="border border-t-0 border-l-0 border-r-0 border-b-gray-400">
				<th class="font-medium py-5">Email</th>
				<td><?= $_COOKIE['email'] ?></td>
			</tr>
			<tr class="border border-t-0 border-l-0 border-r-0 border-b-gray-400">
				<th class="font-medium  py-5">Phone</th>
				<td>(096) 95 87 413</td>
			</tr>
			<tr class="border border-t-0 border-l-0 border-r-0 border-b-gray-400">
				<th class="font-medium  py-5">Date Of Birth</th>
				<td><?= $_COOKIE['date'] ?></td>
			</tr>
			<tr class="border border-t-0 border-l-0 border-r-0 border-b-gray-400">
				<th class="font-medium  py-5">Address</th>
				<td><?= $_COOKIE['address'] ?></td>
			</tr>
		</table>
	</div>
</section>



<?php require "views/partials/footer.php" ?>