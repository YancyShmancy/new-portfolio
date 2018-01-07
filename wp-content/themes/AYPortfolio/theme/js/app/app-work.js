app.work = {
    init: function() {
        if (!$('#sidebar-nav a[rel="work"]').hasClass('active')) {
             $('#sidebar-nav a[rel="work"]').addClass('active');
        }
        TweenMax.staggerTo('.portfolio-item', 1, {opacity: 1, x: 0}, 0.5);
    },
}