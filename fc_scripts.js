function acknowledgeChallenge(paragraphId, buttonId) {
    //Filling the empty paragraph
    var dom = document.getElementById(paragraphId);
    
    //TODO: Add php-Functionality for assigning an opponent from a list
    
    //Setting the content of the empty paragraph
    dom.innerHTML = "That's the spirit! Your opponent is testuser.<br> Have fun and good luck!";
    dom.style.color = "#900";
    
    //Hiding the button
    var buttonDom = document.getElementById(buttonId);
    buttonDom.style.display = 'none';
    
}

function changeButtonColor(id) {
    //Changing the color of the button on mouseover
    //Assumes the basic style configuration
    //TODO: How to access the definition in the css-style to avoid hardcoding the style changes
    var dom = document.getElementById(id);
    if (dom.style.color === "blue") {
        dom.style.color = "white";
        dom.style.background = "#900";
    }else{
        dom.style.color = "blue"
        dom.style.background = "white";
    }
    
}