/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(Config) {
  "use strict";
  Config.set('tour', {
    steps: [{
      element: "#toggleMenubar",
      position: "right",
      intro: "Offcanvas Menu <p class='content'>It is nice custom navigation for desktop users and a seek off-canvas menu for tablet and mobile users</p>"
    }, {
      element: "#toggleFullscreen",
      intro: "Full Screen <p class='content'>Click this button you can view the admin template in full screen</p>"
    }, {
      element: "#toggleChat",
      position: 'left',
      intro: "Quick Conversations <p class='content'>This is a sidebar dialog box for user conversations list, you can even create a quick conversation with other users</p>"
    }, {
      element: ".list-of-events",
      position: 'top',
      intro: "Upcoming Events<p class='content'>Here you'll find a list of all Open Upcoming Events. Go ahead, book one to join us on our next session.</p>"
    }],
    skipLabel: "<i class='md-close'></i>",
    doneLabel: "<i class='md-close'></i>",
    nextLabel: "Next <i class='md-chevron-right'></i>",
    prevLabel: "<i class='md-chevron-left'></i>Prev",
    showBullets: false
  });

})(Config);
