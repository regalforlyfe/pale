<?php
	include 'koneksi.php';

	$id_kategori = $_GET['id_kategori'];
	$query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";

	if($mysqli->query($query) === TRUE){
	    echo "Berhasil menghapus data";
	}else{
	    echo "Error: $mysqli->error";
	}