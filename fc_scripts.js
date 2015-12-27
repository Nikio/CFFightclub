function acknowledgeChallenge(id1, id2) {
    var dom = document.getElementById(id1);
    dom.innerHTML = "That's the spirit! Your opponent is testuser.<br> Have fun and good luck!";
    dom.style.color = "#900";
    var buttonDom = document.getElementById(id2);
    buttonDom.disabled = true;
    buttonDom.style.color = "gray";
    buttonDom.style.background = "darkgray";
    buttonDom.style.display = 'none';
}

function changeButtonColor(id) {
    var dom = document.getElementById(id);
    if (dom.style.color === "blue") {
        dom.style.color = "white";
        dom.style.background = "#900";
    }else{
        dom.style.color = "blue"
        dom.style.background = "white";
    }
    
}