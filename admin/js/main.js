(function(){
    var postButtons=document.querySelectorAll('.postButtons');

    function swapPost(){
        document.getElementById("videoSec").style.display="none";
        document.getElementById("imageSec").style.display="none";
        document.getElementById("trailerSec").style.display="none";
        document.getElementById(this.id+"Sec").style.display="block";
    }

    postButtons.forEach(function(element,index){
        element.addEventListener('click',swapPost,false);
    });
})();