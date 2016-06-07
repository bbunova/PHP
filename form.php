<?php
	require_once("validator.php");
	$validator = new Validate();
	$validator->validate();
	$errArray = $validator->errors;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homework</title>
	<meta charset="utf-8"/>
</head>
<body>
	<br>
	<form method="post">

		<input type="text" name="title" value="Title"/>
		<?= $errArray['title'] ?><br>
		<textarea name="description" rows="4" cols="21">Description</textarea>
		<?= $errArray['description'] ?><br>
		<input type="text" name="lecturer-name" value="Lecturer's name"/>
		<?= $errArray['lecturer-name'] ?><br>
		<input type="radio" name="type" value="elective"><label for="elective">Elective</label>
		<input type="radio" name="type" value="mandatory"><label for="mandatory">Mandatory</label>
		<?= $errArray['type'] ?><br>
		<select name="course" multiple>
			<option value="First">First</option>
			<option value="Second">Second</option>
			<option value="Third">Third</option>
			<option value="Fourth">Fourth</option>
			<option value="For all">For all</option>
		</select>
		<?= $errArray['course'] ?><br>
		<input type="checkbox" name="program" value="bachelor" />
		<label for="program">Bachelor</label>
		<input type="checkbox" name="program" value="master" />
		<label for="program">Master</label>
		<?= $errArray['program'] ?><br><br>

		<input type="file" name="addmatherials" enctype="multipart/form-data" accept=".zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" /><br>
		<input type="text" name="lecturer-email" />
		<?= $errArray['lecturer-email'] ?><br>
		<input type="hidden" name="submit" value="Beatris Bunova" /><br>
		<button name="send">Send</button>
	</form>


</body>
</html>