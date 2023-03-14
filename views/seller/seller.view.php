<?php require 'views/partials/seller.head.php' ?>

<div class="flex items-start">
  <div id="all-review" class="w-72 h-screen bg-slate-800">
    <ul class="mr-4 flex list-none flex-col flex-wrap pl-0" role="tablist" data-te-nav-ref>
      <img src="assets/logo/cinema-logo.png" alt="Logo" width="200" height="100" class="text-center">
      <li class="nav-item flex-grow text-lg font-semibold mt-5 px-6 text-gray-200">DASHBOARD</li>
      <li class="nav-item flex-grow">
        <a href="#" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tab-home" data-te-nav-active aria-selected="true">HOME</a>
      </li>
      <!-- Movie  -->
      <li class="nav-item flex-grow text-lg font-semibold px-6 mt-3 text-gray-200">MOVIES</li>
      <li class="nav-item flex-grow">
        <a href="#" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tab-show" aria-selected="false">SHOWING MOVIES</a>
      </li>
      <li class="nav-item flex-grow">
        <a href="#" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tab-allMovie" aria-selected="false">Movies</a>
      </li>
      <li class="nav-item flex-grow">
        <a href="#" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tab-venue" aria-selected="false">Venues</a>
      </li>
      <!-- User  -->
      <li class="nav-item flex-grow text-lg font-semibold px-6 mt-3 text-gray-200">USERS</li>
      <li class="nav-item flex-grow">
        <a href="#" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#user" aria-selected="false">Customer Account</a>
      </li>
    </ul>
  </div>
  <div class="tab-content w-full m-5 text-white">
    <!-- Home  -->
    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tab-home" role="tabpanel" aria-labelledby="tabs-home-tab03" data-te-tab-active>
      <div id="seller-nav" class="w-full flex justify-between items-center p-4 mb-5 bg-slate-800 shadow-lg">
        <h1> Welcome To Seller Page</h1>
        <div class="flex items-center gap-6">
          <div class="flex ml-4 gap-3">
            <div class="flex flex-col">
              <h1 class="text-end text-lg font-bold"><?= $_SESSION['seller_name'] ?></h1>
              <p class="text-xs"><?= $_SESSION['seller_email'] ?></p>
            </div>
            <img src="../../assets/profile/<?= $_SESSION['seller_profile'] ?>" alt="Profile" width="40" height="40">
          </div>
          <button type="button" id="site-btn" class="bg-blue-700 p-2 rounded text-white"><a href="/">Visit Site</a></button>
        </div>
      </div>
      <div class="home-control tab-pane fade show active">
        <div class="review grid grid-cols-5 gap-4 mb-4">
          <div id="all-review" class="flex gap-3 items-center justify-center h-24 rounded bg-slate-800">
            <img src="../../assets/imgs/movie.png" width="40" height="40">
            <div class="flex flex-col">
              <span class=" text-lg text-white p-0 m-0"><?= count($movies) ?></span>
              <span class=" text-gray-400 p-0 m-0">Movies</span>
            </div>
          </div>
          <div id="all-review" class="flex gap-3 items-center justify-center h-24 rounded bg-slate-800">
            <img src="../../assets/imgs/show.png" width="40" height="40">
            <div class="flex flex-col">
              <span class=" text-lg text-white p-0 m-0"><?= count($shows) ?></span>
              <span class=" text-gray-400 p-0 m-0">Showing Movies</span>
            </div>
          </div>
          <div id="all-review" class="flex gap-3 items-center justify-center h-24 rounded bg-slate-800">
            <img src="../../assets/imgs/user.png" width="40" height="40">
            <div class="flex flex-col">
              <span class=" text-lg text-white p-0 m-0"><?= count($customers) ?></span>
              <span class=" text-gray-400 p-0 m-0">Customers</span>
            </div>
          </div>
          <div id="all-review" class="flex gap-3 items-center justify-center h-24 rounded bg-slate-800">
            <img src="../../assets/imgs/shop.png" width="40" height="40">
            <div class="flex flex-col">
              <span class=" text-lg text-white p-0 m-0"><?= count($bookings) ?></span>
              <span class=" text-gray-400 p-0 m-0">Total Bookings</span>
            </div>
          </div>
          <div id="all-review" class="flex gap-3 items-center justify-center h-24 rounded bg-slate-800">
            <img src="../../assets/imgs/balance.png" width="40" height="40">
            <div class="flex flex-col">
              <span class=" text-lg text-white p-0 m-0">$ <?= ($total_balances) ?></span>
              <span class=" text-gray-400 p-0 m-0">Total Balances</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--All Shows -->
    <?php require 'views/seller/show/show.view.php' ?>
    <!-- All Movies -->
    <?php require 'views/seller/movie/movie.view.php' ?>
    <!-- All Venues -->
    <?php require 'views/seller/venue/venue.view.php' ?>

    <!-- User  -->
    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="user" role="tabpanel" aria-labelledby="tabs-contact-tab03">

    </div>
  </div>
</div>

<!-- ==== Script for chart ====  -->
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
<!-- ================================================ -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>