<?php
require_once __DIR__ . '/../model/model_getUserInfo.php';
$client_info = getClientInfo($_SESSION['user_id']);
require_once __DIR__ . '/../view/view_userDetail.php';