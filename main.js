const discord = document.getElementById("discord");
const hint = document.getElementById("hint");
const main = document.getElementsByTagName('main')[0];

discord.addEventListener("click", () => {
    navigator.clipboard.writeText("CarbonLollipop#9880");
    if(hint.innerHTML == "copied!")
    return;
    hint.innerHTML = "copied!";
    setTimeout(() => {
        hint.innerText = "click to copy to clipboard";
    }, 1000);
})

document.addEventListener("mousemove", function(event) {

    var relativeX = event.clientX - window.innerWidth / 2;
    var relativeY = event.clientY - window.innerHeight / 2;

    relativeX /= -15;
    relativeY /= -15;

    main.style.boxShadow = relativeX + "px " + relativeY + "px 0 #000";
});