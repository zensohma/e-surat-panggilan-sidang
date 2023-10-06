@extends('surat.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Surat Panggilan</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('surat.create') }}" class="btn btn-success">Tambah Surat Panggilan Sidang Baru</a>
            </div>
            <div class="pull-left">
                <a href="{{ route('surat.export') }}" class="btn btn-primary">Export to Excel</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No Surat</th>
            <th>Tanggal Surat</th>
            <th>Panggilan Ke</th>
            <th>Taanggal Panggilan</th>
            <th>Tempat</th>
            <th>Sekira Pukul</th>
            <th>Alamat</th>
            <th>Agenda</th>
            <th>Panitera</th>
            <th>Panitera Pengganti</th>
            <th>No. Telepon Panitera</th>
            <th>Pemohon</th>
            <th>Termohon</th>
            <th>Tahun</th>
            <th width="280px">Actions</th>
   
    @foreach ($surats as $surat)
        <tr>
            <td>{{ $surat->no_surat_panggilan }}</td>
            <td>{{ $surat->tgl_surat_panggilan }}</td>
            <td>{{ $surat->panggilan_ke }}</td>
            <td>{{ $surat->tgl_panggilan }}</td>
            <td>{{ $surat->tempat }}</td>
            <td>{{ $surat->sekira_pukul }}</td>
            <td>{{ $surat->alamat }}</td>
            <td>{{ $surat->agenda }}</td>
            <td>{{ $surat->panitera }}</td>
            <td>{{ $surat->panitera_pengganti }}</td>
            <td>{{ $surat->no_telp_panitera }}</td>
            <td>{{ $surat->pemohon }}</td>
            <td>{{ $surat->termohon }}</td>
            <td>{{ $surat->tahun }}</td>
            <td>
                <form action="{{ route('surat.destroy', $surat->id) }}" method="POST">
                    <a href="{{ route('surat.edit', $surat->id) }}" class="btn btn-info">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                <a href="{{ route('surat.cetak.index', $surat->id) }}" class="btn btn-primary">Export to PDF</a>
            </td>
        </tr>
    @endforeach
</table>
{{-- {!! $surats->links() !!}   --}}
@endsection

