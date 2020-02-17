<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Cloud Server</title>
	</head>
	<body bgcolor="white">
		<?php
			if (isset($_SESSION['message']) && $_SESSION['message'])
			{
				printf('<script>alert(\''. $_SESSION['message'].'\');</script>');
				unset($_SESSION['message']);
			}
		?>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<center>
				<div style="background-color: white; width: 800px; padding: 20px; color: grey; border: none;">
					<h2>[ the<font color="red">red</font>survivor's Cloud Service ]</h2><br/>
					<input type="password" name="password" style="font-size: 25px; margin: 10px; border: 1px grey solid; padding: 2px;" placeholder="Password"  /><br/><br />
					<input type="file" name="uploadedFile" style="font-size: 25px; margin: 10px; border: 1px grey solid; padding: 2px;" /><br/>
					<span>Max file size allowed = 2GB</span><br />
					<input type="submit" name="uploadBtn" value="Upload" style="font-size: 25px; width: 200px; border: 1px grey solid; padding: 2px;" /><br />
					<hr/>
					<p>beta 0.1</p>
				</div>
			</center>
		</form>
	</body>
</html>
