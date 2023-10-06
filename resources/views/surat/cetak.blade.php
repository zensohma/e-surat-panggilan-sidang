<!DOCTYPE html>
<html>
<head>
  <title>Layout Surat</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
    }

    .kop-surat {
      text-align: left;
      margin-bottom: 20px;
    }

    .kop-surat h1 {
      font-size: 20px;
      font-weight: bold;
    }

    .kop-surat p {
      font-size: 16px;
      margin-bottom: 5px;
      text-align: right;
      margin-top: 60px;
    }

    .tempat-tanggal {
      text-align: left;
      margin-bottom: 20px;
      line-height: 5px;
      margin-left: 15px;
    }

    .tempat-tanggal h3 {
      font-size: 16px;
      line-height: 5px;
      margin-left: 30px;
    }

    .perihal {
      text-align: left;
      margin-bottom: 20px;
      /* margin-left: 500px; */
    }

    .perihal h3 {
      font-size: 16px;
      font-weight: bold;
      
    }

    .isi-surat {
      text-align: justify;
      margin-bottom: 20px;
      margin-left: 100px;
      margin-right: 40px
    }

    .isi-surat p {
      font-size: 16px;
    }

    .ttd {
      text-align: right;
    }

    .ttd h3 {
      font-size: 16px;
      font-weight: bold;
    }

    .ttd p {
      font-size: 16px;
    }
    
    .panitera {
      text-align: right;
      margin-bottom: 20px;
      margin-right: 115px;
    }

    .catatan {
      margin-right: 300px; 
    }

    .nomor {
      margin-left: 50px;
    }


    .perihal {
      margin-left: 48px
    }

    .lampiran {
      margin-left: 32px;
    }
    
    .catatan {
      text-align: justify;
      margin-top: 1px;
    }
    
    .kepada {
      margin-left: 100px;
      position: relative;
      bottom: 36px;
      font-size: 16px;
      font-weight: bold;
    }

    .di-tempat {
      margin-left: 145px;
      position: absolute;
      top: 240px;
      margin-top: 20px;
    }

    .hari-tanggal {
      /* margin-left: 20px; */
    }

    .pukul {
      margin-left: 5px;
    }

    .tempat {
      margin-left: 38px;
    }

    .alamat {
      margin-left: 41px;
    }

    .agenda {
      margin-left: 39px;
    }

    .panitera-dua {
      margin-right: 35px;

    }

    .pemohon-termohon {
      text-align: center;
      margin-bottom: 50px;
    }

    .kepada-yth p {
      font-size: 16px;
      margin-left: 15px;
    }

    .sub-isi {
      top: 60px;
      position: relative;
    }
    
    .kepada-yth span {
      margin-left: 15px;
    }

    .kepada-yth ol {
      margin-left: 123px;
    }

    .isi-kedua {
      line-height: 10px;
    }
  </style>
