window.addEventListener('load', () => {
    window.Box4 = {
        element: document.getElementById("box-4"),
        observer: new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    document.getElementById("box-4").classList.add("visible");
                    document.getElementById("box-4-foreground").classList.add("visible");
                } else {
                    document.getElementById("box-4").classList.remove("visible");
                    document.getElementById("box-4-foreground").classList.remove("visible");
                }
            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        })
    }

    Box4.observer.observe(Box4.element);
});