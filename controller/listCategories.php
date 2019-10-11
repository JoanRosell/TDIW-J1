<?php
require_once __DIR__ . '/../model/getCategories.php';

$categories = getCategories();

require_once __DIR__ . '/../view/listCategories.php';
