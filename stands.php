<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stands de feria y Food Courts</title>
    


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
 
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   

    
</head>
<div id="zoom">
<body style="background-image: url('./assets/greyfondo.png'); width: 1920px; height: 100%;">
<?php

?>
   
     <div id="wrapper">
         
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="margin-right:-47px">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        guillermo<i style="font-size: 20px;">mack</i>durini
                    </a>
                </li>
                <li>
                    <a href="index.php">página principal</a>
                </li>
                <li>
                    <a href="mision.php">misión/visión</a>
                </li>
                <li>
                    <a href="contacto.php">contacto/cotización</a>
                </li>
                <li>
                    <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                    <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsepro">
                        proyectos
                    </a>
                    </div>
                    <div id="collapsepro" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <div style="border-top-style: solid; border-top-color: #999"><a href="casas.php">casas</a></div>
                        <a href="condominios.php">condominios</a>
                        <a href="tibas.php">edificios</a>
                        <a href="bodegas.php">bodegas</a>
                        <a href="remodelaciones.php">remodelaciones</a>
                        <a href="stands.php">stands de feria y food courts</a>
                    </div>
                    </div>
                    </div>  
                    </div>
                </li>
                
            </ul>
            <div style="bottom: 0; position: absolute; text-align: center; margin-bottom: 50px; margin-left: 30px; color: #999 ">
                Guillermo Mack Durini <br>
                Email: mackdurini@gmail.com <br>
                Tel: 8681-10-12
            </div>
        </div>
  
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div id="logo" style="margin-left: 175px; margin-top: 100px"><img id="fotologo" src="assets/logo.png" alt="Logo"/></div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                    
  

                           

                        <div style="margin-top:80px;"></div>
                        <h1 id="hportada" style="color: white; letter-spacing: 30px; font-size: 24px; margin-left: 65px">STANDS DE FERIA Y FOOD COURTS</h1>
                        <div id="fondoslide" style="background-image: url('./assets/fondoslide.jpg'); background-size: cover; position: relative; right:0; left: 0; width: 1920px; height: 280px; border: 2px solid; border-radius: 2px; z-index: 1001; box-shadow: 0 5px 15px 1px rgba(0, 0, 0, 0.6), 0 0 10px 1px rgba(255, 255, 255, 0.5);">
                        
                        <div id="slideshow" class="owl-carousel" style="margin-top:20px">
                           
                            <a href="assets/Fotos/stands1.jpg" data-lightbox="slide" data-title="Stand Casa Mackin"><div class="item"><img src="assets/thumbspro/stands1.png" alt="Stand Casa Mackin"/></div><div class="caption">Stand Casa Mackin</div></a>
                            <a href="assets/Fotos/stands2.jpg" data-lightbox="slide" data-title="Stand Casa Mackin"><div class="item"><img src="assets/thumbspro/stands2.png" alt="Stand Casa Mackin"/></div><div class="caption">Stand Casa Mackin</div></a>
                            <a href="assets/Fotos/stands3.jpg" data-lightbox="slide" data-title="Rest. Rincón Oriental"><div class="item"><img src="assets/thumbspro/stands3.png" alt="Rest. Rincón Oriental"/></div><div class="caption">Rest. Rincón Oriental</div></a>
                            <a href="assets/Fotos/stands4.jpg" data-lightbox="slide" data-title="Rest. Rincón Típico"><div class="item"><img src="assets/thumbspro/stands4.png" alt="Rest. Rincón Típico"/></div><div class="caption">Rest. Rincón Típico</div></a>
                            <a href="assets/Fotos/stands5.jpg" data-lightbox="slide" data-title="Rest. Rincón Típico"><div class="item"><img src="assets/thumbspro/stands5.png" alt="Rest. Rincón Típico"/></div><div class="caption">Rest. Rincón Típico</div></a>
                            
             
                                            
                                  
                       
                        </div>
                         
                       </div>
                       
   
                        
                </div>
            </div>
        </div> 
        <!-- /#page-content-wrapper -->

    </div>
</div>

    <!-- /#wrapper -->
     
  
    
    <!-- jQuery -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script> 
    <script src="lightbox/js/lightbox.min.js"></script>
      <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    </script>
    <script>
        $(document).ready(function() {
         var slide = $("#slideshow");
        slide.owlCarousel({
      items : 4,
      responsive: false
  });
        
});
</script>
<script>
$('#collapsepro').collapse('hidden');
</script>
<script>
    $(window).on('load rotate resize', function(){
    var current_width = $(window).width();
    if(current_width >= 1920){
    $("#zoom").css({    
    '-moz-transform': 'scale(1, 1)', 
    zoom: '100%' 
    });
    }
    
    else if(current_width > 1366 && current_width < 1920){
    $("#zoom").css({    
    '-moz-transform': 'scale(0.82, 0.82)',
    zoom: '82%'
    });
    }
   
    else if(current_width <= 1366 && current_width >= 1024){
    $("#zoom").css({    
    '-moz-transform': 'scale(0.69, 0.69)',
    zoom: '69%' 
    });
    }
    
  });
</script>
</body>

</html>
