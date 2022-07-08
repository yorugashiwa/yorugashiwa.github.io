

var moreButton = document.getElementById("more-button");
var closeButton = document.getElementById("close-button");
var more = document.getElementById("more");

moreButton.onclick = function () {
    more.classList.remove("hid");
}

closeButton.onclick = function () {
    more.classList.add("hid");
}