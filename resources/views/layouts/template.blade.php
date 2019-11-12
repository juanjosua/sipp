<!DOCTYPE html>
<html>
    
    <head>
        <title>SIPPMI</title>
        <!-- Bootstrap -->
        <link href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/assets/styles.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/assets/DT_bootstrap.css') }}" rel="stylesheet" media="screen">
        <script src="{{ asset('template/vendors/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- ICON -->
        <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.pmi.or.id/templates/pmi_pusat/images/favicon.ico"/>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><img src="http://www.pmi.or.id/templates/pmi_pusat/images/favicon.ico" width="23"
                    height="23"> Sistem Informasi Pelatih PMI</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> {{Auth::user()->name}} <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">

                                  <!-- <li class="divider"></li> -->
                                  <li>
                                      <a onclick="event.preventDefault();
                                          $('#logout-form').submit();">
                                      Logout</a>
                                  </li>
                                  
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>

                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">

                        <li class="nav-button {{ Route::is('dashboard') ? 'active' : '' }}">
                            <a class="nav-btn-a" href="{{ url('/dashboard') }}"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>

                        <li class="nav-button {{ Route::is('profile') ? 'active' : '' }}">
                            <a class="nav-btn-a" href="{{ url('/profile') }}"><i class="icon-chevron-right"></i> Profile</a>
                        </li>

                        <li class="nav-button {{ Route::is('pelatihan') || Route::is('add-pelatihan') ? 'active' : '' }}">
                            <a class="nav-btn-a" href="{{ url('/pelatihan') }}"><i class="icon-chevron-right"></i> Pelatihan</a>
                        </li>

                        <li class="nav-button {{ Route::is('pelaporan') || Route::is('add-pelaporan') ? 'active' : '' }}">
                            <a class="nav-btn-a" href="{{ url('/pelaporan') }}"><i class="icon-chevron-right"></i> Pelaporan</a>
                        </li>

                        @if(Auth::user()->admin == true)
                        <li class="nav-button {{ Route::is('users') ? 'active' : '' }}">
                            <a class="nav-btn-a" href="{{ url('/users') }}"><i class="icon-chevron-right"></i> Users</a>
                        </li>
                        @endif
                        
                    </ul>
                </div>

                <!--content-->
                @yield('content')
                
            </div>

            <footer style="position:absolute; bottom:0; background:#EEEEEF; width:98%;">
            <div style="display: table; margin: 0 auto;">
                <br>
                <div style="float: left;">
                    <img src="{{  asset('template/images/pmi.png') }}" alt="Logo PMI" width="249" height="166.8">
                </div>
                <div style="float: right; padding-left: 100px;">
                    <strong>MARKAS PUSAT PALANG MERAH INDONESIA</strong>
                    <br><br>
                    JL. Jend. Gatot Subroto Kav. 96 <br>
                    Jakarta 12790 - Indonesia <br><br>
                    <i class="icon-comment"></i> (021) 7992325 <br>
                    <i class="icon-print"></i> (021) 7995188 <br>
                    <i class="icon-envelope"></i> pmi.or.id <br>
                    
                </div>
            </div>
            <hr>
            <p style="float: right;">&copy; Palang Merah Indonesia. All rights reserved.</p>
            </footer>

        </div>
        <!--/.fluid-container-->
        <link href="{{ asset('template/vendors/datepicker.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/vendors/uniform.default.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/vendors/chosen.min.css') }}" rel="stylesheet" media="screen">

        <link href="{{ asset('template/vendors/wysiwyg/bootstrap-wysihtml5.css') }}" rel="stylesheet" media="screen">

        <script src="{{ asset('template/vendors/jquery-1.9.1.js') }}"></script>
        <script src="{{ asset('template/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/vendors/jquery.uniform.min.js') }}"></script>
        <script src="{{ asset('template/vendors/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('template/vendors/bootstrap-datepicker.js') }}"></script>

        <script src="{{ asset('template/vendors/wysiwyg/wysihtml5-0.3.0.js') }}"></script>
        <script src="{{ asset('template/vendors/wysiwyg/bootstrap-wysihtml5.js') }}"></script>

        <script src="{{ asset('template/vendors/wizard/jquery.bootstrap.wizard.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('template/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('template/assets/form-validation.js') }}"></script>
            
        <script src="{{ asset('template/assets/scripts.js') }}"></script>

        <script src="{{ asset('template/vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('template/assets/DT_bootstrap.js') }}"></script>
        <script>

        jQuery(document).ready(function() {   
        FormValidation.init();
        });
            $(function() {
                $(".datepicker").datepicker();
                $(".uniform_on").uniform();
                $(".chzn-select").chosen();
                $('.textarea').wysihtml5();

                $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;
                    var $percent = ($current/$total) * 100;
                    $('#rootwizard').find('.bar').css({width:$percent+'%'});
                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $('#rootwizard').find('.pager .next').hide();
                        $('#rootwizard').find('.pager .finish').show();
                        $('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                        $('#rootwizard').find('.pager .next').show();
                        $('#rootwizard').find('.pager .finish').hide();
                    }
                }});
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find("a[href*='tab1']").trigger('click');
                });
            });
        </script>
        <script>

            $(".nav-button").click(function () {
                // $(".nav-button").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below
                $(".nav-button").removeClass("active");
                $(this).addClass("active");
            });

        </script>
        <!-- <script>
            // load page without refresh
            $('.nav-btn-a').click(function (event) {
                // Avoid the link click from loading a new page
                event.preventDefault();

                // Load the content from the link's href attribute
                // load href content section to yield content section
                $('#content').load($(this).attr('href') + " #content", function(){
                    
                    // profile page
                    $("#edit-button").click(function() {
                        $("#profile").css('display', 'none');
                        $("#edit-profile").css('display', 'block');
                    });

                    $("#reset").click(function() {
                        $("#profile").css('display', 'block');
                        $("#edit-profile").css('display', 'none');
                    });

                    // pelatihan page
                    $('#jenis').change(function() {
                        var value = $(this).val();
                        if (value  ==  "Teknis Pelayanan"){
                            $("#teknis").css("display", "block");
                            $("#jenjang").css("display", "block");
                        }
                    });

                    $('#teknis_pelatihan').change(function() {
                        var value = $(this).val();
                        if (value  ==  "Penyuluh"){
                            $("#penyuluh").css("display", "block");
                        }
                    });

                });
            });
        </script> -->

    </body>

</html>