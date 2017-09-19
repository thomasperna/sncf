
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        foreach($lesFormation as $form){
              ?>
        <a href=<?php echo base_url(); ?>index.php/CtrlAccueil/afficherLesAgents/<?php echo $form->code; ?>><br><?php echo $form->intitule ?></a>
       <!-- <form action="CtrlAccueil/AfficherLesJeux" method="get">
            <input type="radio" value 
        <br>-->
       
        <?php   
        }
        ?>  
     
    </body>
</html>