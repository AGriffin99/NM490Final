var urls =[
  'kimberlybryant.html',
  'reshmasaujani.html',
  'sandrapersing.html',
  'temitopeadediran.html'

];

function rando(){
  var url = urls[Math.floor(Math.random()*urls.length)];
  window.location=url;
}
