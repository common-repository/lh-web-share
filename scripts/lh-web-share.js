(function() {
var anchors = document.querySelectorAll('a.lh_web_share');

for (var i = 0; i < anchors.length ; i++) {
    anchors[i].addEventListener("click", 
        function (event) {
            event.preventDefault();
            if (navigator.share) {
  navigator.share({
      url: this.href,
  })
    .then(() => console.log('Successful share'))
    .catch((error) => console.log('Error sharing', error));
} else {
    
     console.log('It is not supported');
window.location = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURI(this.href);
            }
        }, 
        false);
}








})();