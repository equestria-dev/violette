window.addEventListener("scroll", (event) => {
    console.log(window.scrollY, window.innerHeight, window.scrollY / window.innerHeight);

    let opacity = 1 - window.scrollY / window.innerHeight;
    if (opacity > 1) opacity = 1;
    if (opacity < 0) opacity = 0;
    document.getElementById("uni-foreground-content-avatar-container").style.opacity = opacity.toString();
    document.getElementById("box-1-background").style.opacity = opacity.toString();

    let position = window.scrollY / 2;
    if (position > window.innerHeight / 2) position = window.innerHeight / 2;
    if (position < 0) position = 0;
    document.getElementById("uni-foreground-content-title").classList.add("scroll-animated");
    document.getElementById("uni-foreground-content-title").style.top = "-" + position.toString() + "px";
})