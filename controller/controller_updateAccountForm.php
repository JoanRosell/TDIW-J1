<?php
require __DIR__ . '/../model/model_getUserInfo.php';
$clientInfo = getClientInfo($_SESSION['user_id']);
require __DIR__ . '/../view/view_updateAccountForm.php';
