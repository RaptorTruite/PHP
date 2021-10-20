<?php
    require './classes/Beanie.php';

    $username = 'username';
    $password = 'password';
    
    $beanie1 = new Beanie();
    $beanie1
    ->setName('Bonnet en laine')
    ->setPrice(10)
    ->setDescription('lorem')
    ->addSize(Beanie::SIZES[0])
    ->addMaterial(Beanie::MATERIALS[0]);

    $beanie2 = new Beanie();
    $beanie2
    ->setName('Bonnet en laine bio')
    ->setPrice(14)
    ->setDescription('lorem')
    ->addSize(Beanie::SIZES[1])
    ->addMaterial(Beanie::MATERIALS[1]);

    $beanie3 = new Beanie();
    $beanie3
    ->setName('Bonnet en laine et cachemire')
    ->setPrice(20)
    ->setDescription('lorem')
    ->addSize(Beanie::SIZES[2])
    ->addMaterial(Beanie::MATERIALS[0])
    ->addMaterial(Beanie::MATERIALS[2]);

    $beanie4 = new Beanie();
    $beanie4
    ->setName('Bonnet arc-en-ciel')
    ->setPrice(12)
    ->setDescription('lorem')
    ->addSize(Beanie::SIZES[0])
    ->addMaterial(Beanie::MATERIALS[0]);
        

    $products = [$beanie1, $beanie2, $beanie3, $beanie4];

    $bonnets = ['Bonnet en laine', 'Bonnet en laine bio', 'Bonnet en laine et cachemire', 'Bonnet arc-en-ciel'];
    $bonnetsComplexe = [
        ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
    ];
    $bonnetsComplexeEnCouleur = [
        ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
    ];
    $bonnetsComplexeEnCouleurSansTaxe = [
        ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
    ];
    $bonnetsComplexeEnCouleurSansTaxeRefactorisee = [
        ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], 
        ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
    ];
