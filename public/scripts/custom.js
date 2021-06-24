///////////////////////////////////////////////////////////////////////
// Sidebar Functionality
$('.sidebar-item').on('click' , function() {

    let content = $(this).data('content');
    $('.main-content').addClass('d-none');
    $('#'+content+'').removeClass('d-none');

    if(content != 'page-main'){
        $('#topbar-left').addClass('d-none');
        $('#topbar-right').removeClass('col-6');
        $('#topbar-right').addClass('col-8 offset-2');

    }
    else
    {
        $('#topbar-right').removeClass('col-8 offset-2');
        $('#topbar-right').addClass('col-6');
        $('#topbar-left').removeClass('d-none');
    }

    $('.sidebar-item').removeClass('sidebar-active');
    $(this).addClass('sidebar-active');
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// Passcode function
if (document.querySelector('#loginPage') || document.querySelector('#registerOtpPage')) {

    $('.digit-group').find('input').each(function() {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function(e) {
            var parent = $($(this).parent());
            
            if(e.keyCode === 8 || e.keyCode === 37) {
                var prev = parent.find('input#' + $(this).data('previous'));
                
                if(prev.length) {
                    $(prev).select();
                }
            } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                var next = parent.find('input#' + $(this).data('next'));
                
                if(next.length) {
                    $(next).select();
                } else {
                    if(parent.data('autosubmit')) {
                        parent.submit();
                    }
                }
            }
        });
    });

}
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// Poster change
$('.change-poster').on('click' , function(){
  var url = $(this).data('url');
  $('#main-poster').attr('src' , url);
})
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// Enter & Exit Fullscreen function (VR Function)
if (document.querySelector('#page-main'))
{
  
$('#enterFullScreen').on('click' , function(){
  openFullscreen();
})

$('#exitFullScreen').on('click' , function(){
  closeFullscreen();
})

function openFullscreen() {
  var elem = document.getElementById("potf3d");
  $('#enterFullScreen').hide();
  $('#exitFullScreen').show();

  $('#vr-menu').show();

  $('#ar-not-support').hide();
  $('#ar-support').hide();

  $('#menu-ar-not-support').appendTo("#potf3d");

if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.webkitRequestFullscreen) { /* Safari */
  elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) { /* IE11 */
  elem.msRequestFullscreen();
}
}
            
