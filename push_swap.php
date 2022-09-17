<?php


$la = [2, 1 , 3,6, 5, 8];
$lb = [];


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
    }  echo " sa ";
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

function pb($la, $lb)
{
    // print_r($la);
    // print_r($lb);
    if (count($la) > 0) {

        array_unshift($lb, $la[0]);
        array_shift($la);
    }
    // print_r($la);
    // print_r($lb);
    //else echo " rien";
}

pb($la, $lb);

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



function Algorithme($a, $b)
{
    //print_r($a);

    for ($i = 0; $i < sizeof($a) - 1; $i++) {

        //print_r("deb", $i);

        if ($a[0] > $a[1]) {   //les deux premiere elements ne sont pas dans le bonne ordre, alors on les inverses

            sa($a);
            //print_r($i);
        }
        ra($a);
        //print_r($a);
    }
    //var_dump($a);
    ra($a);
    //var_dump($a);
}

Algorithme($la, $lb);
