<?php
session_start();
if(isset($_SESSION['login_tag'])){
}else{
  die("{none:'none'}");
}



echo "{";
if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload:'" . $_FILES["file"]["name"] . "',";
  // echo "Type:'" . $_FILES["file"]["type"] . "',";
  echo "Size:'" . ($_FILES["file"]["size"] / 1024) . "',";
  // echo "Temp_file:'" . $_FILES["file"]["tmp_name"] . "'";
  if (file_exists("./upload/" . $_FILES["file"]["name"])) {
    echo "exists:"."true";
  } else {
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "./upload/" . $_FILES["file"]["name"]);
  }
  echo "}";
}
?>