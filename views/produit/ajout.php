<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un Produit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Ajouter un Produit</h1>
        
    </div>

<form class="border border-light p-5" method="post" action="produit_produit_add.html" enctype="multipart/form-data">

    <div class="md-form mt-3">
    
        
        <label for="nom">NOM : </label>
        <input type="text" placeholder="" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
        <label for="id_famille">FAMILLE : </label>
        
        <select class="form-control" name="id_famille">
		    <option value="">Choisir une famille </option>
            <?php foreach ($familles as $famille) {
                echo "<option value='".$famille->id."'>".$famille->nom."</option>";} ?>
        </select>
                
            
    <div class="md-form mt-3">
          
    <label for="prix">PRIX : </label>
    <input type="number" placeholder="" class="form-control" step="0.001" min="0" name="prix" required id="prix">

    </div>
    <div class="md-form mt-3">
          
    <label for="tva">TVA : </label>
    <input type="number" placeholder="" class="form-control" name="tva" required id="tva">

    </div>
    <div class="md-form mt-3">
          
    <label for="photo">PHOTO : </label>
    <input type="file" name="photo" required>

    </div>
    
    
    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    
    </div>
</div>
   
</form>
</div>

</body>