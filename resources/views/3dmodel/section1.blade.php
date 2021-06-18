<model-viewer id="mainModelViewer" src="images/3d/1.glb" alt="A 3D model of an astronaut" loading="lazy" ar
    ar-modes="webxr scene-viewer quick-look" environment-image="neutral" camera-controls camera-orbit="0deg 60deg 50%"
    class="w-100" style="height:100%">
    {{-- camera-orbit="180deg 60deg 60%" --}}
 
      
            <button id="enterFullScreen" href="#" class="text-center" style="position: absolute;
            top: 1%;
            left: 1%;">
                <table class="h-100 w-100" style="background-color: transparent !important;border:none">
                    <tr>
                        <td class="pt-2" style="vertical-align: middle;background-color: transparent !important;">
                            <i class="fas fa-vr-cardboard color-highlight" style="font-size:20px"></i>
                        </td>
                        <td style="vertical-align: middle;background-color: transparent !important;">
                            <small class="font-800 text-center w-100 color-highlight"
                                style="font-size:12px;font-family: roboto, sans-serif !important;">VR</small>
                        </td>
                    </tr>
                </table>
            </button>

            <button id="exitFullScreen" href="#" class="text-center" style="display:none;position: absolute;
            top: 1%;
            left: 1%;">
                <i class="fas fa-times fa-lg color-white"></i>
            </button>
   
  
            <button id="ar-not-support" href="#" data-menu="menu-ar-not-support" class="text-center color-highlight"
                style="position: absolute;
                    top: 1%;
                    right: 1%;
                    z-index:9">
                <table class="h-100 w-100" style="background-color: transparent !important;border:none">
                    <tr>
                        <td style="vertical-align: middle;background-color: transparent !important;">
                            <small class="font-800 text-center w-100 color-highlight"
                                style="font-size:12px;font-family: roboto, sans-serif !important;">AR</small></td>
                        <td class="pt-2" style="vertical-align: middle;background-color: transparent !important;">
                            <i class="material-icons color-highlight" style="font-size:24px">view_in_ar</i>
                        </td>
                    </tr>
                </table>
            </button>

            <button id="ar-support" slot="ar-button" href="#" class="text-center color-highlight" style="position: absolute;
                    top: 1%;
                    right: 1%;
                    font-size: large;z-index:10">
                <table class="h-100 w-100" style="background-color: transparent !important;border:none">
                    <tr>
                        <td style="vertical-align: middle;background-color: transparent !important;">
                            <small class="font-800 text-center w-100 color-highlight"
                                style="font-size:12px;font-family: roboto, sans-serif !important;">AR</small>
                        </td>
                        <td class="pt-2" style="vertical-align: middle;background-color: transparent !important;">
                            <i class="material-icons color-highlight" style="font-size:24px">view_in_ar</i>
                        </td>
                    </tr>
                </table>
            </button>
    
  

    <div id="vr-menu" style="height:100vh;width:20%;position: absolute;right: 0px;top:0px;display:none">
        <div class="" style="height:1%;"></div>

        <div class="row mb-0" style="height:5% !important">
            <div class="col-12 mb-0" >
                <div class="card card-style h-100 mb-0 me-1" style="border-radius:5px;background-color: #6f6f6f57 !important;">
                    <table class="w-100 h-100" style="background-color: transparent !important;border:none">
                        <tr>
                            <td style="vertical-align: middle;background-color: transparent !important;text-align: right;">
                                <strong class="color-white">Auto Rotate</strong>
                            </td>
                            <td style="vertical-align: middle;background-color: transparent !important;width:20%">
                                <div class="custom-control ios-switch"
                                    style="transform: scale(.4, .4);margin-top: 6px !important;margin-right:0px">
                                    <input type="checkbox" class="ios-input" id="toggle-rotate">
                                    <label class="custom-control-label" for="toggle-rotate"
                                        style="background-color: transparent !important;"></label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="" style="height:1%;"></div>

        <div class="row mb-0" style="height:5% !important">
            <div class="col-12 mb-0" style="">
                <div class="card card-style h-100 mb-0 me-1" style="border-radius:5px;background-color: #6f6f6f57 !important;">
                    <table class="w-100 h-100" style="background-color: transparent !important;border:none">
                        <tr>
                            <td style="vertical-align: middle;background-color: transparent !important;text-align: right;">
                                <strong class="color-white">Elevated</strong>
                                <input type="hidden" id="3d_elevated" name="3d_elevated" value="images/3d/1-upview.glb">
                                <input type="hidden" id="3d_normal" name="3d_normal" value="images/3d/1.glb">
                            </td>
                            <td style="vertical-align: middle;background-color: transparent !important;width:20%">
                                <div class="custom-control ios-switch"
                                    style="transform: scale(.4, .4);margin-top: 6px !important;margin-right:0px">
                                    <input type="checkbox" class="ios-input" id="toggle-elevated">
                                    <label class="custom-control-label" for="toggle-elevated"
                                        style="background-color: transparent !important;"></label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="" style="height:1%;"></div>

        <div class="row mb-0" style="height:28% !important">
            <div class="col-12 mb-0 h-100" style="">
                <div class="card card-style shadow-xl me-1 mb-0 h-100" style="border-radius:5px;overflow:Scroll;background-color: #6f6f6f57 !important;">
                    <div class="content mb-0 mt-0">
                        <div class="position-sticky" style="top:0px;z-index:20;background-color: transparent !important;">
                            <h3 class="pt-3 pb-3 color-white">Pipe Simulation</h3>
                        </div>
                        <div class="list-group list-custom-small">
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/leak.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Leaking</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/ruptured.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Ruptured</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/explode.png" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Explode</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/burn.png" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Burn</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/rust.png" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Rusted</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/pipe/spill.png" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Spill</span></td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="" style="height:1%;"></div>

        <div class="row mb-0" style="height:28% !important">
            <div class="col-12 mb-0 h-100" style="">
                <div class="card card-style shadow-xl me-1 mb-0 h-100" style="border-radius:5px;overflow:Scroll;background-color: #6f6f6f57 !important;">
                    <div class="content mb-0 mt-0">
                        <div class="position-sticky" style="top:0px;z-index:20;background-color: transparent !important;">
                            <h3 class="pt-3 pb-3 color-white">Environment</h3>
                        </div>
                        <div class="list-group list-custom-small">
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/environment/rain.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Rainfall</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/environment/thunderstorm.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Thunderstorm</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/environment/lanslide.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Flood</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/environment/flood.svg" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Flood</span></td>
                                    </tr>
                                </table>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <table class="w-100 border-0" style="background-color:transparent !important">
                                    <tr>
                                        <td class="w-25" style="background-color:transparent !important">
                                            <img src="images/icons/environment/disruption.png" style="width:40px;height:40px;" alt="">
                                        </td>
                                        <td style="background-color:transparent !important"><span class="color-white">Soil Disruption</span></td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="" style="height:1%;"></div>

        <div class="row mb-0" style="height:28% !important">
            <div class="col-12 mb-0 h-100" style="">
                <div class="card card-style shadow-xl me-1 mb-0 h-100" style="border-radius:5px;overflow:Scroll;background-color: #6f6f6f57 !important;">
                    <div class="content mb-0 mt-0">
                        <div class="position-sticky" style="top:0px;z-index:20;background-color: transparent !important;">
                            <h3 class="pt-3 pb-3 color-white">Prediction</h3>
                        </div>
                        <div class="list-group list-custom-small">
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <i class="fas fa-circle color-highlight"></i>
                                <span class="color-white">Ultra Mobile</span>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <i class="fas fa-circle color-highlight"></i>
                                <span class="color-white">Ultra Mobile</span>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <i class="fas fa-circle color-highlight"></i>
                                <span class="color-white">Ultra Mobile</span>
                            </a>
                            <a href="#" class="hvr-grow hvr-shadow-radial">
                                <i class="fas fa-circle color-highlight"></i>
                                <span class="color-white">Ultra Mobile</span>
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="" style="height:1%;"></div>
    </div>
   






</model-viewer>

@push('content2')
    <div id="menu-ar-not-support" class="menu menu-box-modal rounded-m" data-menu-width="310" data-menu-height="280">
        <h1 class="text-center color-theme mt-4">AR Not Support</h1>
        <p class="ps-3 pe-3 text-center color-theme opacity-60">
            This action requires device with AR features enabled. Please try again if you have the device. Best AR
            experience with VR Headset like Oculus Go, Rift or any other VR Headset.
        </p>
        <a href="#" class="close-menu btn btn-m font-900 text-uppercase bg-highlight rounded-sm btn-center-l">Close
            Message</a>
        <p class="text-center font-9 color-theme mt-3">Continue with other task.</p>
    </div>
@endpush