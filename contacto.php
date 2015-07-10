<?php
    require('./PHPMail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    
    $mail->isSMTP();
    $mail->Host = 'mail.guillermomack.com';
    $mail->SMTPAuth = true;                               
    $mail->Username = 'contacto@guillermomack.com';                 
    $mail->Password = 'Cuar2425!';  
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465; 
    $mail->From = 'contacto@guillermomack.com';
    $mail->CharSet = 'UTF-8';
    
    /*$errName = "";
    $errEmail = "";
    $errMessage = "";
    $errHuman = "";
    $result = "";*/
   // mail($to, $subject, $body, $from) = FALSE;
            

    if(isset($_POST['name'])){ $name = $_POST['name'];}
    if(isset($_POST['email'])){$email = $_POST['email'];}
    if(isset($_POST['phone'])){$phone = $_POST['phone'];}
    if(isset($_POST['message'])){$message = $_POST['message'];}
    if(isset($_POST['human'])){$human = intval($_POST['human']);}
    $mail->isHTML(true);
    $mail->FromName = 'Página Web';
    $mail->addAddress('contacto@guillermomack.com');
    $mail->Subject = 'Mensaje de Página Web';
    $mail->Body = "De: " . $name . "<br> Teléfono: " . $phone . "<br> E-Mail: " . $email . "<br> Mensaje:<br>" . $message;


if (isset($_POST["submit"])) {
    

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Por favor digite su nombre';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Por favor digite una dirección de correo electrónico válida';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Por favor digite su mensaje';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 4) {
        $errHuman = 'Su respuesta anti-spam es incorrecta';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if ($mail->send()) {
            $result = '<div class="alert alert-success">Muchas gracias por su mensaje. Lo contactaremos lo antes posible.</div>';
        } else {
            $result = '<div class="alert alert-danger">Hubo un error enviando el mensaje. Por favor inténtelo de nuevo.<br>' . $mail->ErrorInfo . '</div>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contacto</title>



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


                        <div id="contacto">

                            <form role="form" method="post" action="contacto.php">

                                <label id="conlabel">Nombre</label>
                                <input name="name" id="coninput" placeholder="Nombre">
                                <?php echo "<p class='text-danger'>$errName</p>";?>

                                <label id="conlabel">Teléfono</label>
                                <input name="phone" id="coninput" type="tel" placeholder="Teléfono">

                                <label id="conlabel">Email</label>
                                <input name="email" id="coninput" type="email" placeholder="Email">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>

                                <label id="conlabel">Mensaje</label>
                                <textarea name="message" id="contextarea" placeholder="Mensaje"></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>

                                <label id="conlabel">*¿Qué es 2+2? (Anti-spam)</label>
                                <input id="coninput" name="human" placeholder="Respuesta">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>

                                <input id="submit" name="submit" type="submit" value="Enviar">
                                <?php echo $result; ?>	
                            </form>
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
    zoom: '82%', 
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