function closeFullscreen() {
  $('#enterFullScreen').show();
  $('#exitFullScreen').hide();

  $('#vr-menu').hide();

  $('#ar-not-support').show();
  $('#ar-support').show();

  $('#menu-ar-not-support').appendTo("body");

  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//Check if idTerrain already assign into the modal
const modelViewerEl = $('#mainModelViewer');

// $('.select-pipeline').on('click' , function(){
//   $('#section1-empty').addClass('d-none');
//   $('#section2-empty').addClass('d-none');
//   $('#section3-empty').addClass('d-none');

//   $('#potf3d').removeClass('d-none');
//   $('#section2-3d').removeClass('d-none');
//   $('#section3-3d').addClass('h-100');


//   this.__toggle = !this.__toggle;
//   var target = document.getElementById('section3-3d');
//   if( this.__toggle) {
//       target.style.height = target.scrollHeight+"px";
//   }
//   else {
//       target.style.height = 0;
//   }

// })

$('#toggle-rotate').on('change', function () {
  if ($(this).is(":checked")) {
    modelViewerEl.attr('auto-rotate', '')
  } else {
    modelViewerEl.removeAttr('auto-rotate')
  }
})

$('#toggle-elevated').on('change' , function() {
if ($('#toggle-elevated').is(":checked")) {
  modelViewerEl.attr("src",$('#3d_elevated').val());
} else {
  modelViewerEl.attr("src",$('#3d_normal').val());
}
});

$('.select-3dmodel').on('click' , function(){
  let src = $(this).data('src');
  let elevated = $(this).data('elevated');
  let pulse = $(this).data('pulse');
  $('#3d_normal').val(src);
  $('#3d_elevated').val(elevated);
  console.log(pulse);
  $('#3d_dist_pulse').css('left' , pulse);
  modelViewerEl.attr("src",src);
})

function panningModelViewer() {
const modelViewer = document.querySelector('#mainModelViewer');
const tapDistance = 2;
let panning = false;
let panX, panY;
let startX, startY;
let lastX, lastY;
let metersPerPixel;

const startPan = () => {
  const orbit = modelViewer.getCameraOrbit();
  const {theta, phi, radius} = orbit;
  const psi = theta - modelViewer.turntableRotation;
  metersPerPixel = 0.75 * radius / modelViewer.getBoundingClientRect().height;
  panX = [-Math.cos(psi), 0, Math.sin(psi)];
  panY = [
    -Math.cos(phi) * Math.sin(psi),
    Math.sin(phi),
    -Math.cos(phi) * Math.cos(psi)
  ];
  modelViewer.interactionPrompt = 'none';
};

const movePan = (thisX, thisY) => {
  const dx = (thisX - lastX) * metersPerPixel;
  const dy = (thisY - lastY) * metersPerPixel;
  lastX = thisX;
  lastY = thisY;

  const target = modelViewer.getCameraTarget();
  target.x += dx * panX[0] + dy * panY[0];
  target.y += dx * panX[1] + dy * panY[1];
  target.z += dx * panX[2] + dy * panY[2];
  modelViewer.cameraTarget = `${target.x}m ${target.y}m ${target.z}m`;

  // This pauses turntable rotation
  modelViewer.dispatchEvent(new CustomEvent(
        'camera-change', {detail: {source: 'user-interaction'}}));
};

const recenter = (pointer) => {
  panning = false;
  if (Math.abs(pointer.clientX - startX) > tapDistance ||
      Math.abs(pointer.clientY - startY) > tapDistance)
    return;
  const rect = modelViewer.getBoundingClientRect();
  const x = event.clientX - rect.left;
  const y = event.clientY - rect.top;
  const hit = modelViewer.positionAndNormalFromPoint(x, y);
  modelViewer.cameraTarget =
      hit == null ? 'auto auto auto' : hit.position.toString();
};

const onPointerUp = (event) => {
  const pointer = event.clientX ? event : event.changedTouches[0];
  if (Math.abs(pointer.clientX - startX) < tapDistance &&
      Math.abs(pointer.clientY - startY) < tapDistance) {
    recenter(pointer);
  }
  panning = false;
};

modelViewer.addEventListener('mousedown', (event) => {
  startX = event.clientX;
  startY = event.clientY;
  panning = event.button === 2 || event.ctrlKey || event.metaKey ||
      event.shiftKey;
  if (!panning)
    return;

  lastX = startX;
  lastY = startY;
  startPan();
  event.stopPropagation();
}, true);

modelViewer.addEventListener('touchstart', (event) => {
  startX = event.touches[0].clientX;
  startY = event.touches[0].clientY;
  panning = event.touches.length === 2;
  if (!panning)
    return;

  const {touches} = event;
  lastX = 0.5 * (touches[0].clientX + touches[1].clientX);
  lastY = 0.5 * (touches[0].clientY + touches[1].clientY);
  startPan();
}, true);

modelViewer.addEventListener('mousemove', (event) => {
  if (!panning)
    return;

  movePan(event.clientX, event.clientY);
  event.stopPropagation();
}, true);

modelViewer.addEventListener('touchmove', (event) => {
  if (!panning || event.touches.length !== 2)
    return;

  const {touches} = event;
  const thisX = 0.5 * (touches[0].clientX + touches[1].clientX);
  const thisY = 0.5 * (touches[0].clientY + touches[1].clientY);
  movePan(thisX, thisY);
}, true);

self.addEventListener('mouseup', (event) => {
  recenter(event);
}, true);

self.addEventListener('touchend', (event) => {
  if (event.touches.length === 0) {
    recenter(event.changedTouches[0]);
  }
}, true);
}

panningModelViewer();

}
///////////////////////////////////////////////////////////////////////







          


               
                
                



