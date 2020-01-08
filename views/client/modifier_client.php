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
        <input type="email" value="<?php echo $clients->email; ?>" class="form-control" name="email" required id="email">
        
    <div class="md-form mt-3">
          
        <label for="type">Type : </label>
        <input type="text" value="<?php $fa=$cnx->query("select nom from typeclient where id='".$clients->type."'")->fetch(PDO::FETCH_OBJ);
            echo $fa->nom; ?>" class="form-control" disabled>
    </div>
        
    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    </div>
  
</form>
</div>

</body>