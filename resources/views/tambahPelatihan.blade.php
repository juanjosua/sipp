@extends('layouts.template')

@section('content')

<!--/span-->
<div class="span9" id="content">

    <div id="pelatihan" style="display: block;" class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Form pelatihan</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form class="form-horizontal" method="POST" action="{{ url('pelatihan/create/store') }}">
                    @csrf
                        <fieldset>
                        <legend>Silahkan tambahkan data pelatihan yang pernah Anda ikuti</legend>

                        <div class="control-group">
                            <label class="control-label">Jenis pelatihan</label>
                            <div class="controls">
                                <select id="jenis" name="jenis">
                                    <option disabled selected>Pilih jenis pelatihan</option>
                                    <option value="Teknis Pelayanan">Teknis Pelayanan</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Generasi Muda dan Relawan">Generasi Muda dan Relawan</option>
                                </select> 
                            </div>
                        </div>

                        <div id="teknis" style="display: none;" class="control-group">
                            <label class="control-label">Nama pelatihan</label>
                            <div class="controls">
                                <select id="teknis_pelatihan" name="nama_pelatihan">
                                    <option disabled selected>Pilih nama pelatihan</option>
                                    <option value="Pertolongan Pertama">Pertolongan Pertama</option>
                                    <option value="Diseminator">Diseminator</option>
                                    <option value="Logistik">Logistik</option>
                                    <option value="Perawatan Keluarga">Perawatan Keluarga</option>
                                    <option value="Assesment">Assesment</option>
                                    <option value="Tanggap Darurat Bencana">Tanggap Darurat Bencana</option>
                                    <option value="Kesehatan Remaja">Kesehatan Remaja</option>
                                    <option value="Pelatih PMI">Pelatih PMI</option>
                                    <option value="Manajer Tanggap Darurat Bencana">Manajer Tanggap Darurat Bencana</option>
                                    <option value="Psykososial Support Program">Psykososial Support Program</option>
                                    <option value="Ambulans">Ambulans</option>
                                    <option value="Air dan Sanitasi">Air dan Sanitasi</option>
                                    <option value="PP Berbasis">PP Berbasis</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Sistem Peringatan">Sistem Peringatan</option>
                                    <option value="Penyuluh">Penyuluh</option>
                                    <option value="Kesiapsiagaan Bencana Berbasis Masyarakat">Kesiapsiagaan Bencana Berbasis Masyarakat</option>
                                    <option value="Pengurangan Resiko Terpadu Masyarakat">Pengurangan Resiko Terpadu Masyarakat</option>
                                </select> 
                            </div>
                        </div>

                        <div id="penyuluh" style="display: none;" class="control-group">
                            <label class="control-label">Tipe Penyuluh</label>
                            <div class="controls">
                                <select name="tipe_penyuluh">
                                    <option disabled selected>Pilih tipe penyuluh</option>
                                    <option value="HIV/AIDS">HIV/AIDS</option>
                                    <option value="Flu Burung">Flu Burung</option>
                                    <option value="Filariasis">Filariasis</option>
                                    <option value="Malaria">Malaria</option>
                                </select> 
                            </div>
                        </div>

                        <div id="manajemen" style="display: none;" class="control-group">
                            <label class="control-label">Nama pelatihan</label>
                            <div class="controls">
                                <select name="nama_pelatihan">
                                    <option disabled selected>Pilih nama pelatihan</option>
                                    <option value="Manajemen Pelatihan">Manajemen Pelatihan</option>
                                    <option value="Kehumasan">Kehumasan</option>
                                    <option value="PSD">PSD</option>
                                    <option value="Proses Perencanaan Proyek">Proses Perencanaan Proyek</option>
                                    <option value="Manajemen Markas">Manajemen Markas</option>
                                    <option value="Kepemimpinan">Kepemimpinan</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Manajemen Bencana">Manajemen Bencana</option>
                                </select> 
                            </div>
                        </div>

                        <div id="generasi" style="display: none;" class="control-group">
                            <label class="control-label">Nama pelatihan</label>
                            <div class="controls">
                                <select name="nama_pelatihan">
                                    <option disabled selected>Pilih nama pelatihan</option>
                                    <option value="Anggota PMR Mula">Anggota PMR Mula</option>
                                    <option value="Anggota PMR Madya">Anggota PMR Madya</option>
                                    <option value="Anggota PMR Wira">Anggota PMR Wira</option>
                                    <option value="Orientasi Pembina PMR">Orientasi Pembina PMR</option>
                                    <option value="Diklatdas KSR">Diklatdas KSR</option>
                                </select> 
                            </div>
                        </div>

                        <div id="jenjang" style="display: none;" class="control-group">
                            <label class="control-label">Jenjang pelatihan</label>
                            <div class="controls">
                                <select name="jenjang">
                                    <option disabled selected>Pilih jenjang pelatihan</option>
                                    <option value="Pelatih utama">Pelatih utama</option>
                                    <option value="Pelatih">Pelatih</option>
                                    <option value="Asisten pelatih">Asisten pelatih</option>
                                    <option value="Pelaku">Pelaku</option>
                                </select> 
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Tempat pelaksanaan</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="tempat">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Waktu pelaksanaan</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="date" name="waktu">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Pelaksana</label>
                            <div class="controls">
                            <input class="input-xlarge focused" id="focusedInput" type="text" name="pelaksana">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Nomor sertifikat</label>
                            <div class="controls">
                            <input class="input-xlarge focused" id="focusedInput" type="text" name="sertif">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @if( Auth::user()->pelatihans->count() > 0 )
                                <a href="{{ route('pelatihan') }}" class="btn">Cancel</a>
                            @else
                                <a class="btn" disabled>Cancel</a>
                            @endif
                        </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
</div>

<script>
    $('#jenis').change(function() {
        var value = $(this).val();
        if (value  ==  "Teknis Pelayanan"){
            $("#teknis").css("display", "block");
            $("#jenjang").css("display", "block");
            $("#manajemen").css("display", "none");
            $("#generasi").css("display", "none");
        }
    });

    $('#jenis').change(function() {
        var value = $(this).val();
        if (value  ==  "Manajemen"){
            $("#teknis").css("display", "none");
            $("#jenjang").css("display", "none");
            $("#manajemen").css("display", "block");
            $("#generasi").css("display", "none");
            $("#penyuluh").css("display", "none");
        }
    });

    $('#jenis').change(function() {
        var value = $(this).val();
        if (value  ==  "Generasi Muda dan Relawan"){
            $("#teknis").css("display", "none");
            $("#jenjang").css("display", "none");
            $("#manajemen").css("display", "none");
            $("#generasi").css("display", "block");
            $("#penyuluh").css("display", "none");
        }
    });

    $('#teknis_pelatihan').change(function() {
        var value = $(this).val();
        if (value  ==  "Penyuluh"){
            $("#penyuluh").css("display", "block");
        }
    });
</script>

@endsection