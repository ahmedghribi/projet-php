<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modifier un Client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Modifier un Client</h1>
        
    </div>

<form method="post" action="index.php?controller=client&action=edit&id=<?php echo $clients->id; ?>">

    <div class="md-form mt-3">
            
        <label for="nom">NOM : </label>
        <input type="text" value="<?php echo $clients->nom; ?>" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="tel">TEL : </label>
        <input type="tel" value="<?php echo $clients->tel; ?>" class="form-control" name="tel" required id="tel">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="email">EMAIL : </label>
        <input type="email" value="<?php echo $clients->tel; ?>" class="form-control" name="tel" required id="tel">
    
    </div>

    <div class="md-form mt-3">
        <label for="email">EMAIL : </label>
        <input type="email" value="<?php echo $clients->email; ?>" class="form-control" name="email" required id="email">
        
    <div class="md-form mt-3">
          
        <label for="type">Type : </label>
        <input type="text" value="<?php $cl=$cnx->query("select nom from typeclient where id='".$produits->id_famille."'")->fetch(PDO::FETCH_OBJ);
            echo $fa->nom; ?>" class="form-control" disabled>" class="form-control" step="0.001" min="0" name="prix" required id="prix">

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