</head>
<body>
{{-- @foreach ($surats as $surat) --}}
  <div class="kop-surat">
    <p>{{ $surat->tgl_surat_panggilan }}</p>
  </div>

  <div class="tempat-tanggal">
    <p>Nomor    <span class="nomor">:</span><b style="margin-left: 20px;">{{ $surat->no_surat_panggilan }}</b></p>
    <p>Lampiran <span class="lampiran">:</span><b style="margin-left: 23px;">1 (satu) berkas untuk (---)</b></p>
    <p>Perihal  <span class="perihal">:</span> <span style="margin-left: 19px;">Panggilan sidang ajudikasi nonlitigasi</span> <b>{{ $surat->panggilan_ke }}</b></p>
  </div>
  
  <div class="kepada-yth">
    <p>Kepada Yth <span>:</span> 
      <ol class="kepada">
        <li><b>{{ $surat->pemohon }}</b></li>
        <li><b>{{ $surat->termohon }}</b></li>
      </ol>  
    </p>
    
  </div>
  <h3 class="di-tempat">DI-TEMPAT</h3>

  <div class="isi-surat">
    <p>Dengan hormat,</p>


    <p>Berdasarkan perintah Majelis Komisioner Komisi Informasi Provinsi Kalimantan Timur yang memeriksa sengketa informasi publik nomor: <b>Nomor: 001/REG-PSI/KI-KALTIM/1/2023</b>, Panitera Komisi Informasi Provinsi Kalimantan Timur memanggil Saudara/i untuk hadir dalam sidang ajudikasi nonlitigasi terkait sengketa informasi publik tersebut antara:</p>
    <div class="pemohon-termohon">
      <p class="pemohon"><b>{{ $surat->pemohon }}</b> Sebagai <b>Pemohon</b></p>
      <p>Terhadap</p>
      <p class="termohon"><b>{{ $surat->termohon }}</b> Sebagai <b>Termohon</b></p>
    </div>
  <div class="isi-kedua">
    <p>yang diselenggarakan pada:</p>
    <p>Hari/Tanggal <span style="margin-left: 19px;">:&nbsp;&nbsp;&nbsp;</span> <span style="margin-left: 500px;"><b>{{ $surat->tgl_panggilan }}</b></span></p>

    <p>Tempat <span style="margin-left: 55px;">:&nbsp;&nbsp;&nbsp;</span> <span style="margin-left: 10rem;"><b>{{ $surat->tempat }}</b></span></p>

    <p>Sekira Pukul <span style="margin-left: 22px;">:&nbsp;&nbsp;&nbsp;</span> <span><b>{{ $surat->sekira_pukul }}</b></p></span>

    <p>Alamat <span style="margin-left: 58px;">:&nbsp;&nbsp;&nbsp;</span><b> <span>{{ $surat->alamat }}</b></p></span>

    <p>Agenda <span style="margin-left: 3.5rem;">:&nbsp;&nbsp;&nbsp;</span><b> <span>{{ $surat->agenda }}</b></p></span>
  </div>
    <br><br>
    <p>Jika Saudara/i berhalangan hadir harap memberitahukan kepada Panitera Komisi Informasi Provinsi Kalimantan Timur secara tertulis paling lambat 2 (dua) hari kerja sebelum sidang ajudikasi nonlitigasi dimulai</p>
    <br><br><br><br><br><br><br><br><br><br>

    
    <div class="sub-isi">
      <p>Apabila Saudara/i memberi kuasa harap surat kuasa dibawa ke sidang ajudikasi nonlitigasi agar penerima kuasa dapat mengambil keputusan selama sidang ajudikasi nonlitigasi berlangsung</p>
      <p>Demikian panggilan untuk menghadiri sidang ajudikasi nonlitigasi penyelesaian sengketa informasi publik dalam sengketa a quo teregister di Komisi informasi Provinsi Kalimantan Timur ini disampaikan berdasarkan pasal 24 Peraturan Komisi Informasi (Perki) Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik dan pasal 15 huruf I dan pasal 16 huruf c Undang Undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik</p>
    </div>  
  </div>
  
  {{-- <div class="ttd">
    <h3>Hormat kami,</h3>
  </div> --}}
  
  <div class="panitera">
    <br><br>
    <p class="panitera-dua"><b>Panitera,</b></p>
    <br><br><br><br>
    <p><b>{{ $surat->panitera }}</b></p>
  </div>

  <div class="catatan">
    <p>Catatan:</p>
    <ol>
      <li>Dalam hal Pemohon dan/atau kuasanya tidak hadir dalam persidangan selama 2 (dua) kali tanpa alasan yang jelas, Permohon dinyatakan gugur
          <br><b>Pasal 30 Perki 1 Tahun 2013</b>
      </li>
      <br>
      <li>Dalam hal Termohon dan/atau kuasanya tidak hadir dalam persidangan, Majelis Komisioner dapat memeriksa dan memutus sengketa tanpa kehadiran Termohon
        <br>
        <b>Pasal 31 Perki 1 Tahun 2013</b>
      </li>
      <br>
      <li>Para pihak yang menghadiri sidang ajudikasi nonlitigasi berpakaian rapi dan sopan</li>
      <br>
      <li><b>{{ $surat->panitera_pengganti }}</b>/Panitera Pengganti <b>{{ $surat->no_telp_panitera }}</b></li>
    </ol>
  </div>
{{-- @endforeach --}}
</body>
</html>

