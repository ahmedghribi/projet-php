<h1>Liste des Produits</h1>

<form method="post" action="dashboard_dashboard_etat1.html">
<br>FAMILLE :
<select class="form-control" name="id_famille">
	<option value="">Choisir une famille </option>
    <?php foreach ($familles as $famille) {
    echo "<option value='".$famille->id."'>".$famille->nom."</option>";} ?>
</select>
<br>
<input type="submit" name="submit" value="recherche">
</form>

 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des inscrits</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<a href="pdf_dashboard_pdfetat1_<?php echo $famille;?>.html"><img src="images/pdf.png" width="40"></a>
<a href="excel_dashboard_exceletat1_<?php echo $famille;?>.html"><img src="images/excel.png" width="40"></a>

<?php
echo '<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr>
 </thead>
 <tbody>
 ';
foreach($result as $inscrit){

	echo "<tr>";
		echo "
			<td><img src='photos/".$inscrit->photo."' height='150'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>
			<td><a onclick=\"if(!confirm('etes vous sure de supprimer?')) return false;\" href='suppinscrit_inscrit_supp_".$inscrit->id.".html'>supp</a> <a href='modifinscrit_inscrit_edit1_".$inscrit->id."_".$inscrit->photo.".html'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>
