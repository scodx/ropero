<?php

$files = glob("*");

?>
<html>
  <body style="background: black;">
    <form>
      <input name="random" type="submit" style="border: none; width: 60%; margin: 0 20% 10px; background: #3030CD; color: white; height: 50px;" value="RANDOM" />
    </form>
    <?php
      if(isset($_GET['random'])){
        foreach(array_rand($files, 10) as $index){
          ?><img src="<?php echo $files[$index] ?>" style="width: 100%" /><?php
        }
      }
    ?>
  </body>
</html>




