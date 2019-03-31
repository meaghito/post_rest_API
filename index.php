<?php
// TEST RESP API SEDERHANA
include 'fix.php';
?>

<?php

$hewan = $config->query("SELECT * FROM hewan");


while ($array = mysqli_fetch_array($hewan))
{
		$hasil [] = array(

			"nama hewan" => $array ["nama"],
			"foto"		=> $array ["foto"],
			"deskripsi" => $array ["desk"]

		); 
}
$json = array(

'query dari database'		=> 'success dibaca',
'array'		=> $hasil
);
echo "TEST REST API SEDERHANA";
echo "<br>";
echo json_encode($json);

?>