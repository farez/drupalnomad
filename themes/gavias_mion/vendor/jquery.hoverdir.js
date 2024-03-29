(function ($) {

    $.fn.directionalHover = function(options) {
        // Extend default plugin options
        var opts = $.extend({}, $.fn.directionalHover.defaults, options);

        // private variables
        var FLAG_T = 1, // top
            FLAG_R = 2, // right
            FLAG_B = 4, // bottom
            FLAG_L = 8, // left
            tlMask = FLAG_T | FLAG_L,
            trMask = FLAG_T | FLAG_R,
            blMask = FLAG_B | FLAG_L,
            brMask = FLAG_B | FLAG_R;

        // private functions
        var slideOverlay = function(overlay, direction, px, py, ew, eh, ex, ey, pd) {
            var cornerFlags = 0; // top|right|bottom|left

            if (py - ey <= eh / 2) cornerFlags ^= FLAG_T;
            if (px - ex >= ew / 2) cornerFlags ^= FLAG_R;
            if (py - ey >  eh / 2) cornerFlags ^= FLAG_B;
            if (px - ex <  ew / 2) cornerFlags ^= FLAG_L;

            findSide(cornerFlags, overlay, direction, px-ex, py-ey, ew/2, eh/2, pd);
        }

        var findSide = function(flags, overlay, direction, x, y, w, h, pd) {
            if (testMask(flags, tlMask)) {
                testTopLeftToBottomRight(x, y, w, h) ? setOverlayPosition(overlay, direction, 0, -w*2-pd) : setOverlayPosition(overlay, direction, -h*2, 0);
            }
            else if (testMask(flags, trMask)) {
                testBottomRightToTopLeft(x, y, w, h) ? setOverlayPosition(overlay, direction, -h*2, 0) : setOverlayPosition(overlay, direction, 0, w*2+pd);
            }
            else if (testMask(flags, blMask)) {
                testBottomRightToTopLeft(x, y, w, h) ? setOverlayPosition(overlay, direction, 0, -w*2-pd) : setOverlayPosition(overlay, direction, h*2, 0);
            }
            else if (testMask(flags, brMask)) {
                testTopLeftToBottomRight(x, y, w, h) ? setOverlayPosition(overlay, direction, h*2, 0) : setOverlayPosition(overlay, direction, 0, w*2+pd);
            }
        }

        var testMask = function(flags, mask) {
            return (flags & mask) === mask;
        }

        var testTopLeftToBottomRight = function(x, y, w, h) {
            return (h * x - w * y) < 0;
        }

        var testBottomRightToTopLeft = function(x, y, w, h) {
            return (w * (y-h) + h * x - w * h) < 0;
        }

        var setOverlayPosition = function(overlay, direction, top, left) {
            if (direction === 'in') {
                overlay.animate({
                    top: top,
                    left: left
                }, 0, function() {
                    overlay.stop().animate({
                        top: 0,
                        left: 0
                    }, opts.speed, opts.easing);
                });
            }
            else if (direction === 'out') {
                overlay.animate({
                    top: 0,
                    left: 0
                }, 0, function() {
                    overlay.stop().animate({
                        top: top,
                        left: left
                    }, opts.speed, opts.easing);
                });
            }
        }

        // begin jQuery stuff
        this.css({
            position: 'absolute',
            overflow: 'hidden'
        });

        this.find(opts.overlay).css({
            position: 'absolute',
            top: '-100%'
        });

        return this.each(function() {
            var container = $(this);

            container.hover(function(e) {
                slideOverlay(
                    container.find(opts.overlay),
                    'in',
                    e.pageX,
                    e.pageY,
                    container.width(),
                    container.height(),
                    Math.floor(container.offset().left),
                    container.offset().top,
                    opts.padding
                );
            }, function(e) {
                slideOverlay(
                    container.find(opts.overlay),
                    'out',
                    e.pageX,
                    e.pageY,
                    container.width(),
                    container.height(),
                    Math.floor(container.offset().left),
                    container.offset().top,
                    opts.padding
                );
            });
        });
    };

    // Plugin default options
    $.fn.directionalHover.defaults = {
        overlay: ".dh-overlay",
        easing: "swing",
        padding: 30,
        speed: 400
    };

}(jQuery));