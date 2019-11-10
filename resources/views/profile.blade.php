@extends('layouts.template')

@section('content')
<!--/span-->
<div class="span9" id="content">

  <div id="profile" style="display: block;" class="row-fluid">
      <!-- block -->
      <div class="block">
          <div class="navbar navbar-inner block-header">
              <div class="muted pull-left">Profile</div>
          </div>
          <div class="block-content collapse in">
              <div class="span12">
                    <form class="form-horizontal">
                    <fieldset>
                      <legend>Data diri Anda</legend>

                      <div id="success" class="alert alert-success hide">
                        <button class="close" data-dismiss="alert"></button>
                        Data diri Anda berhasil diperbarui!
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Nama lengkap</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->name }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Alamat email</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->email }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Jenis kelamin</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->gender }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Tempat lahir</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->pob }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Tanggal lahir</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->dob }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Nomor telepon</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->phone }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Status di PMI</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->status }}" disabled>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="focusedInput">Alamat</label>
                        <div class="controls">
                          <input class="input-xlarge focused" id="focusedInput" type="text" value="{{ Auth::user()->address }}" disabled>
                        </div>
                      </div>

                      <div class="form-actions">
                        <a id="edit-button" class="btn btn-primary">Edit</a>
                      </div>

                    </fieldset>
                  </form>
              </div>
          </div>
      </div>
      <!-- /block -->
  </div>

      <div id="edit-profile" class="row-fluid" style="display: none;">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Profile</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form id="form_sample_1" class="form-horizontal" method="POST" action="{{ url('profile/update/' . Auth::user()->id) }}">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                      <fieldset>
                        <legend>Ubah data diri Anda</legend>

                        <div class="control-group">
                          <label class="control-label" for="name">Nama lengkap<span class="required">*</span> </label>
                          <div class="controls">
                            <input type="text" class="span6" id="name" name="name" value="{{ Auth::user()->name }}">
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="email">Alamat email<span class="required">*</span> </label>
                          <div class="controls">
                            <input type="email" class="span6" id="email" name="email" value="{{ Auth::user()->email }}">
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label">Jenis kelamin<span class="required">*</span> </label>
                          <div class="controls">
                            <label for="pria">
                              <input id="pria" type="radio" name="gender" value="Pria" {{ (Auth::user()->gender=="Pria")? "checked" : "" }}>
                              Pria
                            </label>
                            <label for="wanita">
                              <input id="wanita" type="radio" name="gender" value="Wanita" {{ (Auth::user()->gender=="Wanita")? "checked" : "" }}>
                              Wanita
                            </label>
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="pob">Tempat lahir<span class="required">*</span> </label>
                          <div class="controls">
                            <input type="text" class="span6" id="pob" name="pob" value="{{ Auth::user()->pob }}">
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="date01">Tanggal lahir<span class="required">*</span> </label>
                          <div class="controls">
                            <input type="date" class="input-xlarge" id="date01" name="dob" value="{{ Auth::user()->dob }}">
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label">Nomor telepon<span class="required">*</span> </label>
                          <div class="controls">
                            <input name="phone" type="text" class="span6 m-wrap" value="{{ Auth::user()->phone }}">
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="select01">Status di PMI<span class="required">*</span> </label>
                          <div class="controls">
                            <select id="select01" name="status">
                              <option value="Relawan" {{ (Auth::user()->status=="Relawan")? "selected" : "" }}>Relawan</option>
                              <option value="Staf" {{ (Auth::user()->status=="Staf")? "selected" : "" }}>Staf</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="control-group">
                          <label class="control-label" for="textarea">Alamat<span class="required">*</span> </label>
                          <div class="controls">
                            <textarea name="address" class="input-xlarge textarea" style="width: 810px; height: 200px">{{ Auth::user()->address }}</textarea>
                          </div>
                        </div>
                        
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          <button id="reset" type="reset" class="btn">Cancel</button>
                        </div>
                      </fieldset>
                    </form>

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

  <!-- display edit profile form -->
  <script>
    $("#edit-button").click(function() {
      $("#profile").css('display', 'none');
      $("#edit-profile").css('display', 'block');
    });

    $("#reset").click(function() {
      $("#profile").css('display', 'block');
      $("#edit-profile").css('display', 'none');
    });
  </script>

@endsection