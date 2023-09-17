<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);


print("<br> Setelah Disorting (Buble Sort) :<br>");
$arr = bubble_sort($arr);
print_r($arr);

function bubble_sort($arr) {
    sort($arr);

    $jumlah = count($arr);
    for ($i = 0; $i < $jumlah - 1; $i++) {
        for ($j = 0; $j < $jumlah - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Menukar posisi bilangan jika diperlukan
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    $jumlah = ($arr);
    print_r($jumlah);
    
  
}

?>