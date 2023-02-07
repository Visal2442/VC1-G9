<?php
require 'database/database.php';
require 'models/show.model.php';

if (isset($_GET['query'])) {
    $inputText = $_GET['query'];
    $shows = searchShow($inputText);
    foreach ($shows as $show) :
?>
        <li class='list-none bg-slate-100 border border-b-slate-300 p-2'>
            <a href="/detail?id=<?= $show['movie_id'] ?>"><?= $show['movie_name'] ?></a>
        </li>
<?php
    endforeach;
}
?>