"use strict";

let footer = document.getElementsByTagName("footer");
let absolutePath = "http://localhost./wordpress/wp-content/themes/Rechtsanwalt1/Canun-Lawyer/javascript/";
let script = document.createElement("script");
script.src = absolutePath+"navigation.js";
footer[0].appendChild(script);