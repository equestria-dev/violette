window.addEventListener('load', () => {
    window.Box1 = {
        element: document.getElementById("box-1"),
        observer: new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    document.getElementById("box-1").classList.add("visible");
                    document.getElementById("uni-foreground").classList.add("visible");
                }
            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        })
    }

    Box1.observer.observe(Box1.element);
});