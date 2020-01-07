<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
<div class="container-fluid">
    <h1 class="display-4">Modifier un utilisateur</h1>
</div>
<form class="border border-light p-5" method="post" action="admin_admin_edit_<?php echo $admins->id; ?>.html">

    <div class="md-form mt-3">
    
         <label>Nom</label>
         <input type="text" class="form-control" name="nom" required id="Nom" value="<?php echo $admins->nom; ?>">
    
    </div>
    <div class="form-group">
    
        <label>Prénom</label> 
        <input type="text" class="form-control" name="prenom" required id="prenom" value="<?php echo $admins->prenom; ?>">
    
    </div>
    <div class="form-group">
    
        <label>login</label>
        <input type="text" class="form-control" name="login" required id="login" value="<?php echo $admins->login; ?>">
    
    </div>
    <div class="form-group">
    
        <label>password</label>
        <input type="password" class="form-control" step="0.001" min="0" name="password" required id="password" value="<?php echo $admins->password; ?>">
    
    </div>
    <?php 
   if ($admins->role==0)
   {
     $roles="admin";
   }
   else
   {
     $roles="serveur";
   }
    ?>  
    <div class="form-group">
    
    
        <input type="hidden" class="form-control" name="role" required id="role" value="<?php echo $roles; ?>">
    
    </div>
 
    <div class="form-group">
        <input class="btn btn-secondary" type="submit" value="Modifier">
    
    </div>
   
</form>
</table>
</body>