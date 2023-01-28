

<div class="mx-auto h-auto">
 <div id="default-carousel" class="relative" data-carousel="static">
    <div class="overflow-hidden flex relative rounded-lg mx-20 " style="height:119vh;">
       
            <!-- All shows -->
            <div class="slideShow hidden mt-20 p-6 duration-700 ease-in-out" data-carousel-item>
                <div class="gap-6 flex flex-wrap h-auto overflow-hidden">
                <?php foreach($shows as $show):
                ?>
                    <div class="flex flex-col justify-center">
                      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                            <img src="<?= $show['image'];?>" alt="" class=" card-image object-cover transition-all duration-500">
                            <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                            </div>
                            <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                                <h1 class="font-bold text-white mb-3"><?= $show['show_name'];?></h1>
                                <div class="flex flex-col">
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">sell</i>
                                        <p class="ml-3"><?= $show['type'];?></p>
                                    </div>
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">schedule</i>
                                        <p class="ml-3"><?= $show['date'];?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col pt-6 gap-3 w-auto">
                                    <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded    text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['show_id']?>">MORE INFO</a></button>
                                    <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['show_id']?>">BUY NOW</a></button>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center">
                            <h1 class="text-xl text-white" ><?= $show['show_name'];?></h1>
                            <span class="text-yellow-500"><?= $show['date'];?></span>
                        </div>
                    </div>
                <?php 
                endforeach; 
                ?>
                </div>
            </div>
        

             <!-- Movie -->
             <div class="slideShow hidden mt-20 p-6 duration-700 ease-in-out" data-carousel-item >
                <div class="gap-6 flex flex-wrap h-auto overflow-hidden">
                <?php foreach($shows as $show):
                    if($show['type']==="movie"):
                ?>
                    <div class="flex flex-col justify-center">
                      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                            <img src="<?= $show['image'];?>" alt="" class=" card-image object-cover transition-all duration-500">
                            <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                            </div>
                            <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                                <h1 class="font-bold text-white mb-3"><?= $show['show_name'];?></h1>
                                <div class="flex flex-col">
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">sell</i>
                                        <p class="ml-3"><?= $show['type'];?></p>
                                    </div>
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">schedule</i>
                                        <p class="ml-3"><?= $show['date'];?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col pt-6 gap-3 w-auto">
                                    <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded    text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['show_id']?>">MORE INFO</a></button>
                                    <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['show_id']?>">BUY NOW</a></button>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center">
                            <h1 class="text-xl text-white" ><?= $show['show_name'];?></h1>
                            <span class="text-yellow-500"><?= $show['date'];?></span>
                        </div>
                    </div>
                <?php 
                    endif;
                    endforeach; 
                ?>
                </div>
            </div>

            <!-- Concert -->
            <div class="hidden mt-20 p-6 duration-700 ease-in-out" data-carousel-item style="background-image: linear-gradient(90deg,#041826,#082336,#143954,#093351,#092F4A,#072840,#05253A);">
                <div class="gap-6 flex flex-wrap h-auto overflow-hidden">
                <?php foreach($shows as $show):
                    if($show['type']==="concert"):
                ?>
                    <div class="flex flex-col justify-center">
                      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                            <img src="<?= $show['image'];?>" alt="" class=" card-image object-cover transition-all duration-500">
                            <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                            </div>
                            <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                                <h1 class="font-bold text-white mb-3"><?= $show['show_name'];?></h1>
                                <div class="flex flex-col">
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">sell</i>
                                        <p class="ml-3"><?= $show['type'];?></p>
                                    </div>
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">schedule</i>
                                        <p class="ml-3"><?= $show['date'];?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col pt-6 gap-3 w-auto">
                                    <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded    text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['show_id']?>">MORE INFO</a></button>
                                    <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['show_id']?>">BUY NOW</a></button>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center">
                            <h1 class="text-xl text-white" ><?= $show['show_name'];?></h1>
                            <span class="text-yellow-500"><?= $show['date'];?></span>
                        </div>
                    </div>
                <?php 
                    endif;
                    endforeach; 
                ?>
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="flex absolute gap-10 top-0 mt-5 mb-80 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="p-1 bg-yellow-500 rounded" aria-current="false" data-carousel-slide-to="0">All Shows</button>
                <button type="button" class="p-1 bg-yellow-500 rounded" aria-current="false"  data-carousel-slide-to="1">Movie</button>
                <button type="button" class="p-1 bg-yellow-500 rounded " aria-current="false" data-carousel-slide-to="2">Concert</button>
            </div>
            <!-- Slider controls -->
          </div>
          <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                  <span class="hidden">Previous</span>
              </span>
          </button>
          <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  <span class="hidden">Next</span>
              </span>
          </button>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  </div>
</div>