<?php

// 1) Crie um array
$array = [];

//2) Popule este array com 7 números
for ($i = 0; $i < 7; $i++) {
    $array[] = rand(0, 100);
}

// 3) Imprima o número da posição 3 do array
echo 'Imprimindo o número da posição 3 do array: ', $array[3];

// 4) Crie uma variável com todas as posições do array no formato de string separado por
// vírgula
$aux = implode(",", array_keys($array));

// 5) Crie um novo array a partir da variável no formato de string que foi criada e destrua o
// array anterior
$newArray = explode(",", $aux);
unset($aux);

// 6) Crie uma condição para verificar se existe o valor 14 no array
if(in_array(14, $array)){

};

// 7) Faça uma busca em cada posição. Se o número da posição atual for menor que o
// da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta
// posição

foreach ($array as $key => $num) {
    if ($key > 0 && ($num < $array[$lastKey])) {
        unset($array[$key]);
    } else {
        $lastKey = $key;
    }
}

// 8) Remova a última posição deste array
array_pop($newArray);

// 9) Conte quantos elementos tem neste array
count($newArray);

// 10) Inverta as posições deste array
array_reverse($newArray);

?>