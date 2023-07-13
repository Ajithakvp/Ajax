<?php
include("config.php");

?>


<html>
<style>
    .h1{
        text-align:center;
        background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(119,197,137,1) 8%, rgba(123,198,198,1) 15%, rgba(189,111,199,1) 21%, rgba(199,102,130,1) 28%, rgba(200,110,90,1) 35%, rgba(81,85,200,1) 41%, rgba(202,209,75,1) 48%, rgba(220,68,97,1) 56%, rgba(229,62,225,1) 63%, rgba(253,202,45,1) 68%, rgba(223,45,253,1) 75%, rgba(253,45,63,1) 82%, rgba(45,253,58,1) 88%, rgba(253,202,45,1) 94%, rgba(48,45,253,1) 94%, rgba(253,202,45,1) 100%);
    </style>

    <header><h1>Report</h1></header>
    <body class="h1">
        
   
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
                var empid=data[i].name.toUpperCase();
                var name=data[i].text.toUpperCase();

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
