@extends('layouts.app')

@section('content')
<div id="page-potf" class="main-content row pt-5 h-100 mb-0 d-none">
  <img src="images/poster/petronas-potf.jpeg" class="p-3 pe-4 h-100 w-100" style="padding-left:90px !important" alt="">
</div>

<div id="page-concept" class="main-content row pt-5 h-100 mb-0 d-none">
  <img src="images/poster/utm-potf.png" class="p-3 pe-4 h-100 w-100" style="padding-left:90px !important" alt="">
</div>

<div id="page-main" class="main-content row pt-5 h-100 mb-0 ">
  <div class="col-4 pb-1 pt-2 h-100 pe-0">
    <div class="card card-style h-100 mb-0 me-1" style="margin-left: 70px;border-radius:5px">

      <div class="content my-2 m-1">

        <div class="content m-1" id="tab-group-sidebar">
          <div data-bs-parent="#tab-group-sidebar" class="collapse show" id="tab-terrain">

            @include('environment/index')

          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-pipeline">

            @include('pipeline/index')
            
          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-sensor">
            
            @include('sensor/index')
            
          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-create_pipeline">
            @include('generatePipeline/index')
          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="col-8 pb-1 pt-2 h-100 ps-0">

    <div class="text-center" style="position: absolute;
    top: 9%;
    left: 34%;
    font-size: large;z-index:9">
      <a id="enterFullScreen" href="#" class="text-center">
        <i class="fas fa-vr-cardboard fa-lg color-highlight"></i> 
        <p class="font-800 text-center w-100 color-highlight" style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -5px;">VR</p>
      </a>
    </div>

   
 

    <div id="potf3d" style="height:64%;border-radius:5px">
     
      

      <!-- Use it like any other HTML element -->
      <model-viewer src="images/3d/gunung-murud.glb" 
      alt="A 3D model of an astronaut" 
      loading="lazy"
      ar ar-modes="webxr scene-viewer quick-look" 
      environment-image="neutral" 
      camera-controls 
      camera-orbit="180deg 70deg 60%"
      auto-rotate 
      class="w-100" 
      style="height:100%">
    
 

      {{-- <div id="ar-failure" data-menu="menu-ar-not-support" class="text-center" style="position: absolute;
      top: 9%;
      right: 1%;
      font-size: large;z-index:9"> --}}
        <button id="" href="#" data-menu="menu-ar-not-support" class="text-center color-highlight" style="position: absolute;
        top: 1%;
        right: 1%;
        font-size: large;z-index:9">
          <i class="material-icons color-highlight font-36">view_in_ar</i>
          <p class="font-800 text-center w-100 color-highlight" style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -10px;">AR</p>
        </button>
      {{-- </div> --}}

      <button id="ar-support" slot="ar-button" href="#" class="text-center color-highlight" style="position: absolute;
      top: 1%;
      right: 1%;
      font-size: large;z-index:10">
        <i class="material-icons color-highlight font-36">view_in_ar</i>
        <p class="font-800 text-center w-100 color-highlight" style="font-size:12px;font-family: roboto, sans-serif !important;margin-top: -10px;">AR</p>
      </button>

      {{-- <button slot="ar-button" style="background-color: white; border-radius: 4px; border: none; position: absolute; top: 16px; right: 16px; ">
        👋 Activate AR
    </button> --}}

    </model-viewer> 
      


    {{-- <a-scene embedded>
      <a-assets>
        <a-asset-item id="tree" src="images/3d/gunung-murud.glb"></a-asset-item>
      </a-assets>
    
      <a-entity gltf-model="#tree"  
      geometry="primitive: box"
      rotation="0 45 0"
      position="-1 0.5 -2" 
      scale="1 1 1"
      animation-mixer></a-entity>
    </a-scene> --}}


    </div> 

   
    
    <div class="card card-style mb-0 ms-0 me-1" style="height:10.3%;border-radius:5px">
      
      <img src="images/icons/pipeline2.png" class="p-1 pb-0 pt-2" style="width:100%;height:80%" alt="">
      {{-- <svg class="p-1 pb-0 pt-2" width="100%" height="50px"  preserveAspectRatio="none"  viewBox="0 167.72 512 176.55">
        <path style="fill:#E8EDEE;" d="M52.966,317.793h406.069V194.207H52.966V317.793z"/>
        <g>
          <path style="fill:#C7CBC7;" d="M88.276,238.345h-35.31c-5.297,0-8.828-3.531-8.828-8.828s3.531-8.828,8.828-8.828h35.31   c5.297,0,8.828,3.531,8.828,8.828S93.572,238.345,88.276,238.345"/>
          <path style="fill:#C7CBC7;" d="M229.517,238.345h-70.621c-5.297,0-8.828-3.531-8.828-8.828s3.531-8.828,8.828-8.828h70.621   c5.297,0,8.828,3.531,8.828,8.828S234.814,238.345,229.517,238.345"/>
          <path style="fill:#C7CBC7;" d="M132.414,229.517c0-5.297-3.531-8.828-8.828-8.828c-5.297,0-8.828,3.531-8.828,8.828   s3.531,8.828,8.828,8.828C128.883,238.345,132.414,234.814,132.414,229.517"/>
          <path style="fill:#C7CBC7;" d="M361.931,238.345h-88.276c-5.297,0-8.828-3.531-8.828-8.828s3.531-8.828,8.828-8.828h88.276   c5.297,0,8.828,3.531,8.828,8.828S367.228,238.345,361.931,238.345"/>
          <path style="fill:#C7CBC7;" d="M459.034,238.345h-44.138c-5.297,0-8.828-3.531-8.828-8.828s3.531-8.828,8.828-8.828h44.138   c5.297,0,8.828,3.531,8.828,8.828S464.331,238.345,459.034,238.345"/>
          <path style="fill:#C7CBC7;" d="M44.138,344.276H8.828c-5.297,0-8.828-3.531-8.828-8.828V176.552c0-5.297,3.531-8.828,8.828-8.828   h35.31c5.297,0,8.828,3.531,8.828,8.828v158.897C52.966,340.745,49.434,344.276,44.138,344.276"/>
          <path style="fill:#C7CBC7;" d="M503.172,344.276h-35.31c-5.297,0-8.828-3.531-8.828-8.828V176.552c0-5.297,3.531-8.828,8.828-8.828   h35.31c5.297,0,8.828,3.531,8.828,8.828v158.897C512,340.745,508.469,344.276,503.172,344.276"/>
        </g>
        <g></g><g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        </svg> --}}

        <div class="row mb-0">
          <div class="col-4 ps-4">
            <h6 class="" style="font-size:12px">Bintulu</h6>
          </div>
          <div class="col-4 text-center">
            <h6 class="color-highlight font-800" style="font-size:15px">500KM</h6>
          </div>
          <div class="col-4 pe-4" style="text-align:right">
            <h6 class="" style="font-size:12px">Kimanis</h6>
          </div>
        </div>
        
    </div>

    <div class="" style="height:0.7%;"></div>

    <div class="card card-style mb-0 ms-0 me-1" style="height:25%;border-radius:5px">

        <div class="content my-2 m-1 h-100">
          <div class="splide fifth-slider slider-no-arrows slider-no-dots overflow-hidden h-100" id="fifth-slider-cta">
            <div class="splide__track h-100">
                <div class="splide__list h-100">
                    <div class="splide__slide h-100">
                        <div class="card card-style " style="height:100%">
                          <div class="card-top">
                              <strong class="float-end text-center">
                                  <div class="bg-theme rounded-sm color-theme shadow-xl text-center m-1 overflow-hidden" style="background-color:black !important">
                                      <span class="bg-highlight-dark font-10 d-block mb-1 px-3 line-height-xs py-1">KM1</span>
                                    
                                  </div>
                              </strong>
                          </div>
                          <div style="height:100%;border-radius:5px">
                            <!-- Use it like any other HTML element -->
                            <model-viewer src="images/3d/pipe-red/scene.gltf" 
                            alt="A 3D model of an astronaut" 
                            loading="lazy"
                            ar ar-modes="webxr scene-viewer quick-look" 
                            environment-image="neutral"
                            auto-rotate 
                            class="w-100" 
                            style="height:100%"></model-viewer>
                          </div>
                        
                           
                        
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide h-100">
                        <div class="card card-style" style="height:100%">
                          <div class="card-top">
                              <strong class="float-end text-center">
                                  <div class="bg-theme rounded-sm color-theme shadow-xl text-center m-1 overflow-hidden" style="background-color:black !important">
                                      <span class="bg-highlight-dark font-10 d-block mb-1 px-3 line-height-xs py-1">KM2</span>
                                    
                                  </div>
                              </strong>
                          </div>
                          <div style="height:100%;border-radius:5px">
                            <!-- Use it like any other HTML element -->
                            <model-viewer src="images/3d/pipe-grey/scene.gltf" 
                            alt="A 3D model of an astronaut" 
                            loading="lazy"
                            ar ar-modes="webxr scene-viewer quick-look" 
                            environment-image="neutral"
                            auto-rotate 
                            class="w-100" 
                            style="height:100%"></model-viewer>
                          </div>
                          
                         
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide h-100">
                        <div class="card card-style " style="height:100%">
                          <div class="card-top">
                              <strong class="float-end text-center">
                                  <div class="bg-theme rounded-sm color-theme shadow-xl text-center m-1 overflow-hidden" style="background-color:black !important">
                                      <span class="bg-highlight-dark font-10 d-block mb-1 px-3 line-height-xs py-1">KM3</span>
                                    
                                  </div>
                              </strong>
                          </div>
                          <div style="height:100%;border-radius:5px">
                            <!-- Use it like any other HTML element -->
                            <model-viewer src="images/3d/pipe-grey/scene.gltf" 
                            alt="A 3D model of an astronaut" 
                            loading="lazy"
                            ar ar-modes="webxr scene-viewer quick-look" 
                            environment-image="neutral"
                            auto-rotate 
                            class="w-100" 
                            style="height:100%"></model-viewer>
                          </div>
                          
                           
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide h-100">
                      <div class="card card-style " style="height:100%">
                        <div class="card-top">
                            <strong class="float-end text-center">
                                <div class="bg-theme rounded-sm color-theme shadow-xl text-center m-1 overflow-hidden" style="background-color:black !important">
                                    <span class="bg-highlight-dark font-10 d-block mb-1 px-3 line-height-xs py-1">KM4</span>
                                  
                                </div>
                            </strong>
                        </div>
                        <div style="height:100%;border-radius:5px">
                          <!-- Use it like any other HTML element -->
                          <model-viewer src="images/3d/pipe-red/scene.gltf" 
                          alt="A 3D model of an astronaut" 
                          loading="lazy"
                          ar ar-modes="webxr scene-viewer quick-look" 
                          environment-image="neutral"
                          auto-rotate 
                          class="w-100" 
                          style="height:100%"></model-viewer>
                        </div>
                        
                         
                          <div class="card-overlay bg-gradient"></div>
                      </div>
                  </div>
                  <div class="splide__slide h-100">
                    <div class="card card-style " style="height:100%">
                      <div class="card-top">
                          <strong class="float-end text-center">
                              <div class="bg-theme rounded-sm color-theme shadow-xl text-center m-1 overflow-hidden" style="background-color:black !important">
                                  <span class="bg-highlight-dark font-10 d-block mb-1 px-3 line-height-xs py-1">KM5</span>
                                
                              </div>
                          </strong>
                      </div>
                      <div style="height:100%;border-radius:5px">
                        <!-- Use it like any other HTML element -->
                        <model-viewer src="images/3d/pipe-grey/scene.gltf" 
                        alt="A 3D model of an astronaut" 
                        loading="lazy"
                        ar ar-modes="webxr scene-viewer quick-look" 
                        environment-image="neutral"
                        auto-rotate 
                        class="w-100" 
                        style="height:100%"></model-viewer>
                      </div>
                       
                        <div class="card-overlay bg-gradient"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        </div>

    </div>

  </div>
</div>
@endsection

@push('content2')
<div id="menu-ar-not-support" class="menu menu-box-modal rounded-m" data-menu-width="310" data-menu-height="280">
  <h1 class="text-center color-theme mt-4">AR Not Support</h1>
  <p class="ps-3 pe-3 text-center color-theme opacity-60">
      This action requires device with AR features enabled. Please try again if you have the device. Best AR experience with VR Headset like Oculus Go, Rift or any other VR Headset.
  </p>
  <a href="#" class="close-menu btn btn-m font-900 text-uppercase bg-highlight rounded-sm btn-center-l">Close
      Message</a>
  <p class="text-center font-9 color-theme mt-3">Continue with other task.</p>
</div>
@endpush

@push('scripts')

<!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

@endpush



