/**
 * Adapt image src based on media query width.
 * Typical use:
 *     <img src="images/test_320.jpg" alt="this is a test image" class="wdn_image_swap" />
 */
WDN.images = (function() {

    return {
        imageList: [],

        /**
         * Called by WDN.initializePlugin('images');
         *
         * @memberOf WDN.images
         */
        initialize: function() {
            WDN.images.setImageList();

            if (WDN.getCurrentWidthBreakpoint() > 320) {
                for (var i = 0; i < WDN.images.imageList.length; i++) {
                    var newPath = WDN.images.generateSwapPath(WDN.images.imageList[i], WDN.getCurrentWidthBreakpoint());
                    WDN.images.changeImageSource(WDN.images.imageList[i], newPath);
                }
            }
        },

        /**
         * Populate WDN.images.imageList with all elements with class 'wdn_image_swap'.
         */
        setImageList: function() {
            var foundImages;

            // Use native implementation if available.
            if (document.getElementsByClassName) {
                foundImages = document.getElementsByClassName('wdn_image_swap');
            } else { // For IE8
                foundImages = (function getElementsByClass(searchClass) {
                    var classElements = [],
                        els = document.getElementsByTagName("*"),
                        elsLen = els.length,
                        pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)"), i, j;
                    for (var i = 0, j = 0; i < elsLen; i++) {
                      if (pattern.test(els[i].className)) {
                          classElements[j] = els[i];
                          j++;
                      }
                    }
                    return classElements;
                })('wdn_image_swap');
            }

            for (var i = 0; i !== foundImages.length; i++) {
                WDN.images.imageList.push(foundImages[i]);
            };
        },

        /**
         * Construct a new image path for the new breakpoint.
         *
         * @param {object} image Image element that will have its src changed.
         * @param {string} newWidthBreakpoint
         * @returns {string}
         */
        generateSwapPath: function(image, newWidthBreakpoint) {
            var pattern = new RegExp(/([a-z\-_0-9\/\:\.]*)\.(jpg|jpeg|png|gif)/i),
                sizes = new RegExp(/_(320|480|600|768|960|1040)$/i),
                deconstructedPath = pattern.exec(image.getAttribute('src'));
            // Create the new URL for the image.
            return deconstructedPath[1].replace(sizes, '') + '_' + newWidthBreakpoint + '.' + deconstructedPath[2];
        },

        /**
         * Switch the src of the image if the new file url loads.
         *
         * @param {object} image Image element that will have its src changed.
         * @param {string} url Path to the proposed replacement image file.
         */
        changeImageSource: function(image, url) {
            WDN.log('Try loading ' + url);

            var replacement = new Image();

            function replace() {
                image.src = replacement.src;
            }
            // Possible @TODO: if an image fails to load, go up or down to the next breakpoint?
            // function handleImageError() {
            //     WDN.log(url + ' failed to load');
            // }
            // replacement.addEventListener('error', handleImageError);
            if (replacement.addEventListener) {
                replacement.addEventListener('load', replace, false);
            } else { // IE8
                replacement.attachEvent('onload', replace);
            }
            replacement.src = url;
        },

        /**
         * Invoke WDN plugin interface method.
         */
        onResize: function(oldWidthScript, newWidthScript, oldWidthBreakpoint, newWidthBreakpoint) {
            if (oldWidthBreakpoint !== newWidthBreakpoint) {
                WDN.images.initialize();
            }
        }
    };
})();
