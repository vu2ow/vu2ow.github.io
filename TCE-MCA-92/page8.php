<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 2</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
	font-size: xx-large;
	color: #B91414;
}
.auto-style2 {
	border-width: 0px;
}
</style>
</head>

<body style="background-color: #CCFF99">

<p class="auto-style1">TCE MCA '86-92 Photos&nbsp; </p>
<p class="auto-style1">
<a href="Photo08.jpg">
<img alt="" height="980" src="Photo08.jpg" width="1495" class="auto-style2" /></a></p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" >
<p><label>Post at least one comment to see others ....<strong>*</strong><br>
<p><label>Your Name<strong>*</strong><br>
<input type="text" size="48" name="name" value="<?PHP if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>"></label></p>
<p><label>What you think<strong>*</strong><br>
<textarea name="msg" cols="48" rows="8"><?PHP if(isset($_POST['msg'])) echo htmlspecialchars($_POST['msg']); ?></textarea></label></p>
<p><input type="submit" name="sendfeedback" value="Post"></p>
</form>
 <?php
 if($_POST && isset($_POST['name'], $_POST['msg'])) {
    $msg = $_POST['msg']; 
    $name = $_POST['name'];
    if(!$name || !$msg) {
       $errorMsg = "Please enter your Name and Comment";
    } else
    {
    $posts = file_get_contents("posts8.txt");
    $posts = "$name\n<br />\n<br /> $msg\n<br />\n<br />" . $posts;
    file_put_contents("posts8.txt", $posts);
    echo $posts;
    }
    
 }
 
 ?>

</body>

</html>
