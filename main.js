var urls = [
    'kimberlybryant.html',
    'reshmasaujani.html',
    'sandrapersing.html',
    'temitopeadediran.html'

];

function rando() {
    var url = urls[Math.floor(Math.random() * urls.length)];
    window.location = url;
}
//live text editor modified from https://www.youtube.com/watch?v=qZWBDX84zQo Coding Shiksha
const first = document.querySelector('.first');
const iframe = document.querySelector('iframe');
const button = document.querySelector('button');

button.addEventListener("click", function() {
    var html = first.textContent;
    iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
});


first.addEventListener('keyup', function() {
    var html = first.textContent;
    iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
})

first.addEventListener('paste', function(e) {
    e.preventDefault();
    var text = e.clipboardData.getData("text/plain");
    document.execCommand("insertText", false, text);
});

$(function() {
    $("#includedContent").load("editor.html");
});