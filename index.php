<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title> Ceplikas English </title>
	<meta name="description" content="Ceplikas English">
	<meta name="author" content="Hannah Mahon">

        <link rel="stylesheet" type="text/css" href="fceplikas.css" />
	<link rel="shortcut icon" href="http://hm21rocks.webs.com/fave.ico">

	<!--[if lt IE 9]>
	<noframes></noframes><noscript></noscript><!-- --><noframes></noframes><noscript></noscript><!-- --><script type="text/javascript" src="http://static.websimages.com/static/global/js/webs/usersites/p.js"></script><script type="text/javascript" src="http://www.freewebs.com/p.js"></script><script scr="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideToggle("slow");
          });
        });

        $(document).ready(function(){
          $("#flip2").click(function(){
            $("#panel2").slideToggle("slow");
          });
        });

        $(document).ready(function(){
          $("#flip3").click(function(){
            $("#panel3").slideToggle("slow");
          });
        });

        $(document).ready(function(){
          $("#flip4").click(function(){
            $("#panel4").slideToggle("slow");
          });
        });

        </script>
</head>

<body>
<center>

<p class="class"> Ceplikas English </p>

<table>
<tr>
<th>

<a href="e9.php"> E.E. </a>
<div id="flip">
<a href="#"> <img src="arrow.png"> </a>
</div> 

<div id="panel"> <p class="information">
<?php
//get information for A Class
$homepage = file_get_contents('http://hm21rocks.webs.com/aaenglish/information/example.html');
echo $homepage;
?>
</p>
</div>

</th>
<th>

<a href="e9.php"> E 9 </a>
<div id="flip4">
<a href="#"> <img src="arrow.png"> </a> 
</div> 

<div id="panel4"> <p class="information">
<?php
//get information for A Class
$homepage = file_get_contents('http://hm21rocks.webs.com/aaenglish/information/example.html');
echo $homepage;
?>
</p>
</div>

</th>
<th>

<a href="e9.php"> L.A.L. </a>
<div id="flip2">
<a href="#"> <img src="arrow.png"> </a>
</div>

<div id="panel2"> <p class="information">
<?php
//get information for A Class
$homepage = file_get_contents('http://hm21rocks.webs.com/aaenglish/information/example.html');
echo $homepage;
?>
</p>
</div>

</th>
<th>

<a href="e9.php"> M & R </a>
<div id="flip3">
<a href="#"> <img src="arrow.png"> </a>
</div>

<div id="panel3"> <p class="information"> 
<?php
//get information for A Class
$homepage = file_get_contents('http://hm21rocks.webs.com/aaenglish/information/example.html');
echo $homepage;
?>
</p>
</div>

</th>

</tr>

</table>


</center>
</body>


