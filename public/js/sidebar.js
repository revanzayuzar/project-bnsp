// Sidebar

let sidebar = document.querySelector(".sidebar");
let sidebarButton = document.getElementById("sidebarButton");
let backgroundDark = document.querySelector(".background-dark");

sidebarButton.addEventListener("click", function() {
    sidebar.classList.add("sidebar-active");
    backgroundDark.classList.add("background-dark-active");
});

document.addEventListener("click", function(event) {
    if (
        !sidebar.contains(event.target) &&
        !sidebarButton.contains(event.target)
    ) {
        sidebar.classList.remove("sidebar-active");
        backgroundDark.classList.remove("background-dark-active");
    }
});