@extends('layouts.template')

@section('content')

                <!--/span-->
                <div class="span9" id="content">
                    

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Jenis pelatihan yang pernah diikuti</div>
                            </div>

							<div id="success" class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Pelatihan berhasil ditambahkan!
                        	</div>

                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Jenis pelatihan</th>
						                  <th>Nama pelatihan</th>
						                  <th>Tipe penyuluh</th>
						                  <th>Jenjang</th>
										  <th>Tempat</th>
						                  <th>Waktu</th>
										  <th>Pelaksana</th>
						                  <th>Nomor sertifikat</th>
						                </tr>
						              </thead>
						              <tbody>
										@foreach($pelatihans->reverse() as $pelatihan)
											<tr>
												<td>{{$pelatihan->jenis}}</td>

												<!-- nama pelatihan -->
												@if( $pelatihan->jenis == 'Teknis Pelayanan' )
													<td>{{ $pelatihan->teknis->nama_pelatihan }}</td>
												@elseif ($pelatihan->jenis == 'Manajemen')
													<td>{{ $pelatihan->manajemen->nama_pelatihan }}</td>
												@else
													<td>{{ $pelatihan->generasi->nama_pelatihan }}</td>
												@endif

												<!-- tipe penyuluh -->
												@if( $pelatihan->jenis == 'Teknis Pelayanan' )
													@if( $pelatihan->teknis->nama_pelatihan == 'Penyuluh' )
														<td>{{ $pelatihan->teknis->tipe_penyuluh }}</td>
													@else
														<td> - </td>
													@endif
												@else
													<td> - </td>
												@endif

												<!-- jenjang -->
												@if( $pelatihan->jenis == 'Teknis Pelayanan' )
													<td>{{ $pelatihan->teknis->jenjang }}</td>
												@else
													<td> - </td>
												@endif

												<td>{{$pelatihan->tempat}}</td>
												<td>{{$pelatihan->waktu}}</td>
												<td>{{$pelatihan->pelaksana}}</td>
												<td>{{$pelatihan->sertif}}</td>
											</tr>
										@endforeach
						              </tbody>
						            </table>
                                </div>
                            </div>

                            <div class="form-actions">
	                            <a href="{{ route('add-pelatihan') }}" class="btn btn-primary">Tambah</a>
                        	</div>

                        </div>
                        <!-- /block -->
                    </div>
                    
                </div>

	<!-- message for success update profile -->
	@if (session()->has('message'))

	<script>
		$("#success").removeClass("hide");
		var timer = setTimeout(function() {
			$("#success").addClass("hide");
		}, 2000);
	</script>

	@endif
	
@endsection