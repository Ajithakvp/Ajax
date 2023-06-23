<?php
session_start();
include("config.php");


?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  background: url(5.jpg);
background-size: cover;
}

</style>
<body style=background-color:powderblue;>
<div  style="margin-left:5%;padding:1px 16px;height:1000px;" ><br>
<form>
 <center><label style="color:red; font-size:20px;"><b>Attendance<b></label><center><br>
 <center><input style="color:Tomato;  padding: 10px ; width: 25%  ; border: 2px solid green;" type="text" required placeholder="Name" id="name" name="name" > </center><br>
 <center><input style="color:Tomato;  padding: 10px ;  width: 25% ; border: 2px solid green;"  id="text" name="text" placeholder="Present (or) absent"></center><br><br>
 <center><input type="submit" style=" padding: 10px 50px 10px 50px;  background-color:red; color:white;  border-radius: 10%;" value="Submit" id="Submit"  ><center></div>
</form>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
 
<script>
$(document).ready(function(){
   

    $("#Submit").click(function(){
        var name=$("#name").val();
        var text=$("#text").val();
        $.ajax({
            type:"POST",
            url:"insertstoredata.php",
            data:"name="+name+"&text="+text,
            success:function(data){
                alert(text);
            }


        });
        
    });
});
    </script>


    </html>