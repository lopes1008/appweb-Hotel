<table class="table table-bordered table-striped table-hover">
	<h1 >Détails résérvation du client</h1><hr>
	<tr>
		<th>Numéro</th>
		<th>Nom</th>
		<th>Email</th>
		<th>Numéro téléphone</th>
		<th>Addresse</th>
		<th>État</th>
		<th>Zip</th>
		<th>Contry</th>
		<th>Type de la chambre</th>
		<th>Vérifier la date d'entrée</th>
		<th>Verifier le temps de sortie</th>
		<th>Vérifier la date de sortie</th>
		<th>Occupation</th>
	</tr>

<?php 
$i=1;
$con=mysqli_connect("localhost","root","","hotel") or die('La connexion à la base de données a échoué');
$sql=mysqli_query($con,"select * from customer");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['state']; ?></td>
		<td><?php echo $res['zip']; ?></td>
		<td><?php echo $res['contry']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
	</td>
	</tr>
<?php 	
}
?>	
</table>