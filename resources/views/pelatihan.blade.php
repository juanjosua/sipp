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
								Your form validation is successful!
                        	</div>

                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Nomor</th>
						                  <th>Jenis pelatihan</th>
						                  <th>Jenjang pelatihan</th>
										  <th>Tempat pelaksanaan</th>
						                  <th>Waktu pelaksanaan</th>
										  <th>Pelaksanan</th>
						                  <th>Nomor sertifikat</th>
						                </tr>
						              </thead>
						              <tbody>
										@foreach($pelatihans as $pelatihan)
											<tr>
												<td></td>
												<td>{{$pelatihan->jenis}}</td>
												@if( $pelatihan->jenis == 'Teknis' )
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