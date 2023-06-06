window.addEventListener("load", (event) => {
    document.getElementById("uni-foreground-content-title").style.top = "-34px";
})

window.addEventListener("scroll", (event) => {
    console.log(window.scrollY, window.innerHeight, window.scrollY / window.innerHeight);

    let opacity = 1 - window.scrollY / window.innerHeight;
    if (opacity > 1) opacity = 1;
    if (opacity < 0) opacity = 0;
    document.getElementById("uni-foreground-content-avatar-container").style.opacity = opacity.toString();
    document.getElementById("box-1-background").style.opacity = opacity.toString();

    let position = window.scrollY / 2 + 34;
    if (position > window.innerHeight / 2 + 34) position = window.innerHeight / 2 + 34;
    if (position < 0) position = 0;

    document.getElementById("uni-foreground-content-title").classList.add("scroll-animated");
    document.getElementById("uni-foreground-content-title").classList.add("title-visible");
    document.getElementById("uni-foreground-content-title").style.top = "-" + position.toString() + "px";

    if (window.scrollY / 2 + 34 > window.innerHeight / 2 + document.getElementById("box-3").clientHeight / 1.5 + document.getElementById("box-4").clientHeight / 1.5) {
        document.getElementById("uni-foreground-content-title2").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title2").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title3").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title3").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title4").classList.add("title-visible");
        document.getElementById("uni-foreground-content-title4").classList.remove("title-hidden");
    } else if (window.scrollY / 2 + 34 > window.innerHeight / 2 + document.getElementById("box-3").clientHeight / 1.5) {
        document.getElementById("uni-foreground-content-title2").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title2").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title3").classList.add("title-visible");
        document.getElementById("uni-foreground-content-title3").classList.remove("title-hidden");
        document.getElementById("uni-foreground-content-title4").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title4").classList.add("title-hidden");
    } else if (window.scrollY / 2 + 34 > window.innerHeight / 2 + 50) {
        document.getElementById("uni-foreground-content-title").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title3").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title3").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title2").classList.add("title-visible");
        document.getElementById("uni-foreground-content-title2").classList.remove("title-hidden");
        document.getElementById("uni-foreground-content-title4").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title4").classList.add("title-hidden");
    } else {
        document.getElementById("uni-foreground-content-title").classList.add("title-visible");
        document.getElementById("uni-foreground-content-title").classList.remove("title-hidden");
        document.getElementById("uni-foreground-content-title2").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title2").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title3").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title3").classList.add("title-hidden");
        document.getElementById("uni-foreground-content-title4").classList.remove("title-visible");
        document.getElementById("uni-foreground-content-title4").classList.add("title-hidden");
    }
})