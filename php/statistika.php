<?php
  $con = mysqli_connect("localhost","root","","login");
  if($con){
    echo ".
    ";
  }
?>
<html>
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT marka, count(*) broj_iznajmljivanja FROM ugovori group by marka";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['marka']."',".$result['broj_iznajmljivanja']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Marke automobila sa procentom iznajmljivanja'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      


    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT monthname(datum_iznajmljivanja) as mesec, count(*) broj_iznajmljivanja FROM ugovori GROUP by mesec";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['mesec']."',".$result['broj_iznajmljivanja']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Poslovanje firme je najvise izrazeno u mjesecima:'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
      


    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart12);

      function drawChart12() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT extract(year from datum_iznajmljivanja) as godina, sum(iznos_racuna) suma FROM ugovori GROUP by godina";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['godina']."',".$result['suma']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Ukupna zarada firme po godinama'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart12'));

        chart.draw(data, options);
      }
      


    </script>
    <link rel="stylesheet" type="text/css" href="statistika12.css">
  </head>
  <body style="display: ;
     justify-content: ;
     background-color: #ecf0f1">
<div style="display:flex;justify-content: center;background-color: #ecf0f1">
    <div id="piechart" style="width: 800px; height: 500px;font-size: 18pt;"></div>
    <div id="piechart12" style="width: 800px; height: 500px;font-size: 18pt;"></div>
    <div id="piechart1" style="width:780px; height:500px;font-size: 18pt;float: right;"></div>
  
    
</div>
<div style="display:flex;justify-content: center;background-color: #ecf0f1">
    

  
    
</div>

  </body>
</html>