const discord = document.getElementById("discord");
const button = document.getElementById("button");
const hint = document.getElementById("hint");
const main = document.getElementsByTagName("main")[0];
const audio = new Audio("chien.mp3");

discord.addEventListener("click", () => {
    navigator.clipboard.writeText("CarbonLollipop#9880");
    if(hint.innerHTML == "copied!")
    return;
    hint.innerHTML = "copied!";
    setTimeout(() => {
        hint.innerText = "";
    }, 1000);
})

button.addEventListener("click", () => {
    setTimeout(() => {
        audio.play();
        document.body.remove();
    }, Math.floor(Math.random()*1000));
})

if(!navigator.userAgentData.mobile) {
    document.addEventListener("mousemove", () => {
        main.style.boxShadow = (event.clientX - window.innerWidth / 2) / -15 + "px " + (event.clientY - window.innerHeight / 2) / -15 + "px 0 #000";
    });
}
