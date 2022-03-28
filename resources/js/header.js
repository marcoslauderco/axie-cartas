$("#btn-bars").click(function () {
    const nav = document.getElementById("topnav");
    nav.className === "topnav" ? nav.className += " responsive" : nav.className = "topnav";
});