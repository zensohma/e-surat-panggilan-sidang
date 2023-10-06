<?php

namespace App\Exports;

use App\Models\PanggilanSidang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuratExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PanggilanSidang::select('id', 'no_surat_panggilan', 'tgl_surat_panggilan', 'panggilan_ke', 'tgl_panggilan', 'tempat', 'sekira_pukul', 'alamat', 'agenda', 'panitera', 'panitera_pengganti', 'no_telp_panitera', 'pemohon', 'termohon', 'tahun')->get();
    }

    public function headings(): array 
    {
        return ['ID','no_surat_panggilan', 'tgl_surat_panggilan', 'panggilan_ke', 'tgl_panggilan', 'tempat', 'sekira_pukul', 'alamat', 'agenda', 'panitera', 'panitera_pengganti', 'no_telp_panitera', 'pemohon', 'termohon', 'tahun'];
    }
}
