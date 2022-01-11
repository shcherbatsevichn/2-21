<?php error_reporting(-1);
//В массиве А(N) выбрать без повторений все элементы, встречающиеся более одного раза.     
$A = [1, -7, -4, 2, -7, 2, 3, 3, -199, 4, 1, 4, -20, 6, 6, 3, 8, -4, 13, 99];
$p = 4;

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = get_notuni_elem($A);
print_r($a);

function get_notuni_elem($array){ //формируетт массив из уникальных эементов 
    $res = [];
    $n = 0;
    for ($i = 0; $i < count($array); $i++){
        $flag = 0;
        if(count_elem_array($array, $array[$i]) > 1){
            for($n = 0; $n < count($res); $n++){
                if($array[$i] == $res[$n]){
                    $flag = 1;
                    break;
                }
            }
            if($flag == 1){
                continue;
            }
           $res[$n] = $array[$i];
           $n++; 
        }
    }
    return $res;
}        

function count_elem_array($array, $elem){ //считает, сколько раз элемент встречается в массиве
    $counter = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $elem){
            $counter++;
        }
    }
    return $counter;  
}