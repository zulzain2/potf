///////////////////////////////////////////////////////////////////////
//for footer
if (document.querySelector('#footer-bar')) {
    if (window.location.href.indexOf("home") > -1) 
    {
        $('#notification-footer').removeClass('color-highlight');
        $('#home-footer').addClass('active-nav');
        $('#chat-footer').removeClass('active-nav');
        $('#meet-footer').removeClass('active-nav');
        $('#file-footer').removeClass('active-nav');
        $('#setting-footer').removeClass('active-nav');
    }
    
    else if(window.location.href.indexOf("setting") > -1)
    {
        $('#notification-footer').removeClass('color-highlight');
        $('#home-footer').removeClass('active-nav');
        $('#chat-footer').removeClass('active-nav');
        $('#meet-footer').removeClass('active-nav');
        $('#file-footer').removeClass('active-nav');
        $('#setting-footer').addClass('active-nav');
    }
  
}
///////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////
// Sidebar Functionality
$('.sidebar-item').on('click' , function() {
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



              












          


               
                
                



