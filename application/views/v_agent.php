<html>
    <body>
    <h1>Les Agents</h1>

<?php

foreach ($lesAgents as $agent) {
    ?>
<a href="<?php echo base_url();?>index.php/CtrlAccueil/AfficherLesFormations/AfficherLesAgents/"<?php echo $agent->nom; ?>><?php echo $agent>prenom; ?></a><br>-->
    <p><?php echo $agent->nom; ?>  -  <?php echo $agent->prenom; ?></p> 
<?php    
}
?>
<!-- test-->
    </body>
</html>