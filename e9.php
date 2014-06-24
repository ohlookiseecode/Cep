<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title> Ceplikas English </title>
	<meta name="description" content="Ceplikas English">
	<meta name="author" content="Hannah Mahon">

        <link rel="stylesheet" type="text/css" href="fceplikas.css" />
	<link rel="shortcut icon" href="http://hm21rocks.webs.com/fave.ico">
</head>

<style>

/* yeah, no */
 body {
/*   font: small/1.2 Arial, Helvetica, sans-serif; */ }  

#accordion {
   width: 80%; /* 500px */
   height: 400px; /* 400px; */
   margin: 50px auto; 
   }
#accordion div {
   height: calc(465px / 4); 
   overflow: hidden;}
#accordion:hover div {
   height: 30px; /* 15px; */ }
#accordion:hover div:hover {
   height: 600px; /* 340px; */
   overflow: auto; }
   
#cs {
   background-color: #666666; 
   border-radius:25px 25px 0px 0px;
   }
#sy {
   background-color:#222222; }
#ca {
   background-color: #444444; }
#hd {
   background-color:#555555; 
   border-radius:0px 0px 25px 25px;
   } 
/* h1 {
   font-size: 150%;
   margin: 10px 10px .2em 25px; } */ 
p {
   margin: 50px 50px; /* margin: 1em 25px; } */ 
	
	
</style>
 <style>
ul
{
   width: 80%; /* 500px */
list-style-type:none;
margin: 0px auto;
padding: 0;
}
li
{
display:inline;
padding: 0px 20px;
}
</style>

</head>

<body>
<br>
<br>

<ul>
<li><a href="/u/hannahm/Ceplikas.php">CEPLIKAS</a></li>
<li><a href="#">EE</a></li>
<li><a href="#">LAL</a></li>
<li><a href="#">M&R</a></li>
</ul>

   <div id="accordion">
      <div id="cs">
<p class="class2"> &nbsp;&nbsp;Course Standards </p>
         <p><?php include("e9cs.html"); ?></p>
      </div>
      <div id="sy">
<p class="class2"> &nbsp;&nbsp;Syllabus </p>
         <p><?php include ("e9cs.html"); ?></p>
      </div>
      <div id="ca">
<p class="class2"> &nbsp;&nbsp;Calendar </p>
         <p><?php include ("allpictures.php"); ?></p>
      </div>	
      <div id="hd">
<p class="class2"> &nbsp;&nbsp;Handouts </p>
         <p><?php include ("e9cs.html"); ?></p>
      </div>
      <div style="float: none; clear: both; height: 0;"> </div>
   </div>
   
</body>
