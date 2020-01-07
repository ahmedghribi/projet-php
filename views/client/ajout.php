<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un Client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Ajouter un Client</h1>
        
    </div>

<form class="border border-light p-5" method="post" action="client_client_add.html">

    <div class="md-form mt-3">
            
        <label for="nom">NOM : </label>
        <input type="text" placeholder="Nom et Prénom du Client" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
        <label for="type">Type du Client : </label>
        <select class="form-control" name="type">
		    <option value="" selected>Choisir un Type </option>
            <?php foreach ($typeclients as $typecl) {
                echo "<option value='".$typecl->id."'>".$typecl->nom."</option>";} ?>
            
        </select>
    </div>
        <div class="md-form mt-3">
            
        <label for="nom">TEL : </label>
        <input type="telephone" placeholder="Téléphone du Client" class="form-control" name="tel" required id="tel">
    
    </div>      

    <div class="md-form mt-3">
            
        <label for="email">Email : </label>
        <input type="email" placeholder="Email du Client" class="form-control" name="email" required id="email">
    
    </div>

    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    
    </div>
</div>
   
</form>
</div>

</body>