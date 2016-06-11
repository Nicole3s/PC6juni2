<h1>Welkom bij DataDate!</h1></br>

<?php
echo $id = $this->db
    ->select('id')
    ->from('Persoon')
    ->where('nickname', $_SESSION['nickname'])
    ->get()->row_array()['id'];
?>
