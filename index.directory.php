<?php
include 'Helpers/dumper.php';
include 'Helpers/directoryReader.php';
$images = directoryReader('images');
if(! $images){
	die('Could not load files.');
}
// dd($images);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fetch Local files</title>
	<style type="text/css">
		.wrapper {
			width: 100px;
			height: 100px;
		}
		.wrapper img {
			max-width: 100px;
			max-height:100px;	
			width: 90%;
			height: 90%;
		}
	</style>
</head>
<body>
	<ul>
		<?php foreach ($images as $value) : ?>
			<li class="wrapper">
				<img src="<?= $value ?>">
			</li>
		<?php endforeach ?>
	</ul>
</body>
</html>
