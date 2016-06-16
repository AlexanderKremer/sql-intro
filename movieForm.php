<?php 

if(isset($_GET['id'])) {
	$verb = "Edit";
	$action = "./?page=edit&amp;id=";
} else {
	$verb = "Add";
	$action = "./?page=add";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Movie Create Form</title>
</head>
<body>
	<h1><?=$verb;?> Movie</h1>
	<form method="post" action="<?=$action?>">

		<input type="hidden" name="id" value="<?=$singlemovie['id']?>">

		<div>
			<label>Title</label>
			<input type="text" name="title" value="<?=$singlemovie['id']?>">
		</div>
		<div>
			<label>Description</label>
			<textarea name="description"><?=$singlemovie['description']?></textarea>
		</div>
		<div>
			<label>Rating</label>
			<select name="rating">
				<option value="G">G</option>
				<option value="PG">PG</option>
				<option value="M">M</option>
				<option value="R">R</option>
			</select>
		</div>
		<div>
			<label>Year Released</label>
			<input type="year" name="release_date" value="<?=$singlemovie['release_date']?>">
		</div>
		<div>
			<label>Duration</label>
			<input type="number" name="duration" value="<?=$singlemovie['duration']?>">
		</div>
		<button type="submit">Submit</button>
	</form>


</body>
</html>