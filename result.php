<?php
// Metode Post

if(isset($_POST['fnama']))
{
$fnama = $_POST['fnama'];
$lalamat = $_POST['lalamat'];
$ljnskelamin = $_POST['ljnskelamin'];
$ldevice = $_POST['ldevice'];
$agama = $POST['agama']
echo "<span class='success'>Hasil Inputan Pada Form 2 dengan <b>METODE POST</b></span><br/>";
echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Jenis Kelamin : ".$ljnskelamin."</br>Device : ".$ldevice."<br/>Agama : ".$agama; 
}
// Metode Get
if(isset($_GET['fnama']))
{
$fnama = $_GET['fnama'];
$lalamat = $_GET['lalamat'];
$ljnskelamin = $_GET['ljnskelamin'];
$ldevice = $_GET['ldevice'];
$agama = $POST['agama']
echo "<span class='success'>Hasil Inputan Pada Form 1 dengan <b>METODE GET</b></span><br/>";
echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Jenis Kelamin : ".$ljnskelamin."</br>Device : ".$ldevice."<br/>Agama : ".$agama; 
}
?>