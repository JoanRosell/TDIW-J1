<?php
include_once __DIR__ . "/../model/getCategories.php";
$categories = getCategories();
include_once __DIR__ . "/../view/mainMenu.php";