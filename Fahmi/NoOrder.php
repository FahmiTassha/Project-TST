<?php

class NoOrder {

    /**
     * @param string $name
     * @return mixed
     */

    public function getNoOrder($name) {
        $order = '';
        if ($name === 'fahmi') {
            $order = '01';
        } elseif ($name === 'aldi') {
            $order = '02';
        } else {
            $order = 'Error';
        }
        $number = [
            'order' => $order,
        ];
        return $number;
    }
}
