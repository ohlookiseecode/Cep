<head>
	<meta charset="utf-8">

	<title> Ceplikas English </title>
	<meta name="description" content="Ceplikas English">
	<meta name="author" content="Hannah Mahon">

        <link rel="stylesheet" type="text/css" href="fceplikas.css" />
	<link rel="shortcut icon" href="http://hm21rocks.webs.com/fave.ico">
</head>

<?php

    $dir =        'upload/';
    $file_display = array('jpg', 'jpeg', 'png', 'gif');

    if (file_exists($dir) == false) {
    echo 'Directory \'', $dir, '\' not found!';
    } else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {

//NAME OF FILES: echo '<h2>'.str_replace('.jpg', '', str_replace('name', 'Name', $file)).'</h2>';

      $file_type = strtolower(end(explode('.', $file)));

     if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true)     
{
            echo '<br><img src="', $dir, '/', $file, '" alt="', $file, '" />';
     }
    }
    }
?>
