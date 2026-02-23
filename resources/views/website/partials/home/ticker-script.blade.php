<script>
    (function() {
        var track = document.getElementById('tickerTrack');
        if (!track) return;
        var orig = track.querySelector('.ticker-set');
        if (!orig) return;
        track.appendChild(orig.cloneNode(true));
        var pos = 0,
            last = null,
            SPEED = 52;
        var setW = orig.offsetWidth;
        window.addEventListener('resize', function() {
            setW = orig.offsetWidth;
        });

        function tick(ts) {
            if (last === null) last = ts;
            pos += SPEED * (ts - last) / 1000;
            if (setW && pos >= setW) pos -= setW;
            track.style.transform = 'translateX(-' + pos + 'px)';
            last = ts;
            requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    })();
</script>
