function validar() {
    salario = parseInt(document.getElementById('salario').value);
    if (salario < 180) {
        window.alert("proporcione un salario mayor o igual a 180");
        return false;
    }
    return true;
}