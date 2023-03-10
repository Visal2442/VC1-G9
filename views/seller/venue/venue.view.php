 <!-- Venue  -->
 <?php require("views/seller/venue/venue.create.view.php");?>
 <?php require 'views/seller/venue/venue.edit.view.php' ?>
 
 <div class="tab-pane fade text-white" id="tab-venue">
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
     <h1 class="text-2xl font-bold border-b-2 border-slate-400 py-8 mb-5">VENUES</h1>
     <div class="table-venue mt-5 p-4 bg-slate-800 shadow-lg">
         <div class="flex justify-between items-center">
             <h1 class="font-bold mb-5">All Venues</h1>
             <!-- Button trigger modal -->
             <button type="button" class="inline-block mb-5 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#createVenue">Add Venue</button>
         </div>
         <!-- Table to show venues  -->
         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
             <thead class="font-medium text-gray-700 bg-gray-700 dark:text-gray-400">
                 <tr class="uppercase text-white">
                     <th scope="col" class="px-6 py-3">Venue Name</th>
                     <th scope="col" class="px-6 py-3">Address</th>
                     <th scope="col" class="px-6 py-3 mr-8">Action </th>
                 </tr>
             </thead>
             <tbody class=" w-full overflow-y-auto" id="tbody">

             </tbody>
         </table>
     </div>

 </div>

 <script src="views/js/venue/venue.js"></script>