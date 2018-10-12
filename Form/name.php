<?php
include '../Helpers/dumper.php'; 

$name = $_POST['name'] ?? null;
if(empty(trim($name))){
	header('Location: http://localhost:8000/index.php');
}
echo 'Hi there,' . $_POST['name'];
