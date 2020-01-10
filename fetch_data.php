
<?php
include('includes/connexion.php');


if (isset($_POST["action"])) 
{
	$query = "SELECT * FROM produit ";
	if (isset($_POST["nom"]))
	{
		$nom_filter = implode("','", $_POST["nom"]);
	
		$query .= "WHERE id_famille IN (SELECT id from famille WHERE nom IN('".$nom_filter."') )";
		
	}
	
	$statement = $cnx->prepare($query);
	 
	$statement->execute();
	$result = $statement->fetchAll();
	$total = $statement->rowCount();
	$output = '';
	

    if ($total > 0) {
   
echo '

<table id="data">
<div class="container">
<div class="row justify-content-center">
';
		foreach ($result as $row) {
           ?>
            <a href="#" onClick="show('<?php echo $row['nom']?>','<?php echo $row['photo']?>')" >
            <?php
            echo '	
			<div class="col-6 col-md-4 col-lg-3 mb-4   ">
                <div class="card" style="width: 11rem;">
                    <img src="img/' . $row['photo'] . '" class="card-img-top" style="height: 150px; width:180px;">
                        <div class="card-body" style="font-family: cursive;text-align: center;">
                        	<div class="card-title" style="height: 70px;" >' . $row['nom'] . '</div>
							<p class="card-text" >' . $row['prix'] . ' TND</p></div>
                </div>
			</div>
			</a>
	
			';
        }
        

    } else { 
        echo ' 
		 <p>Aucun produit touvée</p>';
    } echo ' </div> </div> </table>

    
    ';
}
?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
				<h1 style="text-align:center" class="modal-title" id="nom"></h1>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8" id="desc" style="word-wrap: break-word;">
                          
                        </div>
                        <div class="col-md-4"><img src="" id="photo" width="200" height="200"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
        </div>
    </div>
</div>


<script>
function show($nom,$photo)
{ 
	$('#myModal').modal('show');
	$("#nom").html($nom);
	$("#photo").attr("src",'img/'+$photo);
	
   
    
}</script>

