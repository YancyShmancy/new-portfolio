var $ = jQuery.noConflict(),
    app = {};
    
app.ajax = null;

app.ui = {
    navMenu:function(){
        TweenMax.staggerTo('#sidebar-nav li', 0.2, {opacity: 1, y: 0}, 0.1);
        
        $(document).on('click','#navbar li a, #sidebar-nav li a, a.logo, a.nav-btn',function(){
            console.log('nav clicked');

            if(!$(this).hasClass('active')){

                if(app.ui.pageLoad($(this).attr('href'),$(this).attr('rel'))){

                    $('#navbar li a.active, #sidebar-nav li a').removeClass('active');
                    $(this).addClass('active');

                    window.history.pushState("", "", $(this).attr('href'));
                }


            }

            $('a.logo').removeClass('active');


            return false;
        });



    },
    pageLoad:function(url,rel){

        if (app.ajax !== null) {

            return false;

        }else {

            app.ui.preloader.preloaderInit(rel);

            app.ajax = $.ajax({
                type: 'POST',
                url: url
            });

            app.ajax.done(function( msg ) {
                $("#page").html(msg);

                app.ajax = null;
            });

            app.ajax.fail(function( jqXHR, textStatus ) {

                $("#page").html(errmsg);

            });
            return true;
        }
    },
}

app.ui.preloader = {

    preloaderInit:function(rel){

        $('.preloader').show();
        $('.preloader').css('left','-100%');
        $('.preloader').velocity({ left: 0 },{ duration: 500, easing: "easeOutQuad",complete: function(elements) {


            $('.progress-bar_bg div').width();
            var a = 0;
            var loader = setInterval(function(){

                ++a;
                $('.progress-bar > span').text(a);
                $('.progress-bar > span').css('width',a + '%');
                $('.progress-bar_bg div').css('width',a + '%');

                if(a==100){

                    clearInterval(loader);


                    var checkLoaded = setInterval(function() {

                        if (app.ajax === null){
                           app.ui.preloader.preloaderHide(rel);
                           clearInterval(checkLoaded);
                        }

                    }, 200);




                }

            },7);


        }});

    },
    preloaderHide:function(rel){
        
        if(rel == 'index'){
            $.getScript(__DIR__ +'/theme/js/app/app-home.js')
                .done(function(){
                    if(app.home){
                        app.home.init();
                    }
                });
        }else if(rel == 'about'){
            $.getScript(__DIR__ +'/theme/js/app/app-about.js')
                .done(function(){
                    if(app.about){
                        app.about.init();
                    }
                });

        }else if(rel == 'skills'){
            $.getScript(__DIR__ +'/theme/js/app/app-skills.js')
                .done(function(){
                    if(app.skills){
                        app.skills.init();
                    }
                });
        }else if(rel == 'contact'){
            $.getScript(__DIR__ +'/theme/js/app/app-contact.js')
                .done(function(){
                    if(app.contact){
                        app.contact.init();
                    }
                });

        }else if(rel == 'work') {
            $.getScript(__DIR__ + '/theme/js/app/app-work.js')
                .done(function() {
                    if (app.work) {
                        app.work.init();
                    }
                });
        }
        

        $('#page').show();
        $('.preloader').velocity({ left: '100%' }, { duration: 500, easing: "easeInQuad", complete: function (elements) {


            $('.progress-bar > span').text(0);
            $('.progress-bar > span').css('width', '0%');
            $('.progress-bar_bg div').css('width', '0%');
            $('.preloader').hide();

        }});
    }
}

$(function () {

    app.ui.navMenu();

});

//HOME PAGE

if ($('.container.home-page').size() >0) {
    $.getScript(__DIR__+'/theme/js/app/app-home.js')
        .done(function(){
    
            if(app.home){
                $( "#page").show();
                app.home.init();
    
            }
    
        });
};



//ABOUT
if ($('.container.about').size() > 0) {
    $.getScript(__DIR__ + '/theme/js/app/app-about.js')
        .done(function(){
    
            if(app.about){
    
                $( "#page").show();
                app.about.init();
    
            }
    
        });
};


//TEXT PAGE
if ($('.container.text-page').size() > 0) {
    $.getScript(__DIR__+'/theme/js/app/app-text.js')
        .done(function(){
    
            if(app.text){
                $( "#page").show();
                app.text.init();
    
            }
    
        });
};

//contact
if ($('.container.contact').size() > 0) {
    $.getScript(__DIR__+'/theme/js/app/app-contact.js')
        .done(function(){
    
            if(app.contact){
                $( "#page").show();
                app.contact.init();
    
            }
    
        });
};

//SKILLS
if ($('.container.skills').size() >0) {
    $.getScript(__DIR__ +'/theme/js/app/app-skills.js')
        .done(function(){
    
            if(app.skills){
                $( "#page").show();
                app.skills.init();
    
            }
    
        });
};

if ($('.container.work').size() > 0) {
    $.getScript(__DIR__ + '/theme/js/app/app-work.js')
        .done(function() {
            if (app.work) {
                $("#page").show();
                app.work.init();
            }
        })
}