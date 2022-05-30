<script>
	function delRoom(id)
	{
		if(confirm("Vous souhaitez supprimer cette chambre ?!"))
		{
		window.location.href='supprimer chambres.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Détails chambres</h1><hr>
	<tr>
	<td colspan="8"><a href="tableau de bord.php?option=add_rooms" class="btn btn-primary">Ajouter nouvelle chambre</a></td>
	</tr>
	<tr style="height:40">
		<th>Numéro</th>
		<th>Image</th>
		<th>Chambre numéro</th>
		<th>Type</th>
		<th>Prix</th>
		<th>Détails</th>
		<th>Modifier</th>
		<th>Supprimer</th>
	</tr>
<?php 
$i=1;
$con=mysqli_connect("localhost","root","","hotel") or die('La connexion à la base de données a échoué');
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
$img=$res['image'];
$path="../image/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="tableau de bord.php?option=update_room&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
</table>