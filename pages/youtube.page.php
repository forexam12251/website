<form action="" method="post" name="youtube" >
<input type="text" name="youtube">
<input type="submit" value="send"> 


</form>

<?php 
$youtube_clip = @$_POST['youtube'];
$X = explode("v=",$youtube_clip);
$Z = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
$Y = implode(' ::/P  ',$Z);
echo $Y;

?>