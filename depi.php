<html>
<h1> yo </h1>

<?php
if (($_FILES["myfile1"]["type"] == "image/gif") 
|| ($_FILES["myfile1"]["type"] == "image/jpeg")
|| ($_FILES["myfile1"]["type"] == "image/jpg")
|| ($_FILES["myfile1"]["type"] == "image/png")
&& ($_FILES["myfile1"]["size"] < 2000000))  // limitation of size: 
  {
  if ($_FILES["myfile1"]["error"] > 0) // error occurs during uploading
    {
    echo "Return Code: " . $_FILES["myfile1"]["error"] . "<br />";
    }
  else
    {
    // show the basic information of uploaded files	
    echo "Upload: " . $_FILES["myfile1"]["name"] . "<br />";
    echo "Type: " . $_FILES["myfile1"]["type"] . "<br />";
    echo "Size: " . ($_FILES["myfile1"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["myfile1"]["tmp_name"] . "<br />";

    // check whether the file exists in the target folder	
    if (file_exists("upload/" . $_FILES["myfile1"]["name"])){
      echo $_FILES["myfile1"]["name"] . " already exists. ";
      }
    // do the uploading: moving the file from temporary folder to the target folder
    else{
      move_uploaded_file($_FILES["myfile1"]["tmp_name"],
      "upload/" . $_FILES["myfile1"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["myfile1"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

<!-- redirect -->
<meta HTTP-EQUIV="REFRESH" content="2; url=http://netdenizen.org/u/hannahm/allpictures.php">

</html>
