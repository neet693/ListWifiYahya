<?php

namespace App\Imports;

use App\Models\ListWifi;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportListWifi implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ListWifi([
            'unit' => $row['0'],
            'lokasi' => $row['1'],
            'ssid' => $row['2'],
            'password' => $row['3'],
            'ipaddress' => $row['4'],
        ]);
    }
}
