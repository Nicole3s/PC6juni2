
<div id="mijnprofiel">

    <h1>Profielpagina</h1>

    <div id="previews">
        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 1)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">' . "<br>";
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";



            }


            ?>

        </div>

        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 2)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">' . "<br>";
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";

            }

            ?>

        </div>

        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 3)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">'. "<br>" ;
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";

            }

            ?>

        </div>

        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 4)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">'. "<br>" ;
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";

            }

            ?>

        </div>
        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 5)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">' . "<br>";
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";

            }


            ?>

        </div>

        <div class="preview">
            <?php

            $query = $this->db->select('name, age, geslacht')->from('test')
                ->group_start()
                ->where('id', 6)
                ->group_end()
                ->get();

            foreach ($query->result() as $row)
            {
                if ($row->geslacht == 'm') {
                    echo '<img src="assets/img/man.jpg" height="100">'. "<br>" ;
                }
                else{

                    echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
                }

                echo "Naam: ".$row->name ."<br>";
                echo "Leeftijd: ".$row->age."<br>";
                echo "Geslacht: ".$row->geslacht . "<br>";

            }

            ?>

        </div>
    </div>

    <p>Meer</p>


</div>

