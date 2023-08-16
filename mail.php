<?php

if (isset($_POST['Submit'])) {
	$name = $_POST['textfield'];
	$subject = $_POST['textfield2'];
	$mailFrom = $_POST['email'];
	$massage = $_POST['textarea'];
	
	$mailto = "DerSchwanendreherRecording@gmail.com";
	$headers = "From: " .$mailFrom;
	$txt = "Message from ".$name." .\n\n" .$message;
	
	mail($mailFrom, $subject, $txt, $headers);
	header("Location: http://127.0.0.1:49444/preview/app/index.html?mailsent");
}

