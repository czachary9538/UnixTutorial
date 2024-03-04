/*Team Maple Syrup
ISTE240
12/14/2023*/
function playAnimation(){
    document.getElementById('snipit').style.border = "green solid";
    document.getElementById('animateMe').style.animationPlayState = "running";
}

function indicateFailure(){
    document.getElementById('snipit').style.border = "red solid";
}