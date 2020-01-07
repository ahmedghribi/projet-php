<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<body>
<div align="center" class="container">
    <h1 class="display-4">Détail</h1>
    

<div>  
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
        nom : <?php echo $admins->nom; ?>
    </div>
    <div class="form-group">
        prénom : <?php echo $admins->prenom; ?>
    </div>
    <div class="form-group">
    User : <?php echo $admins->login; ?>
    </div>
    <div class="form-group">
    Role : <?php echo $roles;?>
    </div>
  
</div>

</div>
</body>
