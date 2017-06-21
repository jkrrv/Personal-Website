if (navigator.userAgent.indexOf("Speed Insights") === -1) { // Google PageSpeed doesn't like Google Analytics.
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-16892920-1', 'auto');
    ga('send', 'pageview');

    // code to track outbound/otherwise untracked links.
    var trackOutboundLink = function (url) {
        ga('send', 'event', 'outbound', 'click', url, {
            'transport': 'beacon',
            'hitCallback': function () {
                document.location = url;
            }
        });
    };

    // code to add tracking event to links.
    var links = document.getElementsByTagName('a');
    for (var i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('click', trackOutboundLink);
    }
}