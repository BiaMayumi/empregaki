document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('lerMaisBtn').addEventListener('click', function() {
        document.getElementById('requisitosTexto').classList.toggle('oculto');
        document.getElementById('oferecemos').classList.toggle('oculto');
        document.getElementById('horarios').classList.toggle('oculto');
    });

    document.getElementById('lerMaisBtn1').addEventListener('click', function() {
        document.getElementById('requisitosTexto1').classList.toggle('oculto1');
        document.getElementById('oferecemos1').classList.toggle('oculto1');
        document.getElementById('horarios1').classList.toggle('oculto1');
    });

    document.getElementById('lerMaisBtn2').addEventListener('click', function() {
        document.getElementById('requisitosTexto2').classList.toggle('oculto2');
        document.getElementById('oferecemos2').classList.toggle('oculto2');
        document.getElementById('horarios2').classList.toggle('oculto2');
    });
});

    