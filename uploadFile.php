<?php
echo "<!DOCTYPE html>";
echo '<html lang="en">';
echo '    <head>';
echo "        <title>melp Upload demo</title>";
echo '        <meta charset="utf-8">';
echo "    </head>";
echo "    <body>";

if ($_FILES["file"]["error"] > 0)
{
     echo "    Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
     echo "    Upload: " . $_FILES["file"]["name"] . "<br>";
     echo "    Type: " . $_FILES["file"]["type"] . "<br>";
     echo "    Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
}

$fname = "/u/pa/fb/pbarring/pbarring_public/rmp/t8MelpUploads/" . $_POST["nameOnPage"];
$num ="";

while ( file_exists($fname . $num))
{
     if($num == "")
     {
	  $num = 1;
     }
     else
     {
	  $num += 1;
     }
}

$fname = $fname . $num;

move_uploaded_file($_FILES["file"]["tmp_name"],$fname);


@$db = new mysqli('localhost','team08','mango','team08');

$qu="SELECT articleID FROM articles WHERE articleTitle =" . $_POST["article"];
$qp =$db->prepare($qu);

$qp -> bind_result($artId);
$qp -> execute();

$qp -> fetch();

$qu="INSERT INTO pictures (pictureLoc, articleID) values ($fname,$artId)"


echo "    Stored in: " . $fname ;

echo "    </body>";
echo "</html>";
?>
