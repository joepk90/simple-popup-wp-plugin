/**
 * Class: SupapressCart
 */

// import Cookies from 'js-cookie';

var SimplePopup = {};

(function($) { // reference jquery

        SimplePopup = function ()  {
            this.options = options;
            this.popUp = this.options.jsPopupSelector !== 'undefined' ? $(this.options.jsPopupSelector) : $('.js-simple-popup');
            this.jsEventClass = this.options.jsEventClass !== 'undefined' ? this.options.jsEventClass : 'js-set-cookie';
            this.cookieData = cookieData;
            this.cookie = this.getCookie();

            this.getCookie = function() {

                var cookie = Cookies.get(this.cookieData.name);

                if(cookie === undefined) return null;

                return cookie;

            };

            this.setCookie = function() {
                Cookies.set(this.cookieData.name, this.cookieData.value, { expires: 365 });
            };

            this.displayPopup = function() {
                this.popUp.show();
            };

            this.hidePopup = function() {
                this.popUp.hide();
            };

            this.setupEvents = function() {

                var $simplePopup = this;

                $(this.popUp).on('click', function(e) {

                    e.preventDefault();

                    if ($(e.target.hasClass($simplePopup.jsEventClass)) === false) return;

                    // we need to merge default events
                    var defaultEvents = {
                        button: {
                            element: 'button'
                        },
                        close: {
                            element: 'close'
                        }
                    };

                    var events = $simplePopup.options.events !== 'undefined' ? $simplePopup.options.events : defaultEvents;

                    $(events).each(function (event) {

                        if (e.target.data('element') === event.element) {


                            if (event.function !== 'undefined') {

                                // if custom override function is defined, use custom override function
                                event.function();
                            } else {

                                // use default events
                                $simplePopup.setCookie();
                                $simplePopup.hidePopup();
                            }

                        }

                    });

                });

            };

            this.init = function() {

                // stop script running if cookie is set
                if (this.cookie !== null) return;

                this.displayPopup();
                this.setupEvents();
            };
        };

})(jQuery);


