<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Pelaporan</title>
    <link href="{{ public_path('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ public_path('template/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ public_path('template/assets/DT_bootstrap.css') }}" rel="stylesheet" media="screen">
  </head>
  <body>
  <div style="text-align: center;"><h1>Daftar Pelaporan</h1></div><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nama pelatih</th>
                    <th>Jenis pelatihan</th>
                    <th>Nama pelatihan</th>
                    <th>Tipe penyuluh</th>
                    <th>Jenjang</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Jumlah peserta</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pelaporans->reverse() as $pelaporan)
                    <tr>
                        <td>{{$pelaporan->nama_pelatih}}</td>
                        <td>{{$pelaporan->jenis}}</td>

                        <!-- nama pelatihan -->
                        @if( $pelaporan->jenis == 'Teknis Pelayanan' )
                            <td>{{ $pelaporan->teknis->nama_pelatihan }}</td>
                        @elseif ($pelaporan->jenis == 'Manajemen')
                            <td>{{ $pelaporan->manajemen->nama_pelatihan }}</td>
                        @else
                            <td>{{ $pelaporan->generasi->nama_pelatihan }}</td>
                        @endif

                        <!-- tipe penyuluh -->
                        @if( $pelaporan->jenis == 'Teknis Pelayanan' )
                            @if( $pelaporan->teknis->nama_pelatihan == 'Penyuluh' )
                                <td>{{ $pelaporan->teknis->tipe_penyuluh }}</td>
                            @else
                                <td> - </td>
                            @endif
                        @else
                            <td> - </td>
                        @endif

                        <!-- jenjang -->
                        @if( $pelaporan->jenis == 'Teknis Pelayanan' )
                            <td>{{ $pelaporan->teknis->jenjang }}</td>
                        @else
                            <td> - </td>
                        @endif

                        <td>{{$pelaporan->tempat}}</td>
                        <td>{{$pelaporan->waktu}}</td>
                        <td>{{$pelaporan->peserta}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
  </body>
</html>