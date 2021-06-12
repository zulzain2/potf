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

$('.sidebar-item').on('click' , function() {
    console.log($(this));
    $('.sidebar-item').removeClass('sidebar-active');
    $(this).addClass('sidebar-active');
});


