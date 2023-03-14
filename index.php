<?php


//Write a code that takes an array and returns the second larger element of it.
function Arr($arr)
{
    rsort($arr);
    return $arr[1];
}
print_r(Arr([3,9,1,7,0,2]));


// write a code that takes a lowercase string and returns the first non-repeatng character in it
function firstUniqChar($s) {


    $str = str_split($s);


    $arr = [];


    foreach ($str as $key => $value) {


        if (!empty($arr[$value])) {
            $arr[$value]++;
        } else {
            $arr[$value] = 1;


        }


    }

    foreach ($str as $key2 => $value2) {


        if($arr[$value2]==1&&$value2!=''){

            return $value2;
        }

    }



    return -1;




}

echo firstUniqChar('ieeemansourasociaty');