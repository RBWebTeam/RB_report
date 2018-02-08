<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(piechart);

function piechart() {
                        // body...
                        x="";        
                        var arr=new Array(['bank_id','percentage']);
                        x+='0';
                        //var status;
                        


                        // @foreach($query as $value)
                        //         arr.push(['{{$value->bank_id}}',{{$value->BankCount}}]);
                        //        // print_r($query);exit();

                        // @endforeach

                         @foreach($query as $value)
                                arr.push(['{{$value->bank_id}}',{{$value->BankCount}}]);
                        @endforeach


                        var data = google.visualization.arrayToDataTable(arr);                        

                        var option ={

                                 title: 'Bank Wise',
                                 is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        
                        chart.draw(data, option);

                                
                }
                        
    })
    </script>
  </head>
  <body>
    
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>


