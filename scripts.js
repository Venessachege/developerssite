$(document).ready(function(){
    $('#login-trigger').click(function() {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })

        var mainContent_offset=$("#content").offset();
        $("#arrow").click(function(){
            $("html,body").animate({
            scrollTop: mainContent_offset.top+20
            },"slow");
        });
    
    var first_td = $('.data-table tbody tr td:first-child');
    first_td.prepend("<i class='fa fa-user'></i>");
       
});

