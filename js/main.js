(function(){
    var collapser = document.getElementsByClassName('collapse');

    setTimeout(function () {
        for(i=0;i<collapser.length;i++){
            collapser[i].classList.remove('collapse');
        }
    }, 500);


})();