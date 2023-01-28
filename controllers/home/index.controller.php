<?php
require 'models/show.model.php';

$shows= getShow();

require "views/home/index.view.php";