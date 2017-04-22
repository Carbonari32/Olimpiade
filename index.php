<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
		<style>
			#chatbox{
				width: 800px;
				min-height: 150px;
				background-color: #ddd;
			}
			.redColor{
				color: red;
			}
			.greenColor{
				color: green;
			}
			.blueColor{
				color: blue;
			}
			.author{
				font-weight: bold;
			}
		</style>
		<script type="text/javascript" src="scripts/myscript.js"></script>
	</head>
	<body onload="autoUpdate();">
	Ваше никнейм: <input type="text" id="author" name="">
	<select id="color" class="redColor" onchange="colorChanged();">
		<option value="1" selected class="redColor">■</option>
		<option value="2" class="greenColor">■</option>
		<option value="3" class="blueColor">■</option>
	</select><br>
	<form onsubmit="return false;">
		Ваше сообщение: <input type="text" id="msg" name=""><br>
		<input type="button" id="send" value="Отправить" onclick="sendMsg();" name="">
		<input type="submit" onclick="sendMsg();" name="" hidden>
	</form>
	<div id="chatbox">
	</div>
	<body>
<html>