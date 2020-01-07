<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
<div class="container-fluid">
    
    <h1 class="display-4">liste des Familles</h1>
    
</div>

<div class="card">
           
            <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>Nom</th>
    <th>Désignation</th>
    <th colspan="2" id="noprint" >Action</th>
</tr>
</thead>
<tbody>
<?php

foreach ($familles as $resultat) {
  
  
    echo '<tr>';
    
    echo '<td>'.$resultat->nom.'</td>';
    echo '<td>'.$resultat->designation.'</td>';
       
    echo '<td>';
    echo '<input type="button" id="noprint2" class="btn btn-outline-info" onclick="window.location.href=\'famille_famille_edit1_'.$resultat->id.'.html\'" value="Edit">';
    echo '</td> ';
    echo '<td>';
    echo '<input type="button" id="noprint3" class="btn btn-outline-danger" onclick="window.location.href=\'famille_famille_supp_'.$resultat->id.'.html\'" value="Supprimer">';
    echo '</td>';
    echo '</tr>';
}

?>
</tbody>
<tfoot>
<tr>
    <th>Nom</th>
    <th>Désignation</th>
    <th colspan="2" id="noprint" >Action</th>
</tr>
 </tfoot>

</table>
</div></div>
</div>



<!--div class="container">
  
  <input type="button" class="btn btn-info .col-sm-4" value="Imprimer->Texte" id="noprint4" onclick=window.location.href='index.php?controller=traite&action=totexte-tr'>
  <input type="button" class="btn btn-secondary .col-sm-4" value="imprimer ce bordereau" id="noprint5" onClick="window.print();">
</div-->

</body>
