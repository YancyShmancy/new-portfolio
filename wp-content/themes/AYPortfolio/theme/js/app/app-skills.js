app.skills = {
    init: function() {
        if (!$('#sidebar-nav a[rel="skills"]').hasClass('active')) {
             $('#sidebar-nav a[rel="skills"]').addClass('active');
        }
        
        app.skills.animateProgressBars();
    },
    animateProgressBars: function() {
        
        var progressBars = document.querySelectorAll('progress');
        progressBars.forEach(function(bar, index) {
            var endValue = bar.getAttribute('data-end');
            var ticker = 0;
            var id = bar.getAttribute('id');
            var label = document.querySelector(`[data-for=${id}] span`);
            setTimeout(function() {
                var progressAnimation = setInterval(function() {
                    ++ticker;
                    bar.setAttribute('value', ticker);
                    label.innerHTML = `${ticker}%`;
                    if (ticker == endValue) {
                        clearInterval(progressAnimation);
                    }
                }, 7);
            }, 250*index);
            
        })
    }
}