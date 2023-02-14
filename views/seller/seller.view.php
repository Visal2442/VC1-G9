<?php require 'views/partials/seller.head.php' ?>

<div class="flex items-start">
  <div class="w-72 h-screen bg-slate-800">
    <ul class="nav nav-tabs flex flex-col list-none border-b-0 pt-0 pb-6 pl-1 px-10 gap-3" id="tabs-tabVertical" role="tablist">
      <img src="assets/logo/cinema-logo.png" alt="Logo" width="200" height="100" class="text-center">
      <li class="nav-item flex-grow text-lg font-semibold mt-5 px-6 text-gray-200">DASHBOARD</li>
      <li class="nav-item flex-grow">
        <a href="" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-1 my-1 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" data-bs-toggle="pill" data-bs-target="#tab-home">HOME</a>
      </li>
      <!-- Movie  -->
      <li class="nav-item flex-grow text-lg font-semibold px-6 mt-3 text-gray-200">MOVIES</li>
      <li class="nav-item flex-grow">
        <a href="#" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-1 my-1 hover:border-transparent hover:bg-gray-100  text-white" data-bs-toggle="pill" data-bs-target="#tab-show">SHOWING MOVIES</a>
      </li>
      <li class="nav-item flex-grow">
        <a href="#" class=" nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-1 my-1 hover:border-transparent hover:bg-gray-100" data-bs-toggle="pill" data-bs-target="#tab-allMovie">Movies</a>
      </li>
      <li class="nav-item flex-grow">
        <a href="#" class=" nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-1 my-1 hover:border-transparent hover:bg-gray-100" data-bs-toggle="pill" data-bs-target="#tab-venue">Venues</a>
      </li>
      <!-- User  -->
      <li class="nav-item flex-grow text-lg font-semibold px-6 mt-3 text-gray-200">USERS</li>
      <li class="nav-item flex-grow">
        <a href="#" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-1 my-1 hover:border-transparent hover:bg-gray-100 focus:border-transparent" data-bs-toggle="pill" data-bs-target="#user">Customer Accounts</a>
      </li>
    </ul>
  </div>

  <div class="tab-content w-full m-5 text-white" id="tabs-tabContentVertical">
    <!-- Home  -->
    <div class="tab-pane fade show active w-full " id="tab-home">
      <div class="w-full flex justify-between items-center p-4 mb-5 bg-slate-800 shadow-lg">
        <h1> Welcome To Seller Page</h1>
        <div class="flex items-center gap-2">
          <div class="flex ml-4 gap-3">
            <div class="flex flex-col">
              <h1 class="text-end text-lg font-bold">Visal Sork</h1>
              <p class="text-xs">dembo445@gmail.com</p>
            </div>
            <img src="assets/profile/Default_pf.png" alt="Profile" width="40" height="40">
          </div>
          <button type="button" class="bg-blue-600 p-2 rounded text-white"><a href="/">Visit Site</a></button>
        </div>
      </div>
      <div class="home-control tab-pane fade show active" id="tab-home">
        <div class="">
          <div class=" bg-white h-48 font-bold shadow-lg shadow-slate-500/50 ">
            <div class="gird-head p-4 border-b border-black"> Report summary</div>
            <div class="grid grid-cols-4 h-32 text-center">
              <div class="gird-1 border-r border-black pt-12"> Up coming </div>
              <div class="gird-2 border-r border-black pt-12"> Movie played so fast</div>
              <div class="gird-3 border-r border-black pt-12"> Currently playing</div>
              <div class="gird-4 pt-12"> Ticket sold so far </div>
            </div>
          </div>
          <div class=" bg-white mt-5 font-bold shadow-lg shadow-slate-500/50 ">
            <div class="p-4 border-b border-black flex justify-between"> <a href="#"> Tickets sold so far </a> <a href="#"> Update Report </a> </div>
            <div class=" text-center">
              <p class=" text-center py-3">Ticket</p>
              <div class="text-body p-4">
                <p class="border ml-4 mr-4 mt-1 border-black p-20">Hello</p>
              </div>
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
    <div class="tab-pane fade text-white" id="user">
      <div class="w-full flex justify-between items-center p-4 mb-5 bg-slate-800 shadow-lg">
        <h1> Welcome To Seller Page</h1>
        <div class="flex items-center gap-2">
          <div class="flex ml-4 gap-3">
            <div class="flex flex-col">
              <h1 class="text-end text-lg font-bold">Visal Sork</h1>
              <p class="text-xs">dembo445@gmail.com</p>
            </div>
            <img src="assets/profile/Default_pf.png" alt="Profile" width="40" height="40">
          </div>
          <button type="button" class="bg-blue-600 p-2 rounded text-white"><a href="/">Visit Site</a></button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>