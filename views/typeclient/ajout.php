<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un Type Client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Ajouter un Client</h1>
        
    </div>

<form class="border border-light p-5" method="post" action="typeclient_typeclientadd.html">

    <div class="md-form mt-3">
            
        <label for="nom">TYPE : </label>
        <input type="text" placeholder="libelle du type" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="nom">DESIGNATION : </label>
        <input type="text" placeholder="Description du Type" class="form-control" name="description" required id="description">
    
    </div>
    <div class="md-form mt-3">
            
        <label for="nom">REMISE : </label>
        <input type="NUMBER" placeholder="Pourcentage de remise accordé à ce type de client" class="form-control" name="remise" required id="remise">
    
    </div>      

    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    
    </div>
</div>
   
</form>
</div>

</body>