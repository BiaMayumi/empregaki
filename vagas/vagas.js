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
