<?php
    include 'function.php';
    include 'variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php //exo 1
        echo    '<table>
                    <thead>
                        <td>Bonnet</td>
                    </thead>
                    <tbody>';
        foreach ($bonnets as $bonnet){
            echo    "<tr>
                        <td>$bonnet</td>
                    </tr>";
        }
        echo '</tbody>';
?>

<?php //exo 2
        echo '<br>';
        echo    '<table>
                    <thead>
                        <td>Bonnet</td>
                        <td>Prix</td>
                        <td>Description</td>
                    </thead>
                    <tbody>';
        foreach ($bonnetsComplexe as $bonnet){
            echo    "<tr>
                        <td>$bonnet[0]</td>
                        <td>$bonnet[1] €</td>
                        <td>$bonnet[2]</td>
                    </tr>";
        }
        echo '</tbody>';
?>

<?php //exo 3
        echo '<br>';
        echo    '<table>
                    <thead>
                        <td>Bonnet</td>
                        <td>Prix</td>
                        <td>Description</td>
                    </thead>
                    <tbody>';
        foreach ($bonnetsComplexeEnCouleur as $bonnet){
            $style = ($bonnet[1] > 12)? 'style="color: blue"' : 'style="color: green"';
            echo    "<tr $style>
                        <td>$bonnet[0]</td>
                        <td>$bonnet[1] €</td>
                        <td>$bonnet[2]</td>
                    </tr>";
        }
        echo '</tbody>';
?>

<?php //exo 4
        echo '<br>';
        echo    '<table>
                    <thead>
                        <td>Bonnet</td>
                        <td>Prix</td>
                        <td>Description</td>
                    </thead>
                    <tbody>';
        foreach ($bonnetsComplexeEnCouleurSansTaxe as $bonnet){
            $style = ($bonnet[1] > 12)? 'style="color: blue"' : 'style="color: green"';
            $prixHT = calculateWithoutTaxe($bonnet[1]);
            echo    "<tr $style>
                        <td>$bonnet[0]</td>
                        <td>($prixHT € HT) $bonnet[1] € TTC</td> 
                        <td>$bonnet[2]</td>
                    </tr>";
        }
        echo '</tbody>';
?>

<?php //exo 5
        echo '<br>';
        echo    '<table>
                    <thead>
                        <td>Bonnet</td>
                        <td>Prix</td>
                        <td>Description</td>
                    </thead>
                    <tbody>';
        foreach ($bonnetsComplexeEnCouleurSansTaxeRefactorisee as $bonnet){
            showItem($bonnet);
        }
        echo '</tbody>';
?>


</body>
</html>