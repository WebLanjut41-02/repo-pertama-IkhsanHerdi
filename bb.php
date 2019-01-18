<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Belajar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post">
    Tinggi Badan : <input type="text" name="tinggi"><br>
    Berat Badan : <input type="text" name="berat"><br>
    Jenis Kelamin : 
    <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki <br>
    <input type="radio" name="kelamin" value="Perempuan"> Perempuan <br>
    <input type="submit" name="submit"> <br><br><br>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $tg = $_POST['tinggi'];
    $br = $_POST['berat'];
    $jk = $_POST['kelamin'];
}

    class berat_badan{
        public $tinggi, $berat, $jeniskelamin;

        public function info($tinggi, $berat, $jeniskelamin){

            echo "Tinggi Badan =".$tinggi."<br>";
            echo "Berat Badan =".$berat."<br>";
            echo "Jenis Kelamin =".$jeniskelamin."<br><br>";
        }

        public function ideal($tinggi, $berat, $jeniskelamin){
            echo "Kategori Berat Badan = ";
            
            $ig = $tinggi/100;
            $ideal = $berat/($ig*$ig);
            
            if ($jeniskelamin=="Perempuan") {
                if ($ideal < 18){
                    echo "Under Weight/Kurus";
                }else if($ideal >= 18 && $ideal < 25 ){
                    echo "Normal Weight/Normal";
                }else if($ideal >= 25 && $ideal < 27 ){
                    echo "Over Weight/Kegemukan";
                }else if($ideal >= 27){
                    echo "Obesitas";
                }    

            }

            if ($jeniskelamin=="Laki-laki") {
                if ($ideal < 17){
                    echo "Under Weight/Kurus";
                }else if($ideal >= 17 && $ideal < 23 ){
                    echo "Normal Weight/Normal";
                }else if($ideal >= 23 && $ideal < 27 ){
                    echo "Over Weight/Kegemukan";
                }else if($ideal >= 27){
                    echo "Obesitas";
                }    

            }

            }
        }
    
    
    
    $hasil = new berat_badan;
    $hasil->info($tg, $br, $jk);
    $hasil->ideal($tg, $br, $jk);



?>