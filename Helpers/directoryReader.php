<?php
/* . = means current directory
   .. = back directory */
function directoryReader($directory, array $excludeFiles=['.', '..', '.DS_Store']){
	$files =[];
	if( ! is_dir($directory))
	{ 
		return null; 
	}
	if( ! ($filesDirectory = opendir($directory)) )
	{
		return null;
	}
	// loob through the files
	while( ($file=readdir($filesDirectory)) !== false)
	{
		// do some checks
		if(in_array($file, $excludeFiles)){
			continue;
		}
		// add to $images
		$files[] = $directory . '/' . $file;
	}
	closedir($filesDirectory);
	// return $images
	return $files;
}