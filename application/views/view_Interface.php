<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir Techdays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="JS/fonctions.js"></script>
    <script type="text/javascript">
    $
    (
        function()
        {
            $('#btnInsererConference').click
            (
                function()
                {
                    creerUneConference();
                }
            );
        }
    );
    </script>
</head>
<body>
<center><h1>Devoir techdays</h1><br/>
<input type="button" onclick='creerUneConference()' value="Créer une conférence" style="width:250px"><br/><br/>
<input type="button" onclick='afficherConferences()' value="Voter pour une conférence" style="width:250px"></center>
    
<table>
    <tr>
        <td><label>Numéro de la conférence</label><input type='text' name='idConf' value='<?php echo $num; ?>' disabled></td>
        <td><label>Titre de la conférence</label><input type='text' name='titreConf'></td></tr>
    <tr><td><label>Contenu de la conférence</label><input type='text' name='contenuConf'></td>
        <td><label>Choix du niveau</label><input type='text' name='niveauConf'></td></tr>
    <tr><td><label>Choix du thème</label><input type='text' name='themeConf'></td></tr>
    <tr><?php 
    echo "<table><tr>";
    foreach($lesTechno as $uneTechno)
    { 
        echo "<td><input type='checkbox'>".$uneTechno->$nomTechno."<td>";
    } 
    echo "</tr>";
    echo "<input type='button' id='btnInsererConference' data-toggle='popover' data-content='Conférence créée' value='Insérer une conférence'></table>";
    ?></tr>
</table>
<div id="divConferences"></div>
</body>
</html>