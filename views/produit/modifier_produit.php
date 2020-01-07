<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modifier un Produit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Modifier un Produit</h1>
        
    </div>

<form method="post" action="produit_produit_edit_<?php echo $produits->id; ?>.html" enctype="multipart/form-data">

    <div class="md-form mt-3">
    
        
        <label for="nom">NOM : </label>
        <input type="text" value="<?php echo $produits->nom; ?>" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
        <label for="id_famille">FAMILLE : </label>
            
        <input type="text" value="<?php $fa=$cnx->query("select nom from famille where id='".$produits->id_famille."'")->fetch(PDO::FETCH_OBJ);
            echo $fa->nom; ?>" class="form-control" disabled>
        
    <div class="md-form mt-3">
          
        <label for="prix">PRIX : </label>
        <input type="number" value="<?php echo $produits->prix; ?>" class="form-control" step="0.001" min="0" name="prix" required id="prix">

    </div>
    <div class="md-form mt-3">
          
        <label for="tva">TVA : </label>
        <input type="number" value="<?php echo $produits->tva; ?>" class="form-control" name="tva" required id="tva">

    </div>
    <div class="md-form mt-3">
        <img src="img/<?php echo $produits->photo;?>" width="100">
        <input type="hidden" name="photo_old" value="<?php echo $produits->photo;?>">
        <label for="photo">PHOTO : </label>
        <input type="file" name="photo" >
    </div>
    
    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    </div>
  
</form>
</div>

</body>