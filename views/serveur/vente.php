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
        <div class="famille">
          <div class="col-12">
            <h1>Liste des Familles</h1>
            <?php
            foreach ($familles as $row) {
            ?>

              <label><input type="checkbox" class="common_selector nom" value="<?php echo $row->nom; ?>"> <?php echo $row->nom; ?></label>

            <?php
            }

            ?>
          </div>
          <hr>
          <?php  ?>
        </div>
        <div class="produits"> <h2  style="text-align: center"> Liste des Produits </h2></div>
        <div class="row filter_data">

        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  </div>
  </div>
  </div>
</body>
<style>
#loading
{
	text-align:center; 
	background: url('img/loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data(); 

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        
        var nom = get_filter('nom');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, nom:nom},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }


    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

 

});
</script>