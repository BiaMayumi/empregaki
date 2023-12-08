document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn');
    var lerMenosBtn = document.querySelector('.lerMenosBtn');
    var requisitosTexto = document.getElementById('requisitosTexto');
    var oferecemos = document.getElementById('oferecemos');
    var horarios = document.getElementById('horarios'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto');
            oferecemos.classList.remove('oculto');
            horarios.classList.remove('oculto');
            lerMaisBtn.classList.add('oculto');
            lerMenosBtn.classList.remove('oculto');
        } else {
            requisitosTexto.classList.remove('oculto');
            oferecemos.classList.add('oculto');
            horarios.classList.add('oculto');
            lerMaisBtn.classList.remove('oculto');
            lerMenosBtn.classList.add('oculto');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto');
        oferecemos.classList.add('oculto');
        horarios.classList.add('oculto');
        lerMaisBtn.classList.remove('oculto');
        lerMenosBtn.classList.add('oculto');
        isExpanded = false;
    });
});

// Técnico de TI
document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn1');
    var lerMenosBtn = document.querySelector('.lerMenosBtn1');
    var requisitosTexto = document.getElementById('requisitosTexto1');
    var oferecemos = document.getElementById('oferecemos1');
    var horarios = document.getElementById('horarios1'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto1');
            oferecemos.classList.remove('oculto1');
            horarios.classList.remove('oculto1');
            lerMaisBtn.classList.add('oculto1');
            lerMenosBtn.classList.remove('oculto1');
        } else {
            requisitosTexto.classList.remove('oculto1');
            oferecemos.classList.add('oculto1');
            horarios.classList.add('oculto1');
            lerMaisBtn.classList.remove('oculto1');
            lerMenosBtn.classList.add('oculto1');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto1');
        oferecemos.classList.add('oculto1');
        horarios.classList.add('oculto1');
        lerMaisBtn.classList.remove('oculto1');
        lerMenosBtn.classList.add('oculto1');
        isExpanded = false;
    });
});

//Analista Comercial
document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn2');
    var lerMenosBtn = document.querySelector('.lerMenosBtn2');
    var requisitosTexto = document.getElementById('requisitosTexto2');
    var oferecemos = document.getElementById('oferecemos2');
    var horarios = document.getElementById('horarios2'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto2');
            oferecemos.classList.remove('oculto2');
            horarios.classList.remove('oculto2');
            lerMaisBtn.classList.add('oculto2');
            lerMenosBtn.classList.remove('oculto2');
        } else {
            requisitosTexto.classList.remove('oculto2');
            oferecemos.classList.add('oculto2');
            horarios.classList.add('oculto2');
            lerMaisBtn.classList.remove('oculto2');
            lerMenosBtn.classList.add('oculto2');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto2');
        oferecemos.classList.add('oculto2');
        horarios.classList.add('oculto2');
        lerMaisBtn.classList.remove('oculto2');
        lerMenosBtn.classList.add('oculto2');
        isExpanded = false;
    });
});

//Técnico de Celular
document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn3');
    var lerMenosBtn = document.querySelector('.lerMenosBtn3');
    var requisitosTexto = document.getElementById('requisitosTexto3');
    var oferecemos = document.getElementById('oferecemos3');
    var horarios = document.getElementById('horarios3'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto3');
            oferecemos.classList.remove('oculto3');
            horarios.classList.remove('oculto3');
            lerMaisBtn.classList.add('oculto3');
            lerMenosBtn.classList.remove('oculto3');
        } else {
            requisitosTexto.classList.remove('oculto3');
            oferecemos.classList.add('oculto3');
            horarios.classList.add('oculto3');
            lerMaisBtn.classList.remove('oculto3');
            lerMenosBtn.classList.add('oculto3');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto3');
        oferecemos.classList.add('oculto3');
        horarios.classList.add('oculto3');
        lerMaisBtn.classList.remove('oculto3');
        lerMenosBtn.classList.add('oculto3');
        isExpanded = false;
    });
});

//Vendedor Sênior
document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn4');
    var lerMenosBtn = document.querySelector('.lerMenosBtn4');
    var requisitosTexto = document.getElementById('requisitosTexto4');
    var oferecemos = document.getElementById('oferecemos4');
    var horarios = document.getElementById('horarios4'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto4');
            oferecemos.classList.remove('oculto4');
            horarios.classList.remove('oculto4');
            lerMaisBtn.classList.add('oculto4');
            lerMenosBtn.classList.remove('oculto4');
        } else {
            requisitosTexto.classList.remove('oculto4');
            oferecemos.classList.add('oculto4');
            horarios.classList.add('oculto4');
            lerMaisBtn.classList.remove('oculto4');
            lerMenosBtn.classList.add('oculto4');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto4');
        oferecemos.classList.add('oculto4');
        horarios.classList.add('oculto4');
        lerMaisBtn.classList.remove('oculto4');
        lerMenosBtn.classList.add('oculto4');
        isExpanded = false;
    });
});

//Programador back-end
document.addEventListener('DOMContentLoaded', function () {
    var lerMaisBtn = document.querySelector('.lerMaisBtn5');
    var lerMenosBtn = document.querySelector('.lerMenosBtn5');
    var requisitosTexto = document.getElementById('requisitosTexto5');
    var oferecemos = document.getElementById('oferecemos5');
    var horarios = document.getElementById('horarios5'); 
    var isExpanded = false;

    lerMaisBtn.addEventListener('click', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            requisitosTexto.classList.remove('oculto5');
            oferecemos.classList.remove('oculto5');
            horarios.classList.remove('oculto5');
            lerMaisBtn.classList.add('oculto5');
            lerMenosBtn.classList.remove('oculto5');
        } else {
            requisitosTexto.classList.remove('oculto5');
            oferecemos.classList.add('oculto5');
            horarios.classList.add('oculto5');
            lerMaisBtn.classList.remove('oculto5');
            lerMenosBtn.classList.add('oculto5');
        }
    });

    lerMenosBtn.addEventListener('click', function () {
        requisitosTexto.classList.add('oculto5');
        oferecemos.classList.add('oculto5');
        horarios.classList.add('oculto5');
        lerMaisBtn.classList.remove('oculto5');
        lerMenosBtn.classList.add('oculto5');
        isExpanded = false;
    });
});
