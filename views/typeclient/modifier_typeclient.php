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
        <h1 class="display-4">Modifier TYPE Client</h1>
        
    </div>

<form method="post" action="typeclient_typeclient_edit_<?php echo $typeclients->id; ?>.html">

    <div class="md-form mt-3">
            
        <label for="nom">NOM : </label>
        <input type="text" value="<?php echo $typeclients->nom; ?>" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="description">DESIGNATION : </label>
        <input type="text" value="<?php echo $typeclients->description; ?>" class="form-control" name="description" required id="description">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="remise">REMISE : </label>
        <input type="number" value="<?php echo $typeclients->remise; ?>" class="form-control" name="remise" required id="remise">
    
    </div>
    
    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    </div>
  
</form>
</div>

</body>