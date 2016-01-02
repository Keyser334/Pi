<?php
if(isset($_POST['insert'])){
     $message = exec ('/var/www/html/scripts/test.py').' insert';
    }
    if(isset($_POST['select'])){
     $message = exec ('/var/www/html/scripts/test2.py').' select';
    }
?>
  	 <form  method="post">
	 		<input type="text" name="txt" value="<?php if(isset($message)){ echo $message;}?>" >
	 		<input type="submit" name="insert" value="insert">
	 		<input type="submit" name="select" value="select" >
	 </form>
