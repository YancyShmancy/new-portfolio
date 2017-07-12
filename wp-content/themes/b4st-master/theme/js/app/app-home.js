app.home = {
    init: function() {
        if (!$('#sidebar-nav a[rel="index"]').hasClass('active')) {
             $('#sidebar-nav a[rel="index"]').addClass('active');
        }
        TweenMax.staggerTo('#home-heading h1 span', 0.2, {opacity: 1, y: 0}, 0.1);
        TweenMax.staggerTo('#home-heading nav li', 0.2, {opacity: 1, y: 0}, 0.1);
    }
}