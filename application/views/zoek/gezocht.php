<?php



/*$jaar = date("Y");
$mingbjaar = $jaar - $minleeftijd;
$maxgbjaar = $jaar - $maxleeftijd;
$gbdatum=explode("-",'geboortedatum');
$gbjaar = $gbdatum[0];
*/
$query = $this->db->select('id, nickname, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')



    ->group_start()
    ->where('geslacht', $geslacht)
    // ->where($gbjaar < $mingbjaar)
    // ->where($gbjaar > $maxgbjaar)
    //   ->where('tI', $IE )
//    ->where('tN', $NS)
    //   ->where('tT',$TF )
    //   ->where('tJ',$JP )
    ->group_end()
    ->get();



/*$query2 = $this->db->select('merk')->from('Merkvoorkeur')
    ->group_start()
    ->where('id', $id)
    ->group_end()
    ->get();*/





     foreach ($query->result() as $row) {
         $gbdatum = $row->geboortedatum;
         $gbdatum=explode("-",$gbdatum);
         $tempm = date("m");
         $tempd = date("j");
         $tempj = date("Y");
         $leeftijd = $tempj - $gbdatum[0];


         echo "Naam " . $row->nickname . "<br>";
        // echo "Leeftijd: " . $leeftijd . "<br>";
        // echo "Geslacht: " . $row->geslacht . "<br>";
       //  echo "Type: " . $IE . $NS . $TF . $JP . "<br>";
     }
 
?>




<!--//ophalen van invoer in zoekvelden-->
<!---->
<!---->
<!--$geslacht = $this->input->post('geslacht');-->
<!--$minleeftijd = $this->input->post('minimaal');-->
<!--$maxleeftijd = $this->input->post('maximaal');-->
<!--$sumbit = $this->input->post('submit');-->
<!--$IE = $this->input->post('ie');-->
<!--$NS = $this->input->post('ns');-->
<!--$TF = $this->input->post('tf');-->
<!--$JP = $this->input->post('jp');-->





<!--$id = $this->uri->segment(3,0);-->
<!--$query = $this->db->select('nickname, naam, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')-->
<!---->
<!--    ->group_start()-->
<!--    ->where('id', $id )-->
<!--    ->group_end()-->
<!--    ->get();-->
<!---->
<!---->
<!--foreach ($query->result() as $row) {-->
<!--    if ($row->geslacht == 'm') {-->
<!--        echo '<div class="foto"> <img src="../../../assets/img/man.jpg"id="foto" ></div>';-->
<!--    } else {-->
<!---->
<!--        echo '<div class="foto" > <img src="../../../assets/img/vrouw.jpg" id="foto"></div>';-->
<!--    }-->
<!---->
<!--    if ($row->tI > 50) {-->
<!--        $IE = 'I';-->
<!--    } else {-->
<!--        $IE = 'E';-->
<!--    }-->
<!---->
<!--    if ($row->tN > 50) {-->
<!--        $NS = 'N';-->
<!--    } else {-->
<!--        $NS = 'S';-->
<!--    }-->
<!--    if ($row->tT > 50) {-->
<!--        $TF = 'T';-->
<!--    } else {-->
<!--        $TF = 'F';-->
<!--    }-->
<!--    if ($row->tJ > 50) {-->
<!--        $JP = 'J';-->
<!--    } else {-->
<!--        $JP = 'P';-->
<!--    }-->
<!---->
<!--    $gbdatum = $row->geboortedatum;-->
<!--    $gbdatum = explode("-", $gbdatum);-->
<!--    $tempm = date("m");-->
<!--    $tempd = date("j");-->
<!--    $tempj = date("Y");-->
<!--    $leeftijd = $tempj - $gbdatum[0];-->
<!---->
<!---->
<!--    echo "Naam: " . $row->naam . "<br>";-->
<!--    echo "Leeftijd: " . $leeftijd . "<br>";-->
<!--    echo "Geslacht: " . $row->geslacht . "<br>";-->
<!--    echo "Type: " . $IE . $NS . $TF . $JP . "<br>";-->
<!--    echo "Beschrijving: " . $row->beschrijving . "<br>";-->
<!---->
<!---->
<!--    echo ' ' . "<br>";-->
<!--    echo anchor('/mijnprofiel/inlog/', 'Conctact') . "<br>";-->
<!--    echo anchor('/registreer/registreer/', 'Like') . "<br>";-->
<!---->
<!---->
<!--}-->
<!--?>-->


