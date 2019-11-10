@extends('layouts.template')

@section('content')

                <!--/span-->
                <div class="span9" id="content">
                    

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar seluruh user</div>
                            </div>

							<div id="success" class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Data user berhasil diubah!
                        	</div>

                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Nama</th>
						                  <th>Email</th>
						                  <th>Jenis kelamin</th>
						                  <th>Nomor telepon</th>
						                  <th>Status di PMI</th>
                                          <th>Status Admin</th>
						                </tr>
						              </thead>
						              <tbody>
										@foreach($users as $user)
											<tr>
												<td>{{$user->name}}</td>
												<td>{{$user->email}}</td>
												<td>{{$user->gender}}</td>
												<td>{{$user->phone}}</td>
                                                <td>{{$user->status}}</td>
                                                <td>
                                                
                                                @if($user->admin == true)
                                                <button disabled type="button" class="btn btn-inverse">Admin</button>
                                                @else
                                                <button disabled type="button" class="btn btn-inverse">User</button>
                                                <a href="{{ url('/users/update/' . $user->id) }}">
                                                    <button type="button" class="btn btn-primary">Admin</button>
                                                </a>
                                                @endif

                                                </td>
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