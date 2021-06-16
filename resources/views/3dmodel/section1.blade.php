<model-viewer id="mainModelViewer" src="images/3d/gunung-murud.glb" alt="A 3D model of an astronaut" loading="lazy" ar
    ar-modes="webxr scene-viewer quick-look" environment-image="neutral" camera-controls camera-orbit="180deg 60deg 60%"
     class="w-100" style="height:100%">

    <div class="row mb-0">
        <div class="col-6 ps-3">
            <button id="enterFullScreen" href="#" class="text-center" style="">
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
            
            <button id="exitFullScreen" href="#" class="text-center" style="display:none;">
                <i class="fas fa-times fa-lg color-highlight"></i>
            </button>
        </div>
        <div class="col-6 text-right">
            <button id="ar-not-support" href="#" data-menu="menu-ar-not-support" class="text-center color-highlight" style="position: absolute;
                    top: 1%;
                    right: 1%;
                    font-size: large;z-index:9">
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
        </div>
    </div>
     <div class="row mb-0">
        <div class="col-3 offset-9" style="">
            <div class="card card-style h-100 mb-0 me-1" style="margin-left: 70px;border-radius:5px">
                <table class="w-100 h-100" style="background-color: transparent !important;border:none">
                    <tr>
                        <td style="vertical-align: middle;background-color: transparent !important;text-align: right;">
                            <strong class="font-10 color-invert">Auto Rotate</strong>
                        </td>
                        <td style="vertical-align: middle;background-color: transparent !important;width:30%">
                            <div class="custom-control ios-switch" style="transform: scale(.4, .4);margin-top: 6px !important;margin-right:0px">
                                <input type="checkbox" class="ios-input" id="toggle-rotate">
                                <label class="custom-control-label" for="toggle-rotate" style="background-color: transparent !important;"></label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
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