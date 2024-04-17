<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php 
        echo "<h2>Véletlen pozitív egész szám</h2>";
        echo(rand() . "</br>");
        echo "<h2>Zárt intervallumban (10, 20) :</h2><br>";
        echo (rand(10,20) . "<br>");
        echo "A véletlen szám maximuma" . (getrandmax())."<br>";

        echo"<h3>Globális változó használata</h3>";
        $x= 7;
          $y = 6;
          $k;
            
          function myTest0() {
            //nem működik:
            //    $y = $x + $y;
            $x = 1;
            $y = 2;
            $z = $x + $y;
            echo "Lokális változó összege: $z <br>";
            //működik:
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                echo "Az összeadás eredménye: ".$GLOBALS['z'];
            }
            myTest0();
        echo "<br>";

        echo"<h3>Asszociatív tömb használata</h3>";
        echo"<br>";
        $nevKor = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        print_r($nevKor);
        echo "<br>";
        $nevKor["Peter"] = 36;
        print_r($nevKor);
        echo "<br> Ben életkora: " .$nevKor["Ben"]."<br>";
        
        echo"<h3>Tömb mint konsans</h3> <br>";
        define('ANIMALS', array(
            'dog',
            'cat',
            'bird'
        ));
        echo ANIMALS[1];

        echo"<br> <h3>Matematikai programcsalád</h3><br>";
        $adat1 = 8/3;
        echo "Két egész szám hányadosa: $adat1<br>";
        //echo floor(($adat1). "<br>");
        echo gettype($adat1). "<br>";
        echo "<h3>Elágazások</h3><br>";
        echo "<h3>Ternary operator</h3><br>";
        $logikai = 3 > 5;
        echo($logikai ? 'Ez igaz.' : 'Ez hamis')."<br>";
        echo(0 != 5 ? 'Ez igaz.' : 'Ez hamis');
        echo "<h3>Sima elágazás</h3><br>";
        if($logikai){
            echo "Ez igaz<br>";
        }else{
            echo "Ez hamis<br>";
        }
        $honap = (rand(1,12));
        switch ($honap){
            case 1:
                echo "JANUÁR";
                break;
            case 2:
                echo "FEBRUÁR";
                break;
            case 3:
                echo "MÁRCIUS";
                break;
            case 4:
                echo "ÁPRILIS";
                break;
            case 5:
                echo "MÁJUS";
                break;
            case 6:
                echo "JÚNIUS";
                break;
            case 7:
                echo "JÚLIUS";
                break;
            case 8:
                echo "AUGUSZTUS";
                break;
            case 9:
                echo "SZEPTEMBER";
                break;
            case 10:
                echo "OKTÓBER";
                break;
            case 11:
                echo "NOVEMBER";
                break;
            case 12:
                echo "DECEMBER";
                break;
            
        }
        echo "<br>";
        $tomb = array();
        $osszeg = 0;
        for ($i = 0; $i < 5; $i++) {
            $tomb[$i] = (rand(20,30));
            $osszeg += $tomb[$i];
        }
        echo $osszeg. "<br>";
        print_r($tomb) ;

        $erdemjegyek = array();
        for($i = 0; $i < 3; $i++){
            $erdemjegyek = (rand(1,5));
            if($erdemjegyek == 1){
                echo "Elégtelen";
            }elseif($erdemjegyek == 2){
                echo "Elégséges";
            }
        }
    
        echo "<br>";
    echo '<div class="betuk">';  
        echo "<p></p>";
        for($i = 1; $i<9; $i++){
            echo "<p>"." ". chr(96+$i)."</p>";
        }
    echo "</div>";
        echo "<br>";
        $szam = 9;
        for($i = 1; $i<9; $i++){
            echo  $szam - $i. "<br>";
        }
    
    ?>
</body>
</html>