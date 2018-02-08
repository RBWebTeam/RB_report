<html>
  <head>
    <title> DashBoard Piechart</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(piechart4);
      
      google.charts.setOnLoadCallback(piechart1);
      google.charts.setOnLoadCallback(piechart2); 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function piechart4() {
                        // body...
                        x="";        
                        var arr=new Array(['bank_id','percentage']);
                        x+='0';
                       

                         @foreach($bank as $value)
                                arr.push(['{{$value->bank_id}}',{{$value->Count}}]);
                        @endforeach


                        var data = google.visualization.arrayToDataTable(arr);                        

                        var option ={

                                 title: 'Bank Wise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
                        
                        chart.draw(data, option);

                                
                }



                 function piechart1() {
                        // body...
                        x="";        
                        var arr=new Array(['city_id','percentage']);
                        x+='0';
                        //var status;
                      
                        @foreach($city as $value)
                                arr.push(['{{$value->city_id}}',{{$value->CityCount}}]);
                        @endforeach

                        var data = google.visualization.arrayToDataTable(arr);                        

                        var option ={

                                 title: 'CityWise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                        
                        chart.draw(data, option);
                                
                }     



                function piechart2() {
                        // body...
                        x="";        
                        var arr=new Array(['Emp_Name','percentage']);
                        x+='0';
                        //var status;
                      
                        @foreach($team as $value)
                                arr.push(['{{$value->Emp_Name}}',{{$value->count}}]);
                        @endforeach

                        var data = google.visualization.arrayToDataTable(arr);                        

                        var option ={

                                 title: 'TeamWise  Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                        
                        chart.draw(data, option);
                                
                }     



    var arrayv=Array(['month', 'Disbursed', 'Login', 'Sanctioned']);
    var ar = <?php echo json_encode($chart_data); ?>;
          
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
    });
    </script>

    


  </head>
  <body>
  <div class="container">
    <div class="row">
	<div class="col-md-12">
    <div id="piechart4" style="width: 900px; height:500px;"></div>
   <!-- <div id="piechart" style="width: 900px; height: 500px;"></div> -->
   <div id="piechart1" style="width: 900px; height: 500px;"></div>
   <div id="piechart2" style="width: 900px; height: 500px;"></div>

   <div id="columnchart_material" style="width: 800px; height: 500px;"> </div>
    </div>
 </div>
  </body>
</html>

