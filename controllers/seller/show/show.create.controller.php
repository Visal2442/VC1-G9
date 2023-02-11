<?php
require '../../../database/database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['title']) && !empty($_POST['venue']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['price']) && !empty($_POST['hall'])){
        require '../../../models/show.model.php';
        createShow($_POST['title'],$_POST['venue'],$_POST['date'],$_POST['time'], 0, $_POST['price'], $_POST['hall']);
        echo 'success';
    }
}

