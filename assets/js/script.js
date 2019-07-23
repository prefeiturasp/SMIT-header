let openDropDownMenu = 0;

const exploreBtn = document.getElementById("explore-btn");
const dropdown = document.getElementById("dropdownmenu");

exploreBtn.addEventListener("click", () => {
    if (openDropDownMenu == 0) {
        openDropDownMenu = 1;
        dropdown.classList.add("dropdownOpen")
    } else {
        openDropDownMenu = 0;
        dropdown.classList.remove("dropdownOpen");
    }
}, false);