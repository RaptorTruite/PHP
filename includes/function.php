<?php
function calculateWithoutTaxe(float $price): float{
        return number_format($price / 1.2, 1);
    }

    function showItem($item): void{
        echo    '<div class="card col-3 m-4">
                <img>
                    <div class="card-body">
                        <h5 class="card-title">'.$item->getname().'</h5>
                        <p class="card-text">'.$item->getdescription().'</p>
                        <p class="card-text">'.$item->getprice().' €</p>
                        <button class="btn btn-primary">Ajouter au panier</button>
                    </div>
                </div>';
    }