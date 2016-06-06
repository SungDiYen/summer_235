(function(){
var reloadImg = function(dImg) {
  var sOldUrl = dImg.src;
  var sNewUrl = sOldUrl + "?rnd=" + Math.random();
  dImg.src = sNewUrl;
};

var dReloadLink = document.getElementById("reload-img");
var dImg = document.getElementById("rand-img");
  
dReloadLink.onclick = function(e) {
  reloadImg(dImg);
  if(e) e.preventDefault();
  return false;
};


})();

