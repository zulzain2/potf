@push('styles')
<style>

.blobs-container {
  display: flex;
  transition: all 2s;
}

.blob {
  background: black;
  border-radius: 50%;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
  margin: 8px;
  height: 15px;
  width: 15px;
  transform: scale(1);
  animation: pulse-black 2s infinite;
}


.blob.highlight {
  background: #00a19c9e;
  box-shadow: 0 0 0 0 #0179759e;
  animation: pulse-highlight 2s infinite;
}

@keyframes pulse-highlight {
  0% {
    transform: scale(0.95);
    box-shadow: 0 0 0 0 #00a19ca1;
  }
  
  70% {
    transform: scale(1);
    box-shadow: 0 0 0 10px rgba(255, 82, 82, 0);
  }
  
  100% {
    transform: scale(0.95);
    box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
  }
}

</style>
@endpush

<img src="images/icons/pipeline2.png" class="p-1 pb-0 pt-2" style="width:100%;height:40px !important" alt="">

<div id="3d_dist_pulse" class="blobs-container" style="position: absolute;top: 13%;left: 5.5%;">
    <div class="blob highlight"></div>
</div>

<div class="row mb-0">
  <div class="col-4 ps-4">
    <h6 class="ps-3" style="font-size:12px">Bintulu</h6>
  </div>
  <div class="col-4 text-center">
    <h6 class="color-highlight font-800" style="font-size:15px">500KM</h6>
  </div>
  <div class="col-4 pe-5" style="text-align:right">
    <h6 class="" style="font-size:12px">Kimanis</h6>
  </div>
</div>