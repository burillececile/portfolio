/*
 window.addEventListener('scroll', function(e) {
      this.console.log(document.documentElement.scrollTop);

 });*/


window.onscroll = function () {
    if (document.documentElement.scrollTop > 80) {
        document.getElementsByClassName("movebar")[0].style.backgroundColor = "rgb(250,250,250,0.2)";
        document.getElementsByClassName("texte")[0].style.color = "orange";
        document.getElementsByClassName("texte")[1].style.color = "orange";
        document.getElementsByClassName("texte")[2].style.color = "orange";
        document.getElementsByClassName("texte")[3].style.color = "orange";
    } else {
        document.getElementsByClassName("movebar")[0].style.backgroundColor = "rgb(250,250,250,0)";
        document.getElementsByClassName("texte")[0].style.color = "white";
        document.getElementsByClassName("texte")[1].style.color = "white";
        document.getElementsByClassName("texte")[2].style.color = "white";
        document.getElementsByClassName("texte")[3].style.color = "white";
    }

}