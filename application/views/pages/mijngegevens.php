<?php




$id = $this->uri->segment(3,0);
$query = $this->db->select('nickname, naam, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')

    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

$query2 = $this->db->select('merk')->from('Merkvoorkeur')
    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

foreach ($query->result() as $row) {
    if ($row->geslacht == 'm') {
        echo '<div class="foto"> <img src="../../../assets/img/man.jpg"id="foto" ></div>';
    } else {

        echo '<div class="foto" > <img src="../../../assets/img/vrouw.jpg" id="foto"></div>';
    }

    if ($row->tI > 50) {
        $IE = 'I';
    } else {
        $IE = 'E';
    }

    if ($row->tN > 50) {
        $NS = 'N';
    } else {
        $NS = 'S';
    }
    if ($row->tT > 50) {
        $TF = 'T';
    } else {
        $TF = 'F';
    }
    if ($row->tJ > 50) {
        $JP = 'J';
    } else {
        $JP = 'P';
    }

    $gbdatum = $row->geboortedatum;
    $gbdatum = explode("-", $gbdatum);
    $tempm = date("m");
    $tempd = date("j");
    $tempj = date("Y");
    $leeftijd = $tempj - $gbdatum[0];


    echo "Naam: " . $row->naam . "<br>";
    echo "Leeftijd: " . $leeftijd . "<br>";
    echo "Geslacht: " . $row->geslacht . "<br>";
    echo "Type: " . $IE . $NS . $TF . $JP . "<br>";
    echo "Beschrijving: " . $row->beschrijving . "<br>";
    echo 'Merkvoorkeuren: ' ;
}
    foreach ($query2->result() as $row2)
    {
       echo  $row2->merk .', ';
    }


    echo  ' '."<br>";
    echo anchor('/mijnprofiel/inlog/', 'Conctact'). "<br>";
    echo anchor('/like/connect/'.$id, 'Like'). "<br>";



?>


