<?php

// Connessione al database MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'learntest';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM corso ORDER BY chapter, sub_id";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $currentChapter = 0;
        while($row = $result->fetch_assoc()) {
            if($currentChapter != $row['chapter']) {
                if($currentChapter != 0) {
                    echo '</div><!-- sub-menu -->';
                    echo '</div><!-- item -->';
                }
                $currentChapter = $row['chapter'];
                echo '<div class="item">';
                echo '<a class="sub-btn">'. $row['title_link']. ' ' . $currentChapter . '</a>';
                echo '<div class="sub-menu">';
            }
            echo '<a href="#" id="sub-0'. $row['sub_id'] .'" class="sub-item">' . $row['title_link'] .'</a>';
        }
        echo '</div><!-- sub-menu -->';
        echo '</div><!-- item -->';
    }
}

$conn->close();
exit;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aprende el trading intradia con el Order flow</title>
   <link rel="stylesheet" href="style.css">
   <style media="screen">
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
   
  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '914910651900491');
  fbq('track', 'PageView');
  fbq('track', 'Purchase', {value: 29.00, currency: 'USD'});
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=914910651900491&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y99MEFMMTC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y99MEFMMTC');
  </script>
 
  </head>
 <body>

   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>


   <div class="side-bar">

     <header>

     <div class="close-btn">

       <i class="fas fa-times"></i>
     </div>
     <img src="https://lh3.googleusercontent.com/a-/AOh14Gj99VObFyE8W_h8RrcwZO_aYiIHu5AAa_XpnOym=s600-k-no-rp-mo" alt="">
          <h3 style="margin-left:20px;"><?php echo $ciao; ?></h3>
        </header>
     <div class="menu">
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>1. Introducción<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-01" class="sub-item">Introducción</a>
           <a href="#" id="sub-011" class="sub-item">Introducción al curso</a>
         </div>
       </div>
       <div class="item">
        <a class="sub-btn"><i class="fas fa-cogs"></i>2. DOM y el algoritmo del cruce de ordenes<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="#" id="sub-02" class="sub-item">DOM y el algoritmo del cruce de ordenes</a>
        </div>
      </div>
      <div class="item">
        <a class="sub-btn"><i class="fas fa-cogs"></i>3. Cinta de ordenes<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="#" id="sub-03" class="sub-item">Time and sales</a>
        </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>4. Lectura de velas cluster y imbalance<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-04" class="sub-item">Como leer las velas cluster y el imbalance</a>
           <a href="#" id="sub-05" class="sub-item">Volume Delta</a>
         </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>5. Definir el contexcto del mercado<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-06" class="sub-item">Definir el contexcto</a>
         </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>6. Trazado de zona operativas<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-07" class="sub-item">Como trazar las zonas operativas</a>
           <a href="#" id="sub-071" class="sub-item">Zonas de actuación y entradas</a>
         </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>7. Horario operativo con mayores oportunidades<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-08" class="sub-item">Horario operativo</a>
         </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>8. Gestión del riesgo y Gestión emociónal<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" id="sub-09" class="sub-item">Como gestionar el riesgo y las emociones</a>
         </div>
      </div>
       <div class="item"><a href="logout.php"><i class="fas fa-th"></i>Desconectar</a></div>
     </div>
   </div>
   <section class="main">
  
    <!-- Iframe section -->
    <div class="video">
      <iframe id="video" class="responsive-iframe" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen width="1030" height="600"
          src="">
      </iframe>
      <!-- <video id="video" width="1030" height="600" controls>
        <source src="" type="video/mp4">
      </video> -->
    </div>

    <!-- Comments section -->
    <div class="comments-section">
      <h3>Comments</h3>
        <div class="comments-title"></div>
        <div class="single-comment">
          <div class="avatar"></div>
          <div class="name"></div>
          <div class="published-date"></div>
          <div class="comment"></div>
        </div>
    </div>
    
   </section>

   <script type="text/javascript">
   $(document).ready(function(){

    var link = '788411656';
    $('#video').attr('src', 'https://player.vimeo.com/video/' + link);

     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });

     $('#sub-01').click(function(){
        var link = '788406120';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-011').click(function(){
        var link = '788406386';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-02').click(function(){
        var link = '788406442';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-03').click(function(){
        var link = '788406576';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-04').click(function(){
        var link = '788407095';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-05').click(function(){
        var link = '788407050';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-06').click(function(){
        var link = '788407775';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-07').click(function(){
        var link = '788408083';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-071').click(function(){
        var link = '788409269';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-08').click(function(){
        var link = '788411296';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });

     $('#sub-09').click(function(){
        var link = '788411541';
        $('#video').attr('src', 'https://player.vimeo.com/video/' + link);
     });
        
    });
   </script>


 </body>
</html>