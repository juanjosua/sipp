<!DOCTYPE html>
<html>
    
    <head>
        <title>{{Auth::user()->name}}'s Dashboard</title>
        <!-- Bootstrap -->
        <link href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/assets/styles.css') }}" rel="stylesheet" media="screen">
        <script src="{{ asset('template/vendors/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Dashboard</a>
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
                        <li class="active">
                            <a href="{{ url('/profile') }}"><i class="icon-chevron-right"></i> Profile</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Pelatihan</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Pelaporan</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Users</a>
                        </li>
                        
                    </ul>
                </div>

                <!--content-->
                @yield('content')
                
            </div>
            <hr>
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
    </body>

</html>