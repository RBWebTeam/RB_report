<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
           
    var arrayv=Array(['month', 'Disbursed', 'Login', 'Sanctioned']);
    
    var ar = <?php echo json_encode($query); ?>;
          
    var t = ar.length/3;

    for(var i = 0; i < t;i++)
    {
      var j = i * 3;
      var vas=[ar[j].Month,ar[j].leadcount, ar[j+1].leadcount, ar[j+2].leadcount];
      arrayv.push(vas);
    }
   function drawChart() {
        var data = google.visualization.arrayToDataTable(arrayv);
        var options = {
          chart: {
            title: 'Lead Report 2017-2018',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>  
    <div id="columnchart_material" style="width: 800px; height: 500px; border: 1px solid #000;  margin-right: 60vw"></div>

  </body>
</html>

