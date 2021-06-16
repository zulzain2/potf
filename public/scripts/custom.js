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
// Enter & Exit Fullscreen function (VR Function)
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








          


               
                
                



