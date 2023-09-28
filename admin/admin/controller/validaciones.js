
function calcularAso() {
    let totalaso = document.getElementById("to-aso").value;
    let totalasohom = document.getElementById("aso-hom").value;
    let totalasomu = document.getElementById("aso-mu").value;

    if (totalasohom == "" && totalasomu != "") {
        document.getElementById("aso-hom").value = totalaso - totalasomu;
    } else {
        if (totalasomu == "" && totalasohom != "") {
            document.getElementById("aso-mu").value = totalaso - totalasohom;
        }
    }
}

function calcularMem() {
    let totalemp = document.getElementById("to-emp").value;
    let totalemphom = document.getElementById("emp-hom").value;
    let totalempmu = document.getElementById("emp-mu").value;

    if (totalemphom == "" && totalempmu != "") {
        document.getElementById("emp-hom").value = totalemp - totalempmu;
    } else {
        if (totalempmu == "" && totalemphom != "") {
            document.getElementById("emp-mu").value = totalemp - totalemphom;
        }
    }
}
