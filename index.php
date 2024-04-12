  <head>
    <meta charset="UTF-8">
    <title>Carta de Sushi</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3bc5094caf.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/logo.png">
  </head>
  <body>
    <div class="row">
    <header>
      <img src="img/logo.png" alt="">
    </header>
    <hr id="hr_footer">  
    <?php
      $menu = simplexml_load_file('xml/menu.xml');
      foreach ($menu->categoria as $categoria) {
          echo '<div class="categoria">';
          echo '<h2 class="categoria-title">' . $categoria['nombre'] . '</h2>';   
          foreach ($categoria->plato as $plato) {
              echo '<div class="plato">';
              echo '<div class="plato-nombre">' . '<p>' . $plato->nombre .'</p>' . '</div>'; 
              echo '<div class="plato-descripcion">' . '<p>' . $plato->descripcion . '</p>' . '</div>';
              echo '<div class="plato-calorias">' . '<p>' . $plato->calorias . '</p>' . '</div>'; 
              echo '<div class="plato-icones">'; 
              if(isset($plato->caracteristicas->item['Categoria1']) && $plato->caracteristicas->item['Categoria1'] == 'picante'){
                echo '<i class="fa-solid fa-pepper-hot"></i>';
              }
              if(isset($plato->caracteristicas->item['Categoria2']) && $plato->caracteristicas->item['Categoria2'] == 'pescado'){
                  echo '<i class="fas fa-fish"></i>' . ' ';
              }
              if(isset($plato->caracteristicas->item['Categoria3']) && $plato->caracteristicas->item['Categoria3'] == 'alcohol'){
                  echo '<i class="fa-solid fa-beer-mug-empty"></i>';
              }
              if(isset($plato->caracteristicas->item['Categoria4']) && $plato->caracteristicas->item['Categoria4'] == 'vegano'){
                  echo '<i class="fa-solid fa-seedling"></i>';
              }
              echo '</div>'; 
              echo '<div class="plato-precio">' . '<p>' . $plato->precio . '</p>' . '</div>';
              echo '</div>'; 
              echo '<hr>'; 
          }
          echo '</div>'; 
      }
    ?>
    <hr id="hr_footer">  
    </div>
    <footer>
      <h2>INFORMACION ALIMENTICIA</h2> 
      <div class="row">
        <p>Contiene alcohol | <i class="fa-solid fa-beer-mug-empty"></i></p>          
        <p>Contiene picante | <i class="fa-solid fa-pepper-hot"></i></p>          
        <p>Contiene pescado | <i class="fas fa-fish"></i></p>   
        <p>Comida vegana | <i class="fa-solid fa-seedling"></i>   </p>  
      </div>

    </footer>
  </body>
