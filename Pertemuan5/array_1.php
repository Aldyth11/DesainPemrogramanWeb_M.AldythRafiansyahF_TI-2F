<html>
    <head>
        <body>
            <h2>Array Terindexs</h2>
            <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pemenenang", "Bagas Nugraha"];

            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";

            echo"<br>";
            echo"<h3>Dengan Loop</h3>";

            $indices_to_display = [2, 0, 1]; 

            for ($i = 0; $i < count($indices_to_display); $i++) {
                $index = $indices_to_display[$i];
                
                echo $Listdosen[$index] . "<br>";
            }
            ?>
        </body>
    </head>
</html>