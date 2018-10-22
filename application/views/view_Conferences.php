<?php
    foreach($lesConferences as $uneConference)
    {
        echo ".$uneConference->TITRECONFERENCE.",".$uneConference->NBVOTES." ;
    ?>
    <div style='margin:auto;' onclick="AfficherConferences()">
    <?php echo $uneConference->titreConf; ?>
    </div>
    <?php
    }
    ?>