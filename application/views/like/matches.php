<h1>Oelalala, u heeft een match met de volgende personen:</h1></br>
<h2>"Deze persoon is wel erg leuk..."</h2>
<h2>"Een nieuw begin..."</h2>
<h2>"Daten is liefde, Data is leven..."</h2>
<div id="promotie">
    <?php
    $id = $this->db
        ->select('id')
        ->from('Persoon')
        ->where('nickname', $_SESSION['nickname'])
        ->get()->row_array()['id'];
    $query3 = $this->db->select('id')->from('Likes')
        ->group_start()
        ->where('gegeven_aan', $id )
        ->group_end()
        ->get();
    $query2 = $this->db->select('gegeven_aan')->from('Likes')
        ->group_start()
        ->where('id', $id )
        ->group_end()
        ->get();
    //TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT
    $likesstring1="Ontvangen likes van de volgende id's:";
    foreach ($query3->result() as $row2)
    {
        $likesstring1 =  $likesstring1.'_'.$row2->id;
    }
    //echo $likesstring1;
    //TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT

    //TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT
    $likesstring2="Gegeven likes aan de volgende id's:";
    foreach ($query2->result() as $row2)
    {
        $likesstring2 =  $likesstring2.'_'.$row2->gegeven_aan;
    }
    //echo $likesstring2;
    //TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT//TESTOUPUT
    $likearray1=explode("_", $likesstring1);
    $likearray2=explode("_", $likesstring2);

    foreach($likearray1 as $likeid)
    {
        if (in_array($likeid,$likearray2))
        {
            $id=$likeid;
            $query = $this->db->select('nickname, naam, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')

                ->group_start()
                ->where('id', $likeid )
                ->group_end()
                ->get();

            $query2 = $this->db->select('merk')->from('Merkvoorkeur')
                ->group_start()
                ->where('id', $likeid )
                ->group_end()
                ->get();

            foreach ($query->result() as $row) {
                if ($row->geslacht == 'm') {
                    echo '<div class="foto"> <img src="../../assets/img/man.jpg"id="foto" ></div>';
                } else {

                    echo '<div class="foto" > <img src="../../assets/img/vrouw.jpg" id="foto"></div>';
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
        }
    }






    ?>
</div>
