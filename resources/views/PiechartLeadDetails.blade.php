<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<div>

   <H3><FONT="TIMES ROMAN" FONT-COLOR="BLUE" > SELECT An Year:</H3>

    <select name="selectyear" id="selectyear">

   <option value=""></option>
  
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
     </select>
      <br>

   <input class="SubmitButton" type="submit" name="btnsubmission" id="btnsubmission"  value="Submit" style="font-size:20px; margin-left: 12%; " />
  </div>

<div id="container"></div>
<button id="plain">Bussiness Head</button>
<!-- <button id="inverted">Inverted</button>
<button id="polar">Polar</button> -->


<style type="text/css">
  #container {
  min-width: 500px;
  max-width: 600px;
  margin: 0 auto;


}

</style>

<script type="text/javascript">
 
$(document).ready(function(){

 $('#btnsubmission').click(function () {

 alert($('#selectyear').val());
//       // google.charts.load('current', {'packages':['bar']});
//       // google.charts.setOnLoadCallback(drawChart);

        $.ajax({
                        type: "post",
                        data: "",//{"years": $('#selectyear').val()},
                        url: "/getleaddetails/"+$('#selectyear').val(),
                        success: function (result) {
                            alert(result);
                            // window.location.reload();
                        }
                    });

 });

});







</script>



