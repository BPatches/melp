<html>
  <body>   
    <form action="uploadFile.php" method="post"
	  enctype="multipart/form-data">
      <label for="file">Filename:</label>
      <input type="file" name="file" id="file"><br>
      <input type="text" name="nameOnPage" id="nameOnPage"><br>

      <?php
	 @$db = new mysqli('localhost','team08','mango','team08');

         $qu='SELECT articleTitle FROM articles';
         $qp=$db->prepare($qu);

         $qp -> bind_result($artName);
         $qp ->execute();

         while($qp -> fetch()){
            echo "<input type=\"radio\" name=\"article\" value=\"$artName\">$artName<br>";
         }
      ?>
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
