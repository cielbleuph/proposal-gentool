<?php include('views/inc/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include('views/inc/sidebar-nav.php'); ?>

        <?php

            // $url= $_SERVER['REQUEST_URI']; 

            // var_dump($url); 
            // die();

            // $positionslash= strrpos($url, "/");

            // $filename= substr($url, $positionslash + 1);
  
            // echo '<br /><br /><br />'.$filename;
            
            // if($filename === 'index.php') {
            //   include('views/home.php');
            // }

            var_dump($_GET);
            // die();

            if ( isset($_GET) && isset($_GET['p']) && $_GET['p'] != ''){
              $path = $_GET['p'];
            }
            // die();

            switch ($path) {
              case 'proposal-tool':
                include('views/proposal-tool.php');
                break;

              case 'generate-sow':
                include('views/generate-sow.php');
                break;
              
              default:
                # code...
                // include('views/proposal-tool.php');
                include('views/home.php');
                break;
            }
            

        ?>

    <?php include('views/inc/footer.php'); 
    