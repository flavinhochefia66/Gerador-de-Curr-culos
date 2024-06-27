
let countExperiencias = 0
let listaExperiencias = []

function addExperiencia() {

    const adicionar = document.getElementById("add").value;

    if (adicionar === '') {
        return;
    }

    countExperiencias += 1;


    listaExperiencias.push(adicionar)
    let indexNovoItem = listaExperiencias.indexOf(adicionar)

    let novoParagrafo = document.createElement('p');

    let texto = document.createTextNode(adicionar);

    novoParagrafo.appendChild(texto);

    let remover = document.createElement('button')
    remover.textContent = '-';  
    remover.className = 'removebuttons';
    remover.id = countExperiencias;

    const form = document.querySelector('form');
    let input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'experiencias[]';
    input.value = adicionar;
    input.id = `input_${indexNovoItem}`
    form.appendChild(input);
    


    remover.addEventListener('click', function() {

        let index = listaExperiencias.indexOf(adicionar)

        let inputParaRemover = document.getElementById(`input_${indexNovoItem}`);

        listaExperiencias.splice(index, 1)

        inputParaRemover.remove()
        novoParagrafo.remove()
    });

    novoParagrafo.appendChild(remover);

    let divConteudo = document.getElementById('experiencias');
    divConteudo.appendChild(novoParagrafo);

}

function imprimir(){
    window.print();
}