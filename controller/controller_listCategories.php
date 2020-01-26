<?php
require_once __DIR__ . '/../model/model_getCategories.php';

$categories = getCategories();

require_once __DIR__ . '/../view/view_listCategories.php';
