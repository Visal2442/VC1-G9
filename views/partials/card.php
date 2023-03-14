<ul class="nav nav-tabs flex flex-row w-4/5 md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4 mt-5 mx-auto gap-10" role="tablist" data-te-nav-ref>
    <li role="presentation">
        <a href="#tabs-home" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#All" data-te-nav-active role="tab" aria-controls="All" aria-selected="true">ALL GENRE</a>
    </li>
    <?php for ($i = 1; $i < count($genres); $i++) : ?>
        <li role="presentation">
            <a href="#tabs-profile" class="data-[te-nav-active]:border-warning data-[te-nav-active]:text-warning focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="<?= '#' . $genres[$i] ?>" role="tab" aria-controls="<?= $genres[$i] ?>" aria-selected="false"><?= $genres[$i] ?></a>
        </li>
    <?php endfor; ?>
</ul>

<div class="w-4/5 m-auto">
    <!-- All Genres  -->
    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="All" role="tabpanel" data-te-tab-active>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-6">
            <?php foreach ($shows as $show) :
            ?>
                <div class="flex flex-col justify-center mb-10">
                    <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                        <img src="../../assets/movie_image/<?= $show['image']; ?>" class="card-image w-fit transition-all duration-500">
                        <div class=" absolute -inset-96 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
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
                                <button class="px-8 md:px-10 py-1 hover:bg-white hover:text-black text-center rounded text-white border-solid border-2 border-white-600 "><a href="/detail?id=<?= $show['movie_id'] ?>">MORE INFO</a></button>
                                <button class="px-8 md:px-10 py-1 hover:bg-yellow-300 text-center rounded bg-yellow-500 text-black-500"><a href="/detail?id=<?= $show['movie_id'] ?>">BOOK NOW</a></button>
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
    <!-- Each Genre  -->
    <?php for ($i = 1; $i < count($genres); $i++) : ?>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="<?= $genres[$i] ?>">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-6">
                <?php foreach ($shows as $show) :
                    if (strtolower($show['genre']) == strtolower($genres[$i]) && strtolower($show['genre']) != null) :
                ?>
                        <div class="flex flex-col justify-center mb-10">
                            <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                                <img src="../../assets/movie_image/<?= $show['image']; ?>" class="card-image object-cover transition-all duration-500">
                                <div class=" absolute -inset-96 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
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
    <?php endfor; ?>
</div>