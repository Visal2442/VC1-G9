<ul class="nav nav-tabs flex flex-row  w-4/5 md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4 mt-5 mx-auto gap-10" id="tabs-tab">
    <li class="nav-item">
        <a href="" class="link block text-sm font-bold text-white uppercase focus:text-yellow-400 focus:border-yellow-400 focus:border-b-2 auto leading-tight px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 active" data-bs-toggle="pill" data-bs-target="#All" autofocus>All GENRE</a>
    </li>
    <?php for ($i = 1; $i < count($genres); $i++) : ?>
        <li class="nav-item">
            <a href="" class="link block text-sm font-bold text-white uppercase focus:text-yellow-400 focus:border-yellow-400 focus:border-b-2 auto leading-tight px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100" data-bs-toggle="pill" data-bs-target="<?= '#' . $genres[$i] ?>"><?= $genres[$i] ?></a>
        </li>
    <?php endfor; ?>
</ul>
<div class="tab-content w-4/5 m-auto">
    <div class="tab-pane fade show active" id="All">
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
    <?php for ($i=1;$i<count($genres);$i++) : ?>
        <div class="tab-pane fade show" id="<?= $genres[$i] ?>">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-6">
                <?php foreach ($shows as $show) :
                    if (strtolower($show['genre']) === strtolower($genres[$i]) && strtolower($show['genre']) != null ) :
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