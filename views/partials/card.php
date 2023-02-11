<ul class="nav nav-tabs flex flex-row justify-center md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4 mt-5 ml-10 gap-10" id="tabs-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a href="#tabs-home" class="link block text-sm font-bold text-white uppercase focus:text-yellow-400 focus:border-yellow-400 focus:border-b-2 leading-tight px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100" id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home" aria-selected="true" autofocus>All Genres</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tabs-profile" class="link block text-sm font-bold text-white uppercase focus:text-yellow-400 focus:border-yellow-400 focus:border-b-2 leading-tight px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100" id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">Action</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tabs-messages" class="link block text-sm font-bold text-white uppercase focus:text-yellow-400 focus:border-yellow-400 focus:border-b-2 leading-tight px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100" id="tabs-messages-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages" role="tab" aria-controls="tabs-messages" aria-selected="false">Horror</a>
    </li>
</ul>
<div class="tab-content" id="tabs-tabContent">
    <div class="tab-pane fade show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
        <!-- All Genres  -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-6">
            <?php foreach ($shows as $show) :
            ?>
                <div class="flex flex-col justify-center mb-10">
                    <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                        <img src="../../assets/movie_image/<?= $show['image']; ?>" class="card-image object-cover transition-all duration-500">
                        <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                        </div>
                        <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                            <h1 class="font-bold text-white mb-3"><?= $show['movie_name']; ?></h1>
                            <div class="flex flex-col">
                                <div class="flex text-white m-1">
                                    <i class="material-icons">sell</i>
                                    <p class="ml-3"><?= $show['genre']; ?></p>
                                </div>
                                <div class="flex text-white m-1">
                                    <i class="material-icons">schedule</i>
                                    <p class="ml-3"><?= $show['duration']; ?></p>
                                </div>
                            </div>
                            <div class="flex flex-col pt-6 gap-3 w-auto">
                                <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['movie_id'] ?>">MORE INFO</a></button>
                                <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['movie_id'] ?>">BOOK NOW</a></button>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center mt-2">
                        <h1 class="text-xl text-white"><?= $show['movie_name']; ?></h1>
                        <span class="text-yellow-500"><?= $show['release_date']; ?></span>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <div class="tab-pane fade" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
        <!-- Actions  -->
        <div class="grid grid-cols-2 md:gird-cols-3 lg:grid-cols-6 gap-4 p-6">
            <?php foreach ($shows as $show) :
                if (strtolower($show['genre']) === "action") :
            ?>
                    <div class="flex flex-col justify-center mb-10">
                        <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                            <img src="../../assets/movie_image/<?= $show['image']; ?>" class="card-image object-cover transition-all duration-500">
                            <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                            </div>
                            <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                                <h1 class="font-bold text-white mb-3"><?= $show['movie_name']; ?></h1>
                                <div class="flex flex-col">
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">sell</i>
                                        <p class="ml-3"><?= $show['genre']; ?></p>
                                    </div>
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">schedule</i>
                                        <p class="ml-3"><?= $show['duration']; ?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col pt-6 gap-3 w-auto">
                                    <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['movie_id'] ?>">MORE INFO</a></button>
                                    <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['movie_id'] ?>">BOOK NOW</a></button>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center mt-2">
                            <h1 class="text-xl text-white"><?= $show['movie_name']; ?></h1>
                            <span class="text-yellow-500"><?= $show['release_date']; ?></span>
                        </div>
                    </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
    <div class="tab-pane fade" id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
        <!-- Horrors  -->
        <div class="grid grid-cols-2 md:gird-cols-3 lg:grid-cols-6 gap-4 p-6">
            <?php foreach ($shows as $show) :
                if (strtolower($show['genre']) === "horror") :
            ?>
                    <div class="flex flex-col justify-center mb-10">
                        <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                            <img src="../../assets/movie_image/<?= $show['image']; ?>" class="card-image object-cover transition-all duration-500">
                            <div class=" absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                            </div>
                            <div class=" absolute inset-0 flex flex-col items-center justify-center text-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
                                <h1 class="font-bold text-white mb-3"><?= $show['movie_name']; ?></h1>
                                <div class="flex flex-col">
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">sell</i>
                                        <p class="ml-3"><?= $show['genre']; ?></p>
                                    </div>
                                    <div class="flex text-white m-1">
                                        <i class="material-icons">schedule</i>
                                        <p class="ml-3"><?= $show['duration']; ?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col pt-6 gap-3 w-auto">
                                    <button class="px-10 py-1 hover:bg-white hover:text-black text-center rounded text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['movie_id'] ?>">MORE INFO</a></button>
                                    <button class="px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['movie_id'] ?>">BOOK NOW</a></button>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center mt-2">
                            <h1 class="text-xl text-white"><?= $show['movie_name']; ?></h1>
                            <span class="text-yellow-500"><?= $show['release_date']; ?></span>
                        </div>
                    </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</div>