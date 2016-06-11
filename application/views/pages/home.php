

<h1>Welkom bij DataDate!</h1></br>
<h2>"Hadden we eerder van deze site geweten..."</h2>
<h2>"Een nieuw begin..."</h2>
<h2>"Daten is liefde, Data is leven..."</h2>
<div id="promotie">Dè datingsite waar u gematcht wordt op basis van uw persoonlijkheid en likes die u geeft aan andere gebruikers van deze site.
    Reuze fijn dat u deze site heeft aangeklikt. Zoek niet verder, u zult het niet beter treffen. Wij bieden uw toekomstige partner!
    Heeft u vaak net achter het net gevist en wilt u fijn gaan daten? Dit kan, DataDate bied een rijke keuze aan mensen. Schrijf u vandaag nog in!
    Daten is ons leven, daten is Data. Daten is DataDate!
</div>

<div id="previews">
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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
            echo 'Merkvoorkeuren: ';
        }
        foreach ($query2->result() as $row2)
        {
            echo  $row2->merk .', ';
        }

        ?>
    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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




        foreach ($query->result() as $row) {
            if ($row->geslacht == 'm') {
                echo anchor('pages/mijngegevens/' . $id, '<div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div>');
            } else {

                echo anchor('pages/mijngegevens/' . $id, '<div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div>');
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


            echo "Naam " . anchor('pages/mijngegevens/' . $id, $row->nickname) . "<br>";
            echo "Leeftijd: " . $leeftijd . "<br>";
            echo "Geslacht: " . $row->geslacht . "<br>";
            echo "Type: " . $IE . $NS . $TF . $JP . "<br>";
            echo substr($row->beschrijving, 0, 50) . "...<br>";
            echo 'Merkvoorkeuren: ';
        }
             foreach ($query2->result() as $row2)
                {
            echo  $row2->merk .', ';
             }


        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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
        foreach ($query2->result() as $row2)
        {
            echo  $row2->merk .', ';
        }

        ?>

    </div>
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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
        foreach ($query2->result() as $row2)
        {
            echo  $row2->merk .', ';
        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
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
        foreach ($query2->result() as $row2)
        {
            echo  $row2->merk .', ';
        }

        ?>

    </div>


</div>

<a id="meer" href="javascript:location.reload(true)">Meer profielen</a>


