let pagina = 1;

function transition() {
    if (pagina == 1) {
        document.getElementById("p1").classList.remove("page1-show");
        document.getElementById("p1").classList.add("page1-hide");
        document.getElementById("p2").classList.add("page2-show");
        pagina++;
        var header = document.getElementById("head");
        header.scrollIntoView({ behavior: "smooth" });
    } else {
        if (pagina == 2) {
            document.getElementById("p2").classList.remove("page2-show");
            document.getElementById("p1").classList.add("page1-hide");
            document.getElementById("p2").classList.add("page2-hide");
            document.getElementById("p3").classList.add("page3-show");
            pagina++;
            var header = document.getElementById("head");
            header.scrollIntoView({ behavior: "smooth" });
        }
    }
}

function transitionBack() {
    if (pagina == 2) {
        document.getElementById("p1").classList.add("page1-show");
        document.getElementById("p2").classList.remove("page2-show");
        pagina--;
        var header = document.getElementById("head");
        header.scrollIntoView({ behavior: "smooth" });
    } else {
        if (pagina == 3) {
            document.getElementById("p2").classList.add("page2-show");
            document.getElementById("p3").classList.remove("page3-show");
            pagina--;
            var header = document.getElementById("head");
            header.scrollIntoView({ behavior: "smooth" });
        }
    }
}
