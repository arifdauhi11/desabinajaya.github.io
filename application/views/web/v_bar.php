<html>
  <head>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["JenKel", "Jumlah", { role: "style" } ],
        ["Laki - Laki", 5, "#217EE9"],
        ["Perempuan", 6, "#FF00FF"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Data Jenis Kelamin",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
  </head>
  <body>
    <div id="barchart_values"></div>
  </body>
</html>