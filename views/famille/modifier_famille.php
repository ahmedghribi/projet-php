<h1>Modifier Famille</h1>

<form method="post" action="famille_famille_edit_<?php echo $familles->id; ?>.html">

<br>nom : <input type="text" name="nom" value="<?php echo $familles->nom;?>" required>

<br>Désignation : <input type="text" name="designation" value="<?php echo $familles->designation;?>" required>

<input type="hidden" name="id" value="<?php echo $familles->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>