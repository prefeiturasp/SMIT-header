/* return height requisition */
window.addEventListener("message", receiveMessage, false);

const parent = {
    window: null,
    origin: null
}

function sendHeight(parent) {
    parent.window.postMessage(document.getElementById("header").offsetHeight + document.getElementById("dropdownmenu").offsetHeight, parent.origin);
}

function receiveMessage(event)
{
    parent.window = event.source;
    parent.origin = event.origin;
    if(event.data == "height") {
        sendHeight(parent);
    } 
}

/* dropdown menu open click */
let openDropDownMenu = 0;

const exploreBtn = document.getElementById("explore-btn");
const dropdown = document.getElementById("dropdownmenu");

exploreBtn.addEventListener("click", () => {
    if (openDropDownMenu == 0) {
        openDropDownMenu = 1;
        dropdown.classList.add("dropdownOpen");
    } else {
        openDropDownMenu = 0;
        dropdown.classList.remove("dropdownOpen");
    }

    sendHeight(parent);
}, false);