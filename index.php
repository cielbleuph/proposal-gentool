<?php 
  $currentPage = 'dashboard';
  include __DIR__ . "/inc/prepend.php";
  include VIEWS_DIR . "inc/header.php"; 

  
  if ( isset($_GET) && isset($_GET['p']) && $_GET['p'] != ''){
    $path = $_GET['p'];
  }
  else{
    $path = '/';
  }
  
  switch ($path) {
    case 'generate-proposal':
      $currentPage = 'generate-proposal';
      $titlePage = "Generate Proposal";
      include('views/generate-proposal.php');
      break;

    case 'generate-sow':
      $currentPage = 'generate-sow';
      $titlePage = "Generate Statement of Works";
      include('views/generate-sow.php');
      break;
    
    case 'generate-reports':
      $currentPage = 'generate-reports';
      $titlePage = "Generate Reports";
      include('views/generate-reports.php');
      break;
    
    default:
      # code...
      include('views/home.php'); ?>
      
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