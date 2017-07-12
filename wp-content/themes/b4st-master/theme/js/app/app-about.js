app.about = {
    init: function() {
        if (!$('#sidebar-nav a[rel="about"]').hasClass('active')) {
             $('#sidebar-nav a[rel="about"]').addClass('active');
        }
       
        TweenMax.staggerTo('h1 span', 1, {opacity: 1, x: 0}, 0.2);
        TweenLite.to('.container.about h3, p, a', 0.6, {opacity: 1, x: 0});
    }
}