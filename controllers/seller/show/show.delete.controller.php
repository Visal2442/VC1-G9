<?php 

require("../../../database/database.php");

if(isset($_POST["show_id"])){
    require("../../../models/show.model.php");
    deleteShow($_POST["show_id"]);
}