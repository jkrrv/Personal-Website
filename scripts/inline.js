if(navigator.userAgent.indexOf("Speed Insights") === -1) { // Google PageSpeed doesn't like Google Analytics.
    window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
    ga.l = +new Date;
    ga('create', 'UA-16892920-1', 'auto');
    ga('send', 'pageview');

    // code to track outbound/otherwise untracked links.
    var trackOutboundLink = function(url) {
        ga('send', 'event', 'outbound', 'click', url, {
            'transport': 'beacon',
            'hitCallback': function(){document.location = url;}
        });
    };

    // code to add tracking event to links.
    var links = document.getElementsByTagName('a');
    for(var i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('click', trackOutboundLink);
    }
}