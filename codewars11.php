<?php
function comp(array $a1, $a2)
{
    if (!isset($a1) || !isset($a2))
    {
        return false;
    }
    $a2Temp =$a2;
    foreach ($a1 as $chislo)
    {
        $isHavensqrt = false;
        foreach ($a2Temp as $koren)
        {
         if(sqrt($koren) == $chislo)
         {
             $isHavensqrt = true;
             unset($a2Temp[array_search($koren,$a2Temp)]);
             break;
         }
        }
        if ($isHavensqrt == false)
        {
            return false;
        }
    }
    return true;
}
var_dump(comp([121, 144, 19, 161, 19, 144, 19, 11], [121, 14641, 20736, 361, 25921, 361, 20736, 361]));




//function comp(array $a1, $a2)
//{
//    if (!isset($a1) || !isset($a2)) {
//        return false;
//    }
//    $a2Temp = $a2;
//    foreach ($a1 as $chislo) {
//        $isHavensqrt = false;
//        foreach ($a2Temp as $koren) {
//            if (sqrt($koren) == $chislo) {
//                $isHavensqrt = true;
//                unset($a2Temp[array_search($koren, $a2Temp)]);
//                break;
//            }
//        }
//        if ($isHavensqrt == false) {
//            return false;
//        }
//    }
//    echo count($a2Temp) != 0 ?;
//    return count($a2Temp) != 0 ? false : true;
//}