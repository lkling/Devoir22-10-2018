<?php

class Model_Interface extends CI_Model
{
    public function creerUneConférence($codeConference, $codeTheme, $codeNiveau, $codeTitre, $codeContenu, $codeTechno, $nomTechno)
    {
        $sql = $this->db->query("select conference.IDCONFERENCE, conference.IDTHEME, conference.IDNIVEAU, conference.TITRE, conference.CONTENU, technologie.IDTECHNO, technologie.NOMTECHNO
        from conference, technologie
        where IDCONFERENCE = '.$codeConference.'
        and IDTHEME = '.$codeTheme.'
        and IDNIVEAU = '.$codeNiveau.'
        and TITRE = '.$codeTitre.'
        and CONTENU = '.$codeContenu.'
        and IDTECHNO = '.$codeTechno.'
        and NOMTECHNO = '.$nomTechno.'");
        $sql = $this->db->query("select max(IDCONFERENCE) as num from conference");
        if(count($sql->result() == 0))
        {
            $sql = $this->db->query("insert into conference values (".$codeConference.",".$codeTheme.",".$codeNiveau.",".$codeTitre.",".$codeContenu.")");
            $sql = $this->db->query("insert into utiliser values (".$codeConference.",".$codeTechno.")");
            return "Votre conférence a été créée.";
        }
        else
        {
            return "La conférence n'a pas pu être créée.";
        }
    }
    public function afficherConferences()
    {
        $sql = $this->db->query("select TITRE, NBVOTES from conference
        where NBVOTES = '.$nbvotes.'
        and TITRE = '.$codeTitre.'");
        return $sql->result();
    }
}

?>