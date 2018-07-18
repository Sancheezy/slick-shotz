function deferLoadingScript(url, callback) {
    var loadScript = function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = url;

        if (typeof callback === 'function') {
            s.onload = s.onreadystatechange = function(event) {
                event = event || window.event;
                if (event.type === 'load' || (/loaded|complete/.test(s.readyState))) {
                    s.onload = s.onreadystatechange = null;
                        callback();
                }
            };
        }
        document.body.appendChild(s);
    };
    if (window.addEventListener) {
        window.addEventListener('load', loadScript, false);
    } else {
        window.attachEvent('onload', loadScript);
    }
}

/* Defer loading of a script with callback function */
deferLoadingScript('https://www.youtube.com/yts/jsbin/www-embed-player-vflhai0Ku/www-embed-player.js', function() {
  console.log('Done loading embed.min.js');
});