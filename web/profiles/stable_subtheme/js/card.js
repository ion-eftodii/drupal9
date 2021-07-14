(function (Drupal, $) {
  "use strict";

  Drupal.behaviors.helloWorldClock = {
    attach: function (context, settings) {
      function ticker() {
        let date = new Date();
        $(context).find('.clock').html(date.toLocaleTimeString());
      }

      let clock = '<div>The time is <span class="clock"></span></div>';
      $(document).find('.salutation').append(clock);
      setInterval(function () {
        ticker();
      }, 1000);
    }
  };

})(Drupal, jQuery);
