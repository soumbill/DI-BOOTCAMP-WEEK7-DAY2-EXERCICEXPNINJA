<?php 
    if(isset($_POST['submit'])){
        $number = intval($_POST['number']);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPNINJA | W7_D2</title>
</head>
<body>
    <center>
        <h1>Exercise 1 : Chess Board</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <input type="number" name="number">
            <button type="submit" name="submit">Valider</button>
        </form>
        <br>
        <table style="border-collapse:collapse;">
            <?php 
                for($i = 0; $i < $number; $i++){?>
                    <tr>
                    <?php
                        for($j = 0; $j < $number; $j++){?>
                            <td style="border:1px solid #000; width: 5px; height: 5px;"></td>
                    <?php
                        }
                    ?>                      
                    </tr>
            <?php
                }
            ?>
        </table>
    </center>
</body>
</html>