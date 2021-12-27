let navigation = document.getElementsByClassName("mainnav__overview");
let toggle = document.getElementsByClassName("toggle");
let close = document.getElementsByClassName("close");

toggle[0].addEventListener("click", function(e) {
    navigation[0].classList.toggle("mainnav__overview--special");
})
close[0].addEventListener("click", function(e) {
    navigation[0].classList.remove("mainnav__overview--special");
})