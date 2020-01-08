<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(6, 1fr);


      padding: 2px;
      grid-auto-rows: 300px;
      grid-column-gap: 1px;
      grid-row-gap: 1px;



    }

    .butt {
      align-content: center;
      justify-content: space-between;
    }

    .nested1 {

      justify-content: start;
    }

    .nested2 {

      justify-content: end;
    }



    .phot {
      grid-auto-rows: 100px;
      justify-content: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-3">TICKET</div>
      <div class="col-9">
        <div class="heure">
          <div id="div_horloge">

            <script type="text/javascript">
              window.onload = function() {
                horloge('div_horloge');
              };

              function horloge(el) {
                if (typeof el == "string") {
                  el = document.getElementById(el);
                }

                function actualiser() {
                  var date = new Date();
                  var str = date.getHours();
                  str += ':' + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
                  str += ':' + (date.getSeconds() < 10 ? '0' : '') + date.getSeconds();
                  el.innerHTML = str;
                }
                actualiser();
                setInterval(actualiser, 1000);
              }
            </script>
          </div>
        </div>
        <div class="famille">Liste des Familles</div>
        <div class="produits">Liste des Produits</div>
            <!-- /.card-header -->
            <div class="card-body">

              <!-- <div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
    <th>Photo</th>
    <th>Nom</th>
    <th>id_famille</th>
    <th>Prix</th>
    <th>TVA</th>
    <th colspan="2">Action</th>
</tr>
</thead>
-->
              <?php
              echo '<div class="grid-container">';
              foreach ($produits as $resultat) {
                echo '<div class="wrap1">';
                echo '<div class="phot item"><img src="img/' . $resultat->photo . '" height="100"></div>';
                echo '<div class="item"> Nom :' . $resultat->nom . '</div>';
                echo '<div class="item"> Famille : ' . $resultat->id_famille . '</div>';
                echo '
        <div class="nested1 item"> Prix : ' . $resultat->prix . ' Dt </div>
        <div class="nested2 item"> TVA : ' . $resultat->tva . '</div>';

                echo '<div class="butt item">
  <a onclick="window.location.href=\'produit_produit_edit1_' . $resultat->id . '.html\'"><img src="images\icons\edit.png" width="30"></a>
  <a onclick="window.location.href=\'produit_produit_supp_' . $resultat->id . '.html\'"><img src="images\icons\del.png" width="30"></a>
  </div></div>';

                /*
    echo '<tr>';
    echo '<td><img src="img/'.$resultat->photo.'" width="100"></td>';
    echo '<td>'.$resultat->nom.'</td>';
    echo '<td>'.$resultat->id_famille.'</td>';
    echo '<td>'.$resultat->prix.'</td>';
    echo '<td>'.$resultat->tva.'</td>';
     
    echo '<td>';
    echo '<input type="button" class="edit_btn" onclick="window.location.href=\'index.php?controller=produit&action=edit1&id='.$resultat->id.'\'" value="Edit">';
    echo '</td> ';
    echo '<td>';
    echo '<input type="button" class="del_btn" onclick="window.location.href=\'index.php?controller=produit&action=supp&id='.$resultat->id.'\'" value="Supprimer">';
    echo '</td>';
    echo '</tr>'; 
  */
              }

              ?>
            </div>

            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
  </div>
</body>