<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctions.js"></script>
</head>
<body>
<center><h1>Devoir techdays</h1><br/>
<input type="button" onclick='creerUneConference()' value="Créer une conférence" style="width:250px"><br/><br/>
<input type="button" onclick='afficherConferences()' value="Voter pour une conférence" style="width:250px"></center>
    
<div id="divConferences"></div>
</body>
</html>