<?php
function calculateWithoutTaxe(float $price): float{
        return number_format($price / 1.2, 1);
    }

    function showItem($item): void{
        $style = ($item[1] > 12)? 'style="color: blue"' : 'style="color: green"';
        $prixHT = calculateWithoutTaxe($item[1]);
        echo    "<tr $style>
                    <td>$item[0]</td>
                    <td>($prixHT € HT) $item[1] € TTC</td> 
                    <td>$item[2]</td>
                </tr>";
    }
?>