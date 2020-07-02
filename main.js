var urls =[
  'kimberlybryant.html',
  'about.html',
  'reshmasaujani.html'

];

function rando(){
  var url = urls[Math.floor(Math.random()*urls.length)];
  window.location=url;
}
