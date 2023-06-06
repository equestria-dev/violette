window.addEventListener('load', () => {
    window.Box3 = {
        element: document.getElementById("box-3"),
        observer: new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    document.getElementById("box-3").classList.add("visible");
                    document.getElementById("box-3-foreground").classList.add("visible");
                } else {
                    document.getElementById("box-3").classList.remove("visible");
                    document.getElementById("box-3-foreground").classList.remove("visible");
                }
            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        })
    }

    Box3.observer.observe(Box3.element);
});