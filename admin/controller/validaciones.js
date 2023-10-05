
function calcularAso() {
    const toAsoInput = document.getElementById('to-aso');
    const asoHomInput = document.getElementById('aso-hom');
    const asoMuInput = document.getElementById('aso-mu');

    toAsoInput.addEventListener('input', updateAsoMu);
    asoHomInput.addEventListener('input', updateAsoMu);
    updateAsoMu();

    function updateAsoMu() {
        const toAso = parseInt(toAsoInput.value) || 0;
        let asoHom = parseInt(asoHomInput.value) || 0;

        if (asoHom > toAso) {
            asoHom = toAso;
            asoHomInput.value = asoHom;
        }
        const asoMu = toAso - asoHom;
        asoMuInput.value = asoMu;
    }


}
function validarsumah() {
    let asoHomInput = document.getElementById('aso-hom').value;
    let asoh1 = document.getElementById('aso-po').value;
    let asoh2 = document.getElementById('aso-ad').value;
    let asoh3 = document.getElementById('aso-vi').value;
    let asoh4 = document.getElementById('aso-ot').value;
    let asoh5 = document.getElementById('aso-div').value;

    let suma = parseInt(asoh1) + parseInt(asoh2) + parseInt(asoh3) + parseInt(asoh4) + parseInt(asoh5);
    console.log(suma);
    if (suma > asoHomInput) {
        let asoh5 = document.getElementById('aso-div').value = "";
        alert("La suma de los asociados que integran cada area supera el numero maximo de asociados hombres");

    }
}
function validarsumam() {
    let asoMuInput = document.getElementById('aso-mu').value;
    let asom1 = document.getElementById('aso-mpo').value;
    let asom2 = document.getElementById('aso-mad').value;
    let asom3 = document.getElementById('aso-mvi').value;
    let asom4 = document.getElementById('aso-mot').value;
    let asom5 = document.getElementById('aso-mdiv').value;

    let sumam = parseInt(asom1) + parseInt(asom2) + parseInt(asom3) + parseInt(asom4) + parseInt(asom5);
    console.log(asoMuInput);
    if (sumam > asoMuInput) {
        let asom5 = document.getElementById('aso-mdiv').value = "";
        alert("La suma de los asociadas que integran cada area supera el numero maximo de asociadas mujeres");

    }
}
function calcularemp() {
    const totalPersonasInput = document.getElementById('to-emp');
    const personasHombresInput = document.getElementById('emp-hom');
    const personasMujeresInput = document.getElementById('emp-mu');
    const hombresaInput = document.getElementById('emp-hdiv');
    const mujeresaInput = document.getElementById('emp-mdiv');
    totalPersonasInput.addEventListener('input', updatePersonasMujeres);
    personasHombresInput.addEventListener('input', updatePersonasMujeres);
    hombresaInput.addEventListener('input', updateHombresA);
    mujeresaInput.addEventListener('input', updateMujeresA);
    function updatePersonasMujeres() {
        const totalPersonas = parseInt(totalPersonasInput.value) || 0;
        let personasHombres = parseInt(personasHombresInput.value) || 0;

        if (personasHombres > totalPersonas) {
            personasHombres = totalPersonas;
            personasHombresInput.value = personasHombres;
        }

        const personasMujeres = totalPersonas - personasHombres;
        personasMujeresInput.value = personasMujeres;

        hombresaInput.max = personasHombres;
        mujeresaInput.max = personasMujeres;

        if (parseInt(hombresaInput.value) > personasHombres) {
            hombresaInput.value = personasHombres;
        }

        if (parseInt(mujeresaInput.value) > personasMujeres) {
            mujeresaInput.value = personasMujeres;
        }
    }

    function updateHombresA() {
        const personasHombres = parseInt(personasHombresInput.value) || 0;
        const hombresa = parseInt(hombresaInput.value) || 0;
        if (hombresa > personasHombres) {
            hombresaInput.value = personasHombres;
        }
    }

    function updateMujeresA() {
        const personasMujeres = parseInt(personasMujeresInput.value) || 0;
        const mujeresa = parseInt(mujeresaInput.value) || 0;
        if (mujeresa > personasMujeres) {
            mujeresaInput.value = personasMujeres;
        }
    }

}

