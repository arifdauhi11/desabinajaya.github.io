<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="css/<?php echo base_url();?>assets/custom.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Agama', 'Jumlah'],
          ['Islam', 6],
          ['Kristen', 2],
          ['Hindu', 1],
          ['Protestan', 1],
          ['Katolik', 1]
        ]);

        var options = {
          title: 'Data Agama'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart"  width= "900px;" height= "500px;"></div>
  </body>
</html>