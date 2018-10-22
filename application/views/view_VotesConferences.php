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
<?php
    foreach($lesConferences as $uneConference)
    {
        echo ".$uneConference->TITRECONFERENCE.",".$uneConference->NBVOTES." ;
    ?>
    <div style='margin:auto;' onclick="afficherConferences()">
    <?php echo $uneConference->titreConf; ?>
    </div>
    <?php
    }
?>
</body>
</html>