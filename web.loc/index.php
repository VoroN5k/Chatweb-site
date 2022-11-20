<!DOCTYPE html>
<html>
<head>
	<title>Chatweb</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<?php include'header.php';?>

	<div class="main-content">

		<div class="left-container">
			<div class="container-left-list">
				<a href="#" style="background-color: #04AA6D; color: white; margin-top: 5px;">Home</a>
				<a href="#">Main</a>	
				<a href="#">Help</a>
				<a href="#">About</a>
			</div>
		</div>

		<div class="chat-container">

			<div class="chat-messages">

				<div class="message">
					<p>Hello my dear dick</p>
				</div>
				<div class="message">
					<p>Hello my dear dick</p>
				</div>
				<div class="message">
					<p>Hello my dear dick</p>
				</div>
				<div class="message">
					<p>Hello my dear dick</p>
				</div>

			</div>

			<div class="input-bar">

				<textarea class="input-message"></textarea>
				<input type="image" src="send-icon.png" class="send-message" onclick="SendMessage()">

			</div>

		</div>

	</div>

	<div class="footer">
		
	</div>

	<script>
		function SendMessage() {
			let message = document.getElementsByClassName("input-message")[0].value;
			console.log(message);
			let chat_messages = document.getElementsByClassName("chat-messages");
			let div = document.createElement("div");
			div.setAttribute("class", "message");
			let p = document.createElement("p");
			p.innerHTML = message;
			div.appendChild(p);
			chat_messages[0].appendChild(div);
		}

		

	</script>
</body>
</html>
