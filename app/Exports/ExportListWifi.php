<?php

namespace App\Exports;

use App\Models\ListWifi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportListWifi implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ListWifi::all();
    }
    public function headings(): array
    {
        return [
            'Unit',
            'Lokasi',
            'SSID',
            'Password',
            'Ip Address',
        ];
    }
}
