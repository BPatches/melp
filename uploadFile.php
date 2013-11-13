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
    echo "    Stored in: " . $_FILES["file"]["tmp_name"];
  }

echo "    </body>";
echo "</html>";
?>
