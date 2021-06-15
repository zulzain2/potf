<model-viewer src="images/3d/gunung-murud.glb" alt="A 3D model of an astronaut" loading="lazy" ar
    ar-modes="webxr scene-viewer quick-look" environment-image="neutral" camera-controls camera-orbit="180deg 70deg 60%"
    auto-rotate class="w-100" style="height:100%">

    <button id="enterFullScreen" href="#" class="text-center" style="position: absolute;
top: 1%;
left: 1%;
font-size: large;z-index:9">
        <i class="fas fa-vr-cardboard fa-lg color-highlight"></i>
        <p class="font-800 text-center w-100 color-highlight"
            style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -5px;">VR</p>
    </button>

    <button id="exitFullScreen" href="#" class="text-center" style="position: absolute;display:none;
top: 1%;
left: 1%;
font-size: large;z-index:9">
        <i class="fas fa-times fa-lg color-highlight"></i>
        <p class="font-800 text-center w-100 color-highlight"
            style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -5px;"></p>
    </button>

    <button id="" href="#" data-menu="menu-ar-not-support" class="text-center color-highlight" style="position: absolute;
top: 1%;
right: 1%;
font-size: large;z-index:9">
        <i class="material-icons color-highlight font-36">view_in_ar</i>
        <p class="font-800 text-center w-100 color-highlight"
            style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -10px;">AR</p>
    </button>

    <button id="ar-support" slot="ar-button" href="#" class="text-center color-highlight" style="position: absolute;
top: 1%;
right: 1%;
font-size: large;z-index:10">
        <i class="material-icons color-highlight font-36">view_in_ar</i>
        <p class="font-800 text-center w-100 color-highlight"
            style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -10px;">AR</p>
    </button>

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