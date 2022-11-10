// Preload the audio to ensure the user gets jumpscared properly
audio = new Audio("chien.mp3");
trolley = document.getElementById("trolley");

trolley.addEventListener("click", function() {
    audio.play();
    setTimeout(function() {
        document.body.remove();
    }, 300);
}, false);
