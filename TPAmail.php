
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link rel="stylesheet" type="text/css" href="Tpamail.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Send Mail</title>
	<style>
		.back_page_detailer{
	background-image: url('bg1.jpeg');
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height:100vh;

}
input{
	background:transparent;

}
textarea{
	background:transparent;
}
::placeholder{
	color:rgb(0,0,0)
}
.locators{
	transition: 0.3s;
}
.locators:hover{
    color: rgb(47, 103, 117);
}
.nav_tabs div:hover a{
	left: 0px;
	color: rgb(0, 179, 164);
	
	
}
		.form_container{
			padding: 1.5vw 0vw;
			margin-top:10vw;
			backdrop-filter:blur(5px) brightness(130%);
			background-color:rgba(255,255,255,0);
			border:0px;
			box-shadow:0px 0px 5px 1px black;
		
		}
	</style>
</head>
<body>
	<div class="back_page_detailer">
	<div class="nav_bar">
			<div class="logo ex_logo">CURECL<span class="ai">AI</span>MS</div>
			<div class="nav_tabs">
				<div><a href="index.html" class="locators">Home </a></div>
				<div><a href="hopital_details.html" class="locators">Hospital Details</a></div>
				<div><a href="patient_details.html" class="locators">Send Mails</a></div>
			</div>
			<div class="sign_up"><a href="sign.html">Sign up</a></div>
		</div>
		<div class='form_container'>
			<form method='post' action='mailgit.php' enctype='multipart/form-data'>
              <div class='doctors_note'>
				<textarea placeholder="Enter Doctor's note" name='doctor_note'></textarea>
			  </div>
			  <div class='input_mail'>
				<div class='mails'>Email</div>
				<br>
				<div class='email_input'><input type='email' name='TPA_mail' placeholder='Enter The mail of TPA to send' class='inputs_details'/></div>
			  </div>
			  <div class='input_mail mail_of_hospital'>
				<div class='mails'>Email of Hospital(Currently not applicable)</div>
				<br>
				<div class='email_input'><input type='email' name='Hospital mail' placeholder='Enter The mail of your Hospital (NOTE:Currently the mail will be sent by other mail other than yours for testing purpose SO your mail account can be random)' class='inputs_details'/></div>
			  </div>
			  <div class='file_container'>
			  <div class='files'>
				<input type='file' name="attached_files_checked"/>
			  </div>
			  </div>
			  <div class='btn_container'>
				<div class='flexer'>
			 
			  <div class='submit_btn submx'>
				<div class='subm'>
				<input type='submit'  class='choose btns_sender' style="background-color:black ;color:white;padding:0.3vw 2vw" name="submit"/>
				</div>
			  </div>
			  </div>
			  </div>
			</form>
		</div>
	</div>

</body>
</html>

