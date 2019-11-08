@extends('layouts.template')

@section('content')
<!--/span-->
<div class="span9" id="content">

      <div class="row-fluid">
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
                        <legend>Form Components</legend>

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
                            <select id="select01" name="status" class="chzn-select">
                              <option value="Relawan" {{ (Auth::user()->status=="Relawan")? "selected" : "" }}>Relawan</option>
                              <option value="Staf" {{ (Auth::user()->status=="Staf")? "selected" : "" }}>Staf</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="control-group">
                          <label class="control-label" for="textarea">Alamat<span class="required">*</span> </label>
                          <div class="controls">
                            <textarea name="address" value="{{ Auth::user()->address }}" class="input-xlarge textarea" placeholder="Masukkan alamat..." style="width: 810px; height: 200px"></textarea>
                          </div>
                        </div>
                        
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          <button type="reset" class="btn">Cancel</button>
                        </div>
                      </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <!-- /block -->
    </div>

</div>
@endsection