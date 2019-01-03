<?php
include '../dir/init.php';
include 'elems/password.php';

if (isset($_POST['password']) && md5($_POST['password']) == '202cb962ac59075b964b07152d234b70') {
$_SESSION['auth'] = true;

$_SESSION['message'] = [
    'text' => 'You login successfully',
    'status' => 'success'
];

header('Location: /admin/'); die();
} else{
ob_start();
include 'elems/formAuth.php';
$contentAuth = ob_get_clean();
echo $contentAuth;
}