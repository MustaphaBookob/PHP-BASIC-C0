<?php  

    $leeftijd = 17;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
    </div>

    <div id="minderjarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>