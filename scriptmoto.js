 $('.sidebar-wrapper > .nav > .tab > a').on('click', function (e) {
        e.preventDefault();
    
        if (!$(this).parent().hasClass('aktib')){
        
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);

        }
    });
    
    $('.sidebar-wrapper > .nav > .tab > .collapse > li a').on('click', function (e) {
        e.preventDefault();
      
        if (!$(this).parent().hasClass('aktib')){
        
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
        
        }
    });
    
    $('.dropdown-menu > li > a').on('click', function (e) {
        e.preventDefault();
     
        if(!$(this).parent().hasClass('aktib')) {
            $('#onlinetab').addClass('aktib');
            $('#onlinetab').siblings().removeClass('aktib');
            
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
        }    
    });
    $('a#approveBtn, a.approveBtn').on('click', function (e) {
        
     
       
            $(this).parent().addClass('aktib');
            $(this).parent().siblings().removeClass('aktib');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);

    });
    $('#close, a.approveBtn').on('click', function (e) {
        
        $('.approveNotif').hide('slow');
        
    });
      $('#approveBtn').on('click', function (e) {
        
        $('.approveNotif').show('slow');
        
    });
     $('.dropdown-menu > li > a').on('hover', function (e) {
        e.preventDefault();
     
       
            $(this).parent().addClass('notifhov');
            $(this).parent().siblings().removeClass('notifhov');
            target = $(this).attr('href');
            $('.panel > div').not(target).hide();
            $(target).fadeToggle(900);
    });
   
    $('#okdelete').on('click', function(e){
       e.preventDefault();
        $('#adpass').addClass('showpassbox');    
    });