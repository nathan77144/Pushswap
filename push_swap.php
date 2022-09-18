<?php

$la = [];
$lb = [];

/*global $la;
global $lb;*/


function sa(&$arr)
{

    if (sizeof($arr) > 1) {

        //print_r($arr);
        //echo "sa avant";
        $cale = $arr[0]; //je met mon premier element dans une variable
        $arr[0] = $arr[1]; //je remplace mon premier argument par le deuxieme
        $arr[1] = $cale; //j'inverse la position des deux

        //print_r($arr);
        //echo "sa apres";
    }
    echo " sa ";
}

//sa($la);

function sb($arr)
{

    if (sizeof($arr) > 1) {
        //print_r($arr);

        $cale = $arr[0]; //je met mon premier element dans une variable
        $arr[0] = $arr[1]; //je remplace mon premier argument par le deuxieme
        $arr[1] = $cale; //j'inverse la position des deux

        print_r($arr);
    } else echo "";
}
function sc($arr1, $arr2)
{
    if (sizeof($arr1) > 1 && sizeof($arr2)) {

        print_r($arr1);
        $cale = $arr1[0]; //je met mon premier element dans une variable
        $arr1[0] = $arr1[1]; //je remplace mon premier argument par le deuxieme
        $arr1[1] = $cale;


        $cale = $arr2[0]; //je met mon premier element dans une variable
        $arr2[0] = $arr2[1]; //je remplace mon premier argument par le deuxieme
        $arr2[1] = $cale; //j'inverse la position des deux
        // print_r($arr2);
    } else echo "";
}
//sc($la,$lb);
function pa(&$la, &$lb)
{

    if (sizeof($la) > 0 && sizeof($lb) > 0) {


        array_unshift($la, $lb[0]);
        array_shift($lb);
    } else echo "";
}

function pb(&$la, &$lb)
{
    echo " pb ";
    //var_dump(count($la));
    if (count($la) > 0) {
        //var_dump($la,$lb);
        //if(!empty($lb))array_unshift($lb, $la[0]);
        array_push($lb, $la[0]);
        if (!empty($la)) array_shift($la);
    }
    //var_dump("Fin PB", $la,$lb);
}

// print_r($la);
// print_r($lb);
//else echo " rien";


// pb($la, $lb);

function ra(&$la)
{
    //print_r($la);
    //echo "ra avant";
    if (sizeof($la) >= 2) {

        array_push($la, $la[0]); //j'ajoute la[0] a la fin du tableaux
        array_shift($la); //je remet les index a la bonne postion
    }
    //print_r($la); 
    //echo "ra apres";
    echo " ra ";
}

//ra($la);

function rb($lb)
{
    if (sizeof($lb) >= 2) {

        array_push($lb, $lb[0]); //j'ajoute lb[0] a la fin du tableaux
        unset($lb[0]); //je supprime le premier element du tableaux lb
    } else echo "";
}
function rr($la, $lb)
{
    if (sizeof($la) >= 2) {

        print_r($la);
        array_push($la, $la[0]); //j'ajoute la[0] a la fin du tableaux
        unset($la[0]);
        print_r($la);
    }

    if (sizeof($lb) >= 2) {

        print_r($lb);
        array_push($lb, $lb[0]); //j'ajoute lb[0] a la fin du tableaux
        unset($lb[0]); //je supprime le premier element du tableaux lb
        print_r($lb);
    } else echo "";
}
//rr($la, $lb);
function rra($la)
{
    if (sizeof($la) >= 2) {

        print_r($la);
        array_unshift($la, $la[sizeof($la) - 1]); //j'ajoute lb[0] a la fin du tableaux

        unset($la[sizeof($la) - 1]); //je supprime le premier element du tableaux lb
        print_r($la);
    }
}
function rrb($lb)
{

    if (sizeof($lb) >= 2) {

        print_r($lb);
        array_unshift($lb, $lb[sizeof($lb) - 1]); //j'ajoute lb[0] a la fin du tableaux

        unset($lb[0]); //je supprime le premier element du tableaux lb
        print_r($lb);
    }
}
function rrr($la, $lb)
{
    if (sizeof($la) >= 2) {

        print_r($la);
        array_unshift($la, $la[sizeof($la) - 1]); //j'ajoute la[0] a la fin du tableaux

        unset($la[sizeof($la) - 1]); //je supprime le premier element du tableaux la
        print_r($la);
    }

    if (sizeof($lb) >= 2) {

        print_r($lb);
        array_unshift($lb, $lb[sizeof($lb) - 1]); //j'ajoute lb[0] a la fin du tableaux

        unset($lb[0]); //je supprime le premier element du tableaux lb
        print_r($lb);
    }
}

function Algorithme($argc, $argv, &$la, &$lb)
{

    //je vais initialiser mon tableauc la avec les arguments du script
    for ($i = 0; $i < $argc - 1; $i++) {
        $la[$i] = $argv[$i + 1];
    }
    // Tant que le tableau la n'est pas vide je compare le premier elément au minimum. 
    //Si c'est OK alors j'écris cet élément dans le tableau lb et supprime le premier element de la : c'est la fonction pb qui fait cela. 
    //Sinon je décale juste le premier élement de la à la fin par la fonction ra.
    //var_dump("deb",$la);

    while (!empty($la)) {
        //var_dump("rerer",$la[0],min($la));
        if ($la[0] == min($la)) { //le premier element du tabelaux est le plus petit , je le met dans lb
            //var_dump("ddd",$lb);
            pb($la, $lb);
        } else {
            //var_dump("aaa",$la);
            ra($la);
        }
    }
    // je dois maintenant recopier lb dans la
    for ($i = 0; $i < count($lb); $i++) $la[$i] = $lb[$i];
}

Algorithme($argc, $argv, $la, $lb);
print_r($la);
//var_dump("A la fin le tableau la vaut ",$la);


// function Algorithme($argc,$argv,&$la,&$lb)
// {

//     //print_r($a);
//     //var_dump($argc,$argv)
//     //je vais initialiser mon tableauc la avec les arguments du script
//     for($i= 0; $i < $argc - 1; $i++){
//         $la[$i]=$argv[$i +1];
//     }
//     //var_dump("deb",$la);
//     while(!empty($la)){ 
//         var_dump("rerer",$la[0],min($la));
//         if($la[0] == min($la)){ //le premier element du tabelaux est le plus petit , je le met dans lb
//            var_dump("ddd",$lb);
//            pb($la,$lb);
//            //array_shift($la);
//         } else 
//         {
//             var_dump("aaa",$la);
//             ra($la);
//         }
//     }
   
// }

// Algorithme($argc,$argv,$la,$lb);
// var_dump($la);