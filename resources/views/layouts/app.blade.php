<!DOCTYPE HTML>
<html lang="en"> 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#000">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pipeline of the Future (PotF)</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::to('icons/tubes.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('fonts/font-awesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{URL::to('fonts/google/googleapis.css')}}">
    <link rel="stylesheet" href="{{URL::to('styles/placeholder/placeholder-loading.min.css')}}">
    <link rel="manifest" href="{{URL::to('_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('app/icons/icon-192x192.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('styles/hover/hover.css') }}">

 

    <style>
        .sidebar-active{
            background-color:#9292924a !important
        }

        .theme-dark select option {
            background: #1b1d21;
        }
        .color-invert{
            color:black;
        }
        

    </style>

    @stack('styles')

</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader" style="background-color:transparent">
        {{-- <div class="spinner-border color-highlight" role="status"></div> --}}
    </div>

    <div id="page">

        <div id="custom"></div>


        <div class="header header-fixed header-logo-center">
            <div class="row">
                <div id="topbar-left" class="col-4 text-center">
                    <a href="#" class="text-center"><h6 class="color-highlight" style="line-height: 50px;padding-left: 50px;">CONFIGURATION</h6></a>
                </div>
                <div id="topbar-right" class="col-6 text-center">
                    <a href="#" class="text-center"><h6 class="color-highlight" style="line-height: 50px">{{$topBarTitle ? $topBarTitle : ''}}</h6></a>

                    
                </div>
                <div id="theme-switch" class="col-2 text-center">
                    <div class="custom-control scale-switch ios-switch float-right
                    " style="text-align: right;margin-right: unset;position: unset;padding-left: unset;transform: scale(.7, .7);">
                        <input data-toggle-theme="" type="checkbox" class="ios-input" id="switch-dark-mode">
                        <label class="custom-control-label" for="switch-dark-mode" style="background-color: transparent !important;"></label>
                    </div>
                </div>
            </div>
  
        </div>
      

        <div class="page-content pb-0" style="height:100vh">

            <a href="#" data-menu="menu-sidebar-config" class="icon icon-xs rounded-xs shadow-l me-1 bg-highlight" style="position: fixed;top: 48vh;right: 0;z-index:9999"><i class="fas fa-cog fa-spin"></i></a>

            <input type="hidden" name="allow_sw" id="allow_sw" value="true">

            <div style="height:100%;overflow-y:scroll">
                @yield('content')
            </div>
           

        </div>

        @stack('content2')

        <div id="menu-sidebar-config" class="bg-white menu menu-box-right" data-menu-width="320" data-menu-effect="menu-push">
            <div class="me-3 ms-3 mt-4 pt-2">
            <span class="text-uppercase font-900 font-11 opacity-30">Account Settings</span>
            <div class="list-group list-custom-small">
            <a href="#" data-toggle-theme="" data-trigger-switch="switch-dark1-mode">
                <i class="fa font-12 fa-moon bg-gray-dark rounded-xl"></i>
                <span>Dark Mode</span>
                <div class="custom-control scale-switch ios-switch">
                <input data-toggle-theme="" type="checkbox" class="ios-input" id="switch-dark1-mode">
                <label class="custom-control-label" for="switch-dark1-mode"></label>
                </div>
                <i class="fa fa-angle-right"></i>
            </a>
            <a data-menu="menu-highlights" href="#">
                <i class="fa font-14 fa-tint rounded-xl bg-green-dark"></i>
                <span>Page Highlight</span>
                
                <i class="fa fa-angle-right"></i>
            </a>
            <a data-menu="menu-backgrounds" href="#" class="border-0">
                <i class="fa font-14 fa-cog rounded-xl bg-blue-dark"></i>
                <span>Background Color</span>
              
                <i class="fa fa-angle-right"></i>
            </a>
            
            <div class="list-group list-custom-small">



                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="btn btn-xxs w-100 rounded-s btn-full mb-3 text-uppercase font-900 shadow-s bg-red-dark"
                        style="margin-top:10px"><i class="fas fa-sign-out-alt "
                            style="line-height: 25px;"></i>&nbsp;&nbsp;Log Out</button>

                </form>

            </div>
            </div>
            </div>

            
        </div>

        <div id="menu-sidebar-left-1" class="bg-white menu menu-box-left" style="transform: none;" data-menu-width="65">
                <div class="d-flex">
                    <a href="#" class="flex-fill icon icon-m text-center border-bottom border-right">
                        <img id="logo-sidebar" src="images/icons/petronas.png" style="height:45px;width:45px;padding-top:5px;margin-bottom:3px" alt="">
                    </a>
                </div>
          
            
        <div style="height:90%">
            <table class="align-middle h-100 w-100" style="border:none;background-color: transparent !important;">
                <tr>
                    <td style="background-color: transparent !important;">
                        
                         
                        <div class="d-flex">
                
                            <a href="#" data-active="" data-content="page-potf" class="pt-1 sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-top: 1px solid rgba(255, 255, 255, .05) !important;border-right:none !important;border-radius: 5px;">
                                <img src="images/icons/link.png" style="height:50px;width:50px;padding:3px" alt="">
                                <br>
                                <strong style="font-size:9px">PotF</strong>
                            </a>
                     
                        </div>

                     


                        <div class="d-flex">
                
                                <a href="#" data-active="" data-content="page-main" data-bs-toggle="collapse" data-bs-target="#tab-terrain" class="sidebar-active pt-1 sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-top: 1px solid rgba(255, 255, 255, .05) !important;border-right:none !important;border-radius: 5px;">
                                    <img src="images/icons/earth.png" style="height:40px;width:40px;padding:3px" alt="">
                                    <br>
                                    <strong style="font-size:9px">Environment</strong>
                                </a>
                         
                        </div>

                        <div class="d-flex">
                        
                                <a href="#" data-content="page-main" data-bs-toggle="collapse" data-bs-target="#tab-pipeline" class="pt-1 sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-right:none !important;border-radius: 5px;">
                                    <img src="images/icons/pipe.png" style="height:40px;width:40px;padding:3px" alt="">
                                    <br>
                                    <strong style="font-size:9px">Pipeline</strong>
                                </a>
                          
                        </div>

                        <div class="d-flex">
                   
                                <a href="#" data-content="page-main" data-bs-toggle="collapse" data-bs-target="#tab-sensor" class="sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-right:none !important;border-radius: 5px;">
                                    <img src="images/icons/sensor.png" style="height:40px;width:40px;padding:3px" alt="">
                                    <br>
                                    <strong style="font-size:9px">Sensor</strong>
                                </a>  
                         
                        </div>

                        <div class="d-flex">
                        
                            <a href="#" data-content="page-main" data-bs-toggle="collapse" data-bs-target="#tab-create_pipeline" class="pt-1 sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-right:none !important;border-radius: 5px;">
                                <img src="images/icons/pipe_create.png" style="height:40px;width:40px;padding:3px" alt="">
                                <br>
                                <strong style="font-size:9px">Create Pipeline</strong>
                            </a>
                      
                        </div>

                        
                        <div class="d-flex">
                    
                            <a href="#" data-active="" data-content="page-concept" class="pt-1 sidebar-item flex-fill icon icon-m text-center border-bottom border-right" style="color: unset !important;border-top: 1px solid rgba(255, 255, 255, .05) !important;border-right:none !important;border-radius: 5px;">
                                <img src="images/icons/templates.png" style="height:40px;width:40px;padding:3px" alt="">
                                <br>
                                <strong style="font-size:9px">3D Simulation</strong>
                            </a>
                    
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>
                
        </div>


        <div id="menu-highlights" class="col-lg-6 offset-lg-3 menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Highlights</h1>
                <p class="color-highlight">Any Element can have a Highlight Color</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="highlight-changer">
                    <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span
                            class="color-blue-light">Default</span></a>
                    <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span
                            class="color-red-light">Red</span></a>
                    <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span
                            class="color-orange-light">Orange</span></a>
                    <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span
                            class="color-pink-dark">Pink</span></a>
                    <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span
                            class="color-magenta-light">Purple</span></a>
                    <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span
                            class="color-aqua-light">Aqua</span></a>
                    <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span
                            class="color-teal-light">Teal</span></a>
                    <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span
                            class="color-mint-light">Petronas</span></a>
                    <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-light"></i><span
                            class="color-green-light">Green</span></a>
                    <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span
                            class="color-green-dark">Grass</span></a>
                    <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-light"></i><span
                            class="color-yellow-light">Sunny</span></a>
                    <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span
                            class="color-yellow-light">Goldish</span></a>
                    <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span
                            class="color-brown-light">Wood</span></a>
                    <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span
                            class="color-dark-light">Night</span></a>
                    <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span
                            class="color-dark-light">Dark</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-sidebar-config"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back
                    to Settings</a>
            </div>
        </div>

        <div id="menu-backgrounds" class="col-lg-6 offset-lg-3 menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Backgrounds</h1>
                <p class="color-highlight">Change Page Color Behind Content Boxes</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="background-changer">
                    <a href="#" data-change-background="default"><i class="bg-theme"></i><span
                            class="color-dark-dark">Default</span></a>
                    <a href="#" data-change-background="plum"><i class="body-plum"></i><span
                            class="color-plum-dark">Plum</span></a>
                    <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span
                            class="color-dark-dark">Magenta</span></a>
                    <a href="#" data-change-background="dark"><i class="body-dark"></i><span
                            class="color-dark-dark">Dark</span></a>
                    <a href="#" data-change-background="violet"><i class="body-violet"></i><span
                            class="color-violet-dark">Violet</span></a>
                    <a href="#" data-change-background="red"><i class="body-red"></i><span
                            class="color-red-dark">Red</span></a>
                    <a href="#" data-change-background="green"><i class="body-green"></i><span
                            class="color-green-dark">Green</span></a>
                    <a href="#" data-change-background="sky"><i class="body-sky"></i><span
                            class="color-sky-dark">Sky</span></a>
                    <a href="#" data-change-background="orange"><i class="body-orange"></i><span
                            class="color-orange-dark">Orange</span></a>
                    <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span
                            class="color-yellow-dark">Yellow</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-sidebar-config"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back
                    to Settings</a>
            </div>
        </div>

        <div id="menu-offline" class="menu menu-box-modal rounded-m" data-menu-width="310" data-menu-height="270">
            <h1 class="text-center color-theme mt-4">No Connection</h1>
            <p class="ps-3 pe-3 text-center color-theme opacity-60">
                This action requires an internet connection to work. Please connect turn on your WiFi or Celluar Data to
                Enable this action.
            </p>
            <a href="#" class="close-menu btn btn-m font-900 text-uppercase bg-highlight rounded-sm btn-center-l">Close
                Message</a>
            <p class="text-center font-9 color-theme mt-3">Continue with other task.</p>
        </div>

        <div id="validationError" class="col-lg-6 offset-lg-3 menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="240" data-menu-effect="menu-over" style="display: block; height: 240px;">
            <div class="menu-title mt-n1 text-center">
                <h1 class="color-red-dark">Validation Error</h1>
                <p class="color-theme opacity-50">Please review below error and take appropriate action to proceed.</p>
            </div>
            <div id="validationErrorList" class="list-group list-custom-small pe-3 ps-3">
            </div>
        </div>

        <div id="snackbar-sucess" class="snackbar-toast bg-green-dark" data-bs-delay="1200" data-bs-autohide="true" style="z-index:999">
        </div>
        <div id="snackbar-warning" class="snackbar-toast bg-yellow-dark" data-bs-delay="1200" data-bs-autohide="true" style="z-index:999">
        </div>
        <div id="snackbar-error" class="snackbar-toast bg-red-dark" data-bs-delay="1200" data-bs-autohide="true" style="z-index:999"></div>

    </div>
    <script type="text/javascript" src="{{ URL::to('scripts/plugins/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('scripts/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('scripts/plugins/moment/moment.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('scripts/plugins/clipboard/clipboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('scripts/default.js') }}"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jstat@1.9.2/dist/jstat.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

 
<script>
    var myPlayer = videojs('MY_VIDEO_1');

$('#videojsplay').click(function(evt){
    evt.preventDefault();
    myPlayer.play();
});
</script>

    @stack('scripts')

</body>

</html>
