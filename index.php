<?php 
  
  $currentPage = 'dashboard';

  include('views/inc/header.php'); 
?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include('views/inc/sidebar-nav.php');

            var_dump($_GET);
            // die();

            if ( isset($_GET) && isset($_GET['p']) && $_GET['p'] != ''){
              $path = $_GET['p'];
            }
            // die();

            switch ($path) {
              case 'generate-proposal':
                $currentPage = 'generate-proposal';
                include('views/generate-proposal.php');
                break;

              case 'generate-sow':
                $currentPage = 'generate-sow';
                include('views/generate-sow.php');
                break;
              
              default:
                # code...
                
                include('views/home.php');
                ?>
                <!-- Graphs -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                <script>
                  var ctx = document.getElementById("myChart");
                  var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                      datasets: [{
                        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                      }]
                    },
                    options: {
                      scales: {
                        yAxes: [{
                          ticks: {
                            beginAtZero: false
                          }
                        }]
                      },
                      legend: {
                        display: false,
                      }
                    }
                  });
                </script>
                <?php
                break;
            }
               

        include('views/inc/footer.php'); 
    