
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        foreach($lesActivites as $act){
              ?>
        <a href="index.php/CtrlAccueil/afficherLesFormations/<?php echo $act->numero; ?>"><br><?php echo $act->libelle ?></a>
       <!-- <form action="CtrlAccueil/AfficherLesJeux" method="get">
            <input type="radio" value 
        <br>-->
       
        <?php   
        }
        ?>  
     
    </body>
</html>