<?php
// koneksi database
include '../../koneksi.php'; 
session_start();

$action = isset($_GET['act']) ? $_GET['act'] : '' ;
switch ($action) {

	default:
		include 'list.php';
		break;
}


function edit_action()
{

}

function tambah_action()
{
	
}

?>
