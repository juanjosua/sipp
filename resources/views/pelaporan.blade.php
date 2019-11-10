@extends('layouts.template')

@section('content')

                <!--/span-->
                <div class="span9" id="content">
                    

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Jenis pelatihan yang pernah diadakan</div>
                            </div>

							<div id="success" class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Your form validation is successful!
                        	</div>

                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
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
                                </div>
                            </div>

                            <div class="form-actions">
	                            <a href="{{ route('add-pelaporan') }}" class="btn btn-primary">Tambah</a>
	                            <a href="" class="btn btn-success">Unduh</a>
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