<html>
   <head>
     <title> DashBoard Piechart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   </head>
   <body>
     

    <div class="container-fluid">
    <div class="row">
    <div class="col-md-6 col-xs-12"> <div id="citywisereport" style="width: 100%;height: 500px;"></div> </div>

    <div class="col-md-6 col-xs-12"><div id="bankwisereport" style="width: 100%;height: 500px;"></div> </div>
       

   <div class="col-md-6 col-xs-12">  <div id="teamwisereport" style="width: 100%;height: 500px;"></div> </div>
    <div class="col-md-6 col-xs-12">  <div id="productwisereport" style="width: 100%;height: 500px;"></div> </div>
 
   </div>
   </div>   
<div class="col-md-12 col-xs-12">  <div id="monthwisereport" style="height: 500px;"> </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        
          
         google.charts.load('current', {'packages':['corechart']});
            google.charts.load('current', {'packages':['bar']});
      

 // var  empID=$('#empCode').val();

         var fdata=Array();
         $.ajax({
                type: 'GET',
               
                   url: "{{url('citywise-report')}}",
                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['cityName','percentage']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String(val.cityName),val.cityCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(citywisereport);
                 function citywisereport() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'Citywise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('citywisereport'));
                        
                        chart.draw(data, option);
                                
                }
                

                 var fdata=Array();
         $.ajax({
                type: 'GET',

   url: "{{url('bankwise-report')}}",
                

                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['bankName','percentage']);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String(val.bankName),val.bankCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(bankwisereport);
                 function bankwisereport() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'Bankwise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('bankwisereport'));
                        
                        chart.draw(data, option);
                                
                }

                 
                 var fdata=Array();
         $.ajax({
                type: 'GET',
                url: "{{url('teamwise-report')}}",

                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['empName','leadCount']);
                     
                    var dat=JSON.stringify(av.result);


                     $.each(av.result, function(key,val) {
                          
                         arr.push([String (val.empName),val.leadCount]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(teamwisereport);
                 function teamwisereport() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'Teamwise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('teamwisereport'));
                        
                        chart.draw(data, option);
                                
                }

              



         var fdata=Array();
         $.ajax({
                type: 'GET',
                  url: "{{url('productwise-report')}}",
                  
                success: function (msg) {

                    av=JSON.parse(msg);
                     var arr=new Array(['productName','leadCount','leadStatus' ]);
                     
                    var dat=JSON.stringify(av.result);
                     $.each(av.result, function(key,val) {
                          
                         arr.push([String(val.productName),(val.leadCount),(val.leadStatus)]);
        });

            console.log(arr);
                  
                  google.charts.setOnLoadCallback(productwisereport);
                 function productwisereport() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var option ={

                                 title: 'Productwise Report',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('productwisereport'));
                        
                        chart.draw(data, option);                                
                }


var fdata=Array();
         $.ajax({
                type: 'GET',
                url: "{{url('monthwise-report')}}",
                success: function (msg) {

                    var test=JSON.parse(msg);
                     
                     var arr=new Array(['Month', 'Disbursed','Login','Sanctioned']);
   
        var av = test.result;

    var t = av.length/3;

    for(var i = 0; i < t;i++)
    {
      var j = i * 3;
        
      var vas=([av[j].month,av[j].leadCount, av[j+1].leadCount, av[j+2].leadCount]);
      arr.push(vas);
    }

     
        console.log(av);
      google.charts.setOnLoadCallback(drawChart);
                 function drawChart() {
                        var data = google.visualization.arrayToDataTable(arr);                        
                        var options ={

                                 title: 'Monthwise Lead Report',
                                 is3D: true
                        };

                      var chart = new google.charts.Bar(document.getElementById('monthwisereport'));
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

  }

            });       
       
    </script>
</html>























