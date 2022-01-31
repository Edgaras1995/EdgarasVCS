//partneriai slider
var slider = tns({
    "container": '.partneriai-slider',
    "items": 4,
    "speed": 300,
    "autoplay": true,
    "autoplayHoverPause": true,
    "autoplayButtonOutput": false,
    "autoplayTimeout": 3500,
    "controls": false,
    "nav": false,
    "swipeAngle": false,
    "responsive": {
        "350": {
          "items": 1
        },
        "500": {
          "items": 2
        },
        "700": {
            "items": 3
        },
        "900": {
            "items": 4
        }
      }
 });
