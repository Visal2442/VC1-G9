<?php
require '../../../database/database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    require '../../../models/show.model.php';
    createShow($_POST['title'],$_POST['venue'],$_POST['date'],$_POST['time'], 0, $_POST['price'], $_POST['hall']);
    echo 'success';
}

