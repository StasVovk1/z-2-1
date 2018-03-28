<?php 
    $mass = [1,2,3,4,5,-5,6,7,8,3,5,-7,7,4,2,4,5];

    echo 'Исходные данные: '.json_encode($mass);
    $perem = true;
    $kol = 0;
    $summ = 0;
    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] >= 0 && $perem){
            $kol++;
        }else {
            $perem = false;
        }
        if (($i % 2 == 0) && !$perem){
            $summ += $mass[$i];
        }
        if ($mass[$i] < 0 ){
            $summ = 0;
        }
    }

    echo '<br>Ответ: 
          <br> а) '.$kol.'
          <br> б) '.$summ;
    

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>