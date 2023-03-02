<?php
  function sum($a,$b)
  {
    return $a+$b;  
  }  
?>
<html>

<head>
    <style>
        *{padding: 0;margin: 0;}
    </style>
</head>
    <body style="">
        <div style="height: auto">            
            <div style="height: 60px;width: calc(100%-6px);background-color: #cc00cc;margin: 3px 3px;border-top: 5px solid black ;border-bottom: 5px solid black">   </div> <!-- header1 -->
            <div style="height: 80px;width: calc(100%-6px);background-color: white;margin: 3px 3px;">   </div> <!-- menu -->
            <div style="height: Auto;width: 70%;background-color: yellow;margin: 0px 0px;">   
                <!--  <div style="background-color: #ccccff">  -->
            <?php for($x = 1; $x <= 200; $x++) 
              echo '<div style="height: 400px;width: 300px;background-color: #ccccff;margin: 3px 3px;float: left">'.$x.'   </div> '//<!-- header -->
             ?>
            </div> <!-- header -->    
            
        </div>    
    </body>
</html>   
  
