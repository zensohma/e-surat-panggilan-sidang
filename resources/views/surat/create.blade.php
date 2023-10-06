@extends('surat.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Surat Baru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('surat.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Hei</strong> Input Wajib Di isi!!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    <form action="{{ route('surat.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun</strong>
                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="ex: 2023" value="{{ old('tahun') }}"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Surat</strong>
                    <input type="text" name="no_surat_panggilan" id="no_surat_panggilan" class="form-control" placeholder="ex: 001/PA-KIP/1/2023" value="{{ old('no_surat') }}"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Surat Panggilan</strong>
                    <input type="text" name="tgl_surat_panggilan" id="tgl_surat_panggilan" class="form-control" placeholder="ex: Samarinda 13 Januari 2023"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Panggilan ke</strong>
                    <input type="text" name="panggilan_ke" class="form-control" placeholder="ex: KE-1 (Satu)"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Panggilan</strong>
                    <input type="text" name="tgl_panggilan" class="form-control" placeholder="ex: Kamis / 19 Januari 2022"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat</strong>
                    <input type="text" name="tempat" class="form-control" placeholder="ex: Ruang Sidang Komisi Informasi Prov. Kaltim"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sekira Pukul</strong>
                    <input type="text" name="sekira_pukul" class="form-control" placeholder="ex: 10.00 wita s.d. selesai"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="ex: Komplek Kantor Bersama Perusda Kaltim JL.Basuki Rahmat No. 45 Samarinda 75111"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agenda</strong>
                    <input type="text" name="agenda" class="form-control" placeholder="ex: Pemeriksaan Awal"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Panitera</strong>
                    <input type="text" name="panitera" class="form-control" placeholder="ex: Doddy Hermawan"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Panitera Pengganti</strong>
                    <input type="text" name="panitera_pengganti" class="form-control" placeholder="ex: Doddy Hermawan"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Telepon Panitera</strong>
                    <input type="text" name="no_telp_panitera" class="form-control" placeholder="ex: 08123456789"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pemohon</strong>
                    <input type="text" name="pemohon" class="form-control" placeholder="ex: Bernade Manalu"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Termohon</strong>
                    <input type="text" name="termohon" class="form-control" placeholder="ex: Pemerintah Kabupaten Kutai Timur"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3"> 
                 <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection