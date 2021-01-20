<?php

namespace Ezha\IndoMonth;

class IndoMonth
{
    public function indoMonth($value)
    {
        $month = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',
        ];

        $split = explode('-', $value);

        return $split[2] . '' . $bulan[(int) $split[1]] . '' . $split[0];
    }
}
