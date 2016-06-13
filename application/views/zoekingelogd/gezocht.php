<div id="previews">
    <div class="preview">
        <?php

        $id = $_SESSION['id'];
        $query = $this->db->select('nickname, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('merk')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();




        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo anchor('pages/mijngegevens/'.$id,'<div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div>') ;
            }
            else{

                echo anchor('pages/mijngegevens/'.$id,'<div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div>');
            }


            if($row->tI > 50){
                $IE = 'I';
            }
            else{
                $IE = 'E';
            }

            if($row->tN > 50){
                $NS = 'N';
            }
            else{
                $NS = 'S';
            }
            if($row->tT > 50){
                $TF = 'T';
            }
            else{
                $TF = 'F';
            }
            if($row->tJ > 50){
                $JP = 'J';
            }
            else{
                $JP = 'P';
            }
            $gbdatum = $row->geboortedatum;
            $gbdatum=explode("-",$gbdatum);
            $tempm = date("m");
            $tempd = date("j");
            $tempj = date("Y");
            $leeftijd = $tempj - $gbdatum[0];


            echo "Naam ". anchor('pages/mijngegevens/'.$id, $row->nickname) . "<br>";
            echo "Leeftijd: ".$leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$IE.$NS.$TF.$JP. "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' ;
        }
        foreach ($query2->result() as $row2) {

            echo ', ' . $row2->merk;
        }

        ?>

</div>


</div>


</div>




