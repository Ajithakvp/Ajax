<?php
include("config.php");

?>

<html>

    <header><h1>Report</h1></header>
    <body style="text-align:center">
        
   
    <center> <table style="width:50%; background-color:black ; padding-top:20px; text-align:center; ">
            <tr>
            <th style="color:white ; text-align:center; padding-bottom:10px;">Empid</th>
            <th style="color:white ; text-align:center; padding-bottom:10px;">Name</th>
            
</tr>
<tbody id="data" style="color:red ; background-color:white ; width:50%; text-align:center;padding-top:10px;"></tbody>
<table><center>
</body>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

<script>
$(document).ready(function(){
  
        $.ajax({
		   type: "GET",
		   url: "demodata.php",
		   success: function(data){
            var data = JSON.parse(data);
			   console.log(data);
               var html="";
               for(var i=0; i<data.length;i++){
                var empid=data[i].empid.toUpperCase();
                var name=data[i].name.toUpperCase();

               html  +="<tr>";
               html  +="<td >"+empid+"</td>";
               html  +="<td>"+name+"</td>";
               html  += "</tr>";
               }
               document.getElementById("data").innerHTML += html;
        }
        
    });

});


</script>


</html>
