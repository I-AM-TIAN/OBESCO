var header = document.getElementById("head");
var seccionaso = document.getElementById("validacion").value;
switch (parseInt(seccionaso)) {
    case 1:
        document.getElementById("p1").classList.add("page1-hide");
        document.getElementById("p2").classList.add("page2-show");
        header.scrollIntoView({ behavior: "smooth" });
        break;

    case 2:

        document.getElementById("p1").classList.add("page1-hide");
        document.getElementById("p3").classList.add("page3-show");
        header.scrollIntoView({ behavior: "smooth" });
        break;

    case 3:

        document.getElementById("p4").classList.add("page4-show");
        document.getElementById("p1").classList.add("page1-hide");
        header.scrollIntoView({ behavior: "smooth" });
        break;

    case 4:
        document.getElementById("p5").classList.add("page5-show");
        document.getElementById("p1").classList.add("page1-hide");
        header.scrollIntoView({ behavior: "smooth" });
        break;

    case 5:
        document.getElementById("p6").classList.add("page6-show");
        document.getElementById("p1").classList.add("page1-hide");
        header.scrollIntoView({ behavior: "smooth" });
        break;

}
