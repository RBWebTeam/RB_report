<html>
   <head>
     <title> DashBoard Piechart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   </head>
   <body>
     
<!--       <div id="piechart3" style="width: 900px; height: 500px;"></div>
 -->

      <div class="container-fluid">
    <div class="row">
    
    <div class="col-md-6 col-xs-12"> <div id="piechart1" style="width: 600px; height: 500px;"></div> </div>
    
    <div class="col-md-6 col-xs-12"> <div id="piechart2" style="width: 600px; height: 500px;"></div> </div>
       

   <div class="col-md-6 col-xs-12"> <div id="piechart3" style="width: 600px; height: 500px;"></div> </div>
    <!-- <div class="col-md-6 col-xs-12"> <div id="piechart4" style="width: 600px; height: 500px;"></div> </div> -->
 <div class="col-md-6 col-xs-12">  <div id="columnchart_material" style="width: 600px; height: 500px;"> </div>
   </div>
   
   </div>

       

   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
         // Load the Visualization API and the line package.
          
         google.charts.load('current', {'packages':['corechart']});
            google.charts.load('current', {'packages':['bar']});
      //google.charts.setOnLoadCallback(drawChart);
           
         
         // Set a callback to run when the Google Visualization API is loaded.

 

         var fdata=Array();
         $.ajax({
                type: 'GET',
                  url: "{{url('ab')}}",
               // url: "{{url('ab')}}",
                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['cityName','percentage']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String(val.cityName),val.cityCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(piechart1);
                 function piechart1() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'CityWise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                        
                        chart.draw(data, option);
                                
                }
                

                 var fdata=Array();
         $.ajax({
                type: 'GET',

   url: "{{url('bd')}}",
                //url: "{{url('bd')}}",

                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['bankName','percentage']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String(val.bankName),val.bankCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(piechart2);
                 function piechart2() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'BankWise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                        
                        chart.draw(data, option);
                                
                }

                 
                 var fdata=Array();
         $.ajax({
                type: 'GET',
                url: "{{url('cd')}}",
                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['empName','leadCount']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String (val.empName),val.leadCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(piechart3);
                 function piechart3() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'teamwise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
                        
                        chart.draw(data, option);
                                
                }

              



var fdata=Array();
         $.ajax({
                type: 'GET',
                url: "{{url('ad')}}",
                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['Month', 'leadStatus','leadCount']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                         arr.push([String(val.month), (val.leadStatus),(val.leadCount)]);
                     
        });

            console.log(arr);
      google.charts.setOnLoadCallback(drawChart);
                 function drawChart() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var options ={

                                 title: 'productwise Report',
                                 is3D: true
                        };

                      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }


                 }

            }); 


            }

            });
           }

            });
          }

            });
      </script>
</html>























