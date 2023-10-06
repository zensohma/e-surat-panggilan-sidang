<?php

namespace App\Http\Controllers;

use App\Exports\SuratExport;
use App\Models\PanggilanSidang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class SuratController extends Controller
{
    public function index(): View
    {
        $surats = PanggilanSidang::latest()->paginate(5);

        return view('surat.index', compact('surats'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('surat.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_surat_panggilan' => 'required',
            'tgl_surat_panggilan' => 'required',
            'panggilan_ke' => 'required',
            'tgl_panggilan' => 'required',
            'tempat' => 'required',
            'sekira_pukul' => 'required',
            'alamat' => 'required',
            'agenda' => 'required',
            'panitera' => 'required',
            'panitera_pengganti' => 'required',
            'no_telp_panitera' => 'required',
            'pemohon' => 'required',
            'termohon' => 'required',
            'tahun' => 'required'
        ]);

        PanggilanSidang::create($request->all());
        return redirect()->route('surat.index')->with('success', 'Surat Berhasil di tambahkan!!');
    }

    public function destroy(PanggilanSidang $surat)
    {
        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Data Berhasil di hapus');
    }

    public function edit(PanggilanSidang $surat)
    {
        return view('surat.edit', compact('surat'));
    }

    public function update(Request $request, PanggilanSidang $surat): RedirectResponse
    {
        $request->validate([
            'no_surat_panggilan' => 'required',
            'tgl_surat_panggilan' => 'required',
            'panggilan_ke' => 'required',
            'tgl_panggilan' => 'required',
            'tempat' => 'required',
            'sekira_pukul' => 'required',
            'alamat' => 'required',
            'agenda' => 'required',
            'panitera' => 'required',
            'panitera_pengganti' => 'required',
            'no_telp_panitera' => 'required',
            'pemohon' => 'required',
            'termohon' => 'required',
            'tahun' => 'required'
        ]);

        $surat->update($request->all());

        return redirect()->route('surat.index')->with('success', 'Data Surat berhasil di update');
    }

    public function exportPDF($id) {
        $data = PanggilanSidang::findOrFail($id);
        $dataSurat = ['surat' => $data];
        $pdf = PDF::loadview('surat.cetak', $dataSurat);
        return $pdf->stream('pdf_file.pdf');
    }
   
    public function exportExcel() {
        return Excel::download(new SuratExport, 'surat.xlsx');
    }
}
