<?php
    function phanSoToiGian($phanSo) {
        $arrPhanSo = explode("/", $phanSo);
        $tuSo = $arrPhanSo[0];
        $mauSo = $arrPhanSo[1];

        if($mauSo==0){
            return false;
        } else {
            if($tuSo==0){
                echo 0;
            } else {
                $US_Tuso = [];
                for($i=1; $i <= abs($tuSo); $i++){
                    if($tuSo%$i==0){
                        $US_Tuso[] = $i;
                    }
                }
        
                $US_Mauso = [];
                for($i=1; $i <= abs($mauSo); $i++){
                    if($mauSo%$i==0){
                        $US_Mauso[] = $i;
                    }
                }
        
                $UCLN = max(array_intersect($US_Tuso, $US_Mauso));
                echo $UCLN.' '.$tuSo/$UCLN.'/'.$mauSo/$UCLN;
            }
        }
    }

    phanSoToiGian('26/8');
?>