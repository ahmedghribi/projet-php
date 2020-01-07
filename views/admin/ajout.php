<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un Administateur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div  class="form-style-5">
    <div>
        <h1 class="display-4">Ajouter un Administateur</h1>
        <h2 style="color:red;">NB: **SUDO**</h2>
    </div>

<form class="border border-light p-5" method="post" action="admin_admin_add.html">

    <div class="md-form mt-3">
    
        
        <label for="nom">NOM : </label>
        <input type="text" placeholder="" class="form-control" name="nom" required id="nom">
    
    </div>
    <div class="form-group">
    
        <label for="">PRENOM : </label> 
        <input type="text" placeholder="" class="form-control" name="prenom" required id="prenom">
    
    </div>
    <div class="form-group">
    
        <label for="LOGIN">LOGIN : </label>
        <input type="text" placeholder="" class="form-control" name="login" required id="login">
    
    </div>
    <div class="form-group">
    
        <label for="password">Password : </label>
        <input type="password" placeholder="" class="form-control" name="password" required id="password">
    
    </div>
    <div class="form-group">
        <input type="hidden" placeholder="" class="form-control" name="role" id="role" value="0" >
    </div>
    <div class="btn btn-primary">
        <input class="btn btn-primary" type="submit" value="ajouter ">
    
    </div>
</div>
   
</form>
</div>

</body>