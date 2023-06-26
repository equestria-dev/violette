window.addEventListener('load', () => {
    window.Box2 = {
        element: document.getElementById("box-2"),
        observer: new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    document.getElementById("box-2-foreground").classList.add("visible");
                    document.getElementById("box-2-foreground").classList.remove("hidden");
                } else {
                    document.getElementById("box-2-foreground").classList.remove("visible");
                    document.getElementById("box-2-foreground").classList.add("hidden");
                }
            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: 0.1,
        })
    }

    Box2.observer.observe(Box2.element);
});