<?php

class Voucher {

    /**
     * @param int $age
     * @return mixed
     */


    public function getVoucher($age) {
        $level = 2;
        $disc = ($age - 50)* $level;
        $voucher = [
            'discount' => $disc, 
            'age' => $age
        ];
     return $voucher;
    }
}

