<!DOCTYPE html>
<html>
<head>
	<title><?php $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-2">
			<?php if(isset($success)){ echo $success;} ?>
			<?php echo form_open('welcome/save') ?>
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" />
			<label for="address">Address:</label>
			<input type="text" id="address" name="address" />
			<label for="city">City:</label>
			<input type="text" id="city" name="city" />
			<label for="state">State:</label>
			<input type="text" id="state" name="state" />
			<label for="zip">ZIP:</label>
			<input type="text" id="zip" name="zip" />
			<input type="submit" name="submit" value="add">
		</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 offset-sm-2">
			<table border="1" cellpadding="5">
				<?php foreach($rows as $row){ echo '
					<tr>
						<td>'. $row->id.'</td>
						<td>'. $row->name.'</td>
						<td>'. $row->address.'</td>
						<td>'. $row->city.'</td>
						<td>'. $row->state.'</td>
						<td>'. $row->zip.'</td>
					</tr>
				'; } ?>
			</table>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>