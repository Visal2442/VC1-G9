<?php
require '../../../database/database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['title']) && !empty($_POST['venue']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['price']) && !empty($_POST['hall']) && !empty($_POST['amount_of_ticket'])){
        require '../../../models/show.model.php';
        createShow($_POST['title'],$_POST['venue'],$_POST['date'],$_POST['time'], $_POST['amount_of_ticket'], $_POST['price'], $_POST['hall']);
        echo 'success';
    }
}

