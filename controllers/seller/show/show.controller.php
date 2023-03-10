<?php

require '../../../database/database.php';
require '../../../models/show.model.php';
$shows = getAllShows();
foreach ($shows as $show) :
    $show_modal = "deleteShow" . $show['show_id'];
    if($show['time']<"12:00"){
        $time= $show['time']." AM";
    }
    else{
        $time= $show['time']." PM";
    }
?>
    <tr class="font-medium text-gray-300 dark:text-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-600 border-b-2 border-gray-400">
        <td class=""><img src="../../../assets/movie_image/<?= $show["image"] ?>" width="80" height="80"></td>
        <td class="px-6 py-3"><?= $show["movie_name"] ?></td>
        <td class="px-6 py-3"><?= $show["venue_name"] ?></td>
        <td class="px-6 py-3"><?= $show["hall"] ?></td>
        <td class="px-6 py-3"><?= $show["date"] ?></td>
        <td class="px-6 py-3"><?= $time ?></td>
        <td class="px-6 py-3"><?= $show["price_per_ticket"]?>$</td>
        <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-500" onclick="editShow(<?= $show['show_id'] ?>)">Edit</a> <span class="font-bold">|</span>
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-500" data-bs-toggle="modal" data-bs-target="<?= '#' . $show_modal ?>">Delete</a>
        </td>
        <td>
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="<?= $show_modal ?>">
                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                        <div class="modal-body p-4 text-lg text-left text-red-600">
                            <p>Do you want to delete this show ?</p>
                        </div>
                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 rounded-b-md">
                            <button type="button" class="bg-gray-100 hover:bg-gray-200 px-6 py-2.5 text-black font-medium text-xs leading-tight uppercase border transition duration-150 ease-in-out rounded " data-bs-dismiss="modal">Cancle</button>
                            <button type="button" class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg transition duration-150 ease-in-out ml-1" onclick="deleteShow(<?= $show['show_id'] ?>,<?= $show_modal ?>)">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>

<?php
endforeach;
?>