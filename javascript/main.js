"use strict";

let footer = document.getElementsByTagName("footer");
let absolutePath = "http://localhost:8888/wordpress/wp-content/themes/Rechtsanwalt-USA/Canun-Lawyer/javascript/";
let script = document.createElement("script");
script.src = absolutePath+"navigation.js";
footer[0].appendChild(script);