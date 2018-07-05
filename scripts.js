$(document).ready(function(){
    $('#login-trigger').click(function() {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        });

        var mainContent_offset=$("#content").offset();
        $("#arrow").click(function(){
            $("html,body").animate({
            scrollTop: mainContent_offset.top+20
            },"slow");
        });
    
    var first_td = $('.data-table tbody tr td:first-child');
    first_td.prepend("<i class='fa fa-user'></i>");
    
    var last_td = $('.data-table tbody tr td:last-child');
    last_td.append("<button class='apply btn btn-success'>APPLY</button>");
   
    $("#createjob").click(function(event){
        alert("Post successful");
    });
    
    $(document).on('click','.apply',function(){
        var poster = $(this).parent().text();
        $.post('applyemail.php',{'poster':poster},function(data){
           alert(data); 
        });
    });
});

