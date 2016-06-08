<?php




$id = $this->uri->segment(3,0);
$query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

$query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

foreach ($query->result() as $row)
{
    if ($row->geslacht == 'm') {
        echo '<div class="foto"> <img src="../../../assets/img/man.jpg"id="foto" ></div>';
    }
    else{

        echo '<div class="foto" > <img src="../../../assets/img/vrouw.jpg" id="foto"></div>';
    }

    echo "Naam: ". $row->nickname ."<br>";
    echo "Leeftijd: ".$row->leeftijd."<br>";
    echo "Geslacht: ".$row->geslacht . "<br>";
    echo "Type: ".$row->persoonlijkheidstype . "<br>";
    echo "Beschrijving: ".$row->beschrijving . "<br>";
    echo 'Merkvoorkeuren: ' . "<br>";
    foreach ($query2->result() as $row2) {
        if($row2-> CocaCola == 1){
            echo 'Coca-Cola' . "<br>";
        }
        else{
            echo null;
        }


    }
    foreach ($query2->result() as $row2) {
        if($row2-> Google == 1){
            echo 'Google'. "<br>";
        }
        else{
            echo null;
        }

    }

    echo anchor('/mijnprofiel/inlog/', 'Conctact'). "<br>";
    echo anchor('/registreer/registreer/', 'Like'). "<br>";
}

?>


