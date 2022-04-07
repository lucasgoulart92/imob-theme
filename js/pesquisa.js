var searchComprar = document.querySelector('form.formcomprar');
var searchAlugar = document.querySelector('form.formalugar');

var comprarButton = document.querySelector('button.comprar');
var alugarButton = document.querySelector('button.alugar');

function mostraComprar() {
    searchComprar.classList.remove('hiddenform');
    searchAlugar.classList.add('hiddenform');
    comprarButton.classList.add('active');
    alugarButton.classList.remove('active');
}

function mostraAlugar() {
    searchAlugar.classList.remove('hiddenform');
    searchComprar.classList.add('hiddenform');
    comprarButton.classList.remove('active');
    alugarButton.classList.add('active');
}