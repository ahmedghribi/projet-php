<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
<div class="container-fluid">
    
    <h1 class="display-4">liste des Clients</h1>
    
</div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
    <th>Nom</th>
    <th>Type</th>
    <th>Tel</th>
    <th>Email</th>
    <th>Remise</th>
    <th colspan="2" id="noprint" >Action</th>
</tr>
</thead>

<?php

foreach ($clients as $resultat) {
  
  
    echo '<tr>';
    
    echo '<td>'.$resultat->nom.'</td>';
    echo '<td>'.$resultat->tel.'</td>';
    echo '<td>'.$resultat->email.'</td>';
    echo '<td>'.$resultat->type.'</td>';
    echo '<td>'.$resultat->remise.'</td>';
    echo '<td>';
    echo '<input type="button" id="noprint2" class="btn btn-outline-info" onclick="window.location.href=\'client_client_edit1_'.$resultat->id.'.html\'" value="Edit">';
    echo '</td> ';
    echo '<td>';
    echo '<input type="button" id="noprint3" class="btn btn-outline-danger" onclick="window.location.href=\'client_client_supp_'.$resultat->id.'.html\'" value="Supprimer">';
    echo '</td>';
    echo '</tr>';
}

?>

</table>

</div>



<!--div class="container">
  
  <input type="button" class="btn btn-info .col-sm-4" value="Imprimer->Texte" id="noprint4" onclick=window.location.href='index.php?controller=traite&action=totexte-tr'>
  <input type="button" class="btn btn-secondary .col-sm-4" value="imprimer ce bordereau" id="noprint5" onClick="window.print();">
</div-->

</body>
