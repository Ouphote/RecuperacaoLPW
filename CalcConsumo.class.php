<?php

    class CalcConsumo{
        public function calcConsum($time, $wTotal){
            $total = $wTotal / 1000;
            $value = 0;

            if ($total <= 50) {
                $value += $this->calcValue($total, $time, 2.99);
                $value = number_format($value, 2, ',', '');
                return $value;
            } else {
                $value += $this->calcValue(50, $time, 2.99);
                $total -= 50;
                if ($total <= 100) {
                    $value += $this->calcValue($total, $time, 4.10);
                    $value = number_format($value, 2, ',', '');
                    return $value;
                } else {
                    $value += $this->calcValue(100, $time, 4.10);
                    $total -= 100;
                    if ($total <= 100) {
                        $value += $this->calcValue($total, $time, 5.40);
                        $value = number_format($value, 2, ',', '');
                        return $value;
                    } else {
                        $value += $this->calcValue(100, $time, 5.40);
                        $total -= 100;
                        $value += $this->calcValue($total, $time, 6.20);
                        $value = number_format($value, 2, ',', '');
                        return $value;
                    }
                }
            }
        }

        public function calcValue($total, $time, $price){
            $value = ($total * $time) * $price;
            return $value;
        }
    }

?>