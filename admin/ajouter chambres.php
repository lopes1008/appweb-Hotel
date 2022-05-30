<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from rooms where room_no='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "cette chambre est déjà ajoutée";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into rooms values('','$rno','$type','$price','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/rooms/".$_FILES['img']['name']);
	echo "Chambres ajoutées avec succès";
	}
} 
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Numéro de la chambre</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Type de la chambre</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Prix</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Détails</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Ajouter détails chambre" name="add"/>
		</td>
	</tr>
</table> 
</form>