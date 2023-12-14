<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregaki</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    include_once("../header/index.php");
    ?>

    <!-- Seção 1 -->
    <section class="secao1">
        <h1>Onde talentos encontram oportunidades!</h1>
        <h3>Faça sua pesquisa e veja as melhores opções de vagas do site.</h3>
        <input type="text" placeholder="Pesquise aqui" class="pesquisa">
    </section>



    <!-- Seção 2 -->
    <section class="secao2">
        <h1>Soluções inteligentes de ponta a ponta</h1>
    </section>
    <br>
    <br>
    <br>


    <section class="secao2-5">
        <div class="circulos">
            <img src="img/circulo1.png">
            <h1 id="Recrutamento">Recrutamento & Seleção</h1>
        </div>

        <div class="circulos">
            <img src="img/circulo2.png">
            <h1 id="Admissao">Admissão</h1>
        </div>

        <div class="circulos">
            <img src="img/circulo3.png">
            <h1 id="Educação">Educação Corporativa</h1>
        </div>

    </section>
    <!-- Seção 3 -->
    <section class="secao3">
        <h1>Encontre um emprego na sua área</h1>

        <a href="../vagas/pcd.html">
            <div class="quadrados">
                <h3>PCD</h3>
                <img src="img/pcd.png">
            </div>

            <div class="quadrados">
                <h3>Vendas</h3>
                <img src="img/vendas.png">
            </div>

            <div class="quadrados">
                <h3>Administração</h3>
                <img src="img/administracao.png">
            </div>

            <div class="quadrados">
                <h3>Financeiro</h3>
                <img src="img/financeiro.png">
            </div>

            <div class="quadrados">
                <h3>Saúde</h3>
                <img src="img/saude.png">
            </div>

            <div class="quadrados">
                <h3>Cozinha</h3>
                <img src="../home/img/cozinha.png">
            </div>

            <a href="../vagas/vagas.html"><button class="button">
                    Ver mais
                    <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                    </svg>
                </button></a>
            <br><br>
    </section>

    <!-- Seção 4 -->
    <section class="secao4">
        <h1>Nossos artigos</h1>
        <br> <br>

        <div class="cards">
            <div class="card" style="width: 18rem;">
                <img src="img/artigo1.png" class="card-img-top" alt="Imagem do artigo 1">
                <div class="card-body">
                    <h5 class="card-title">Como montar um bom currículo</h5> <br>
                    <p class="card-text">O profissional que sabe como fazer um bom currículo tem mais chances de se destacar no mercado de trabalho. Venha conhecer as boas práticas que vão ajudar a atrair o interesse dos recrutadores.</p>
                    <a href="../artigo/index.php" class="btn btn-primary">Ler Mais</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/artigo2.png" class="card-img-top" alt="Imagem do artigo 2">
                <div class="card-body">
                    <h5 class="card-title">As tendências do mercado do trabalho</h5> <br>
                    <p class="card-text">Neste artigo abordamos sobre os conhecimentos necessários para se destacar em um ambiente profissional! Separamos então alguns pontos relevantes para você trabalhador.</p>
                    <a href="../artigo/index2.php" class="btn btn-primary">Ler Mais</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/artigo3.png" class="card-img-top" alt="Imagem do artigo 3">
                <div class="card-body">
                    <h5 class="card-title">Estratégias para entrevista de emprego</h5> <br>
                    <p class="card-text">Preparar-se para uma entrevista de emprego é fundamental caso você queira causar uma boa impressão. Confira dicas para entrevista de emprego e prepare-se para seu próximo processo seletivo.</p>
                    <a href="../artigo/index3.php" class="btn btn-primary">Ler Mais</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção 5 -->
    <section class="secao5 text-center py-5">
        <div class="container">
            <h2>Qual a fama da Empregaki?</h2>
            <h4 class="mb-4">Os candidatos:</h4>
            <div class="row gx-4 gy-4">
                <div class="col-md-6">
                    <div class="card p-4">
                        <p class="lead mb-4">"Excelente plataforma para encontrar oportunidades de emprego! Encontrei a vaga dos meus sonhos aqui e estou muito satisfeito com o suporte que recebi."</p>
                        <p class="font-weight-bold">- Joana Silva</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4">
                        <p class="lead mb-4">"A Empregaki me ajudou a dar um salto na minha carreira. O processo de candidatura foi simples e eficiente, e consegui um ótimo emprego rapidamente!"</p>
                        <p class="font-weight-bold">- Pedro Oliveira</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção 6 -->
    <section class="patrocinadores">
        <h2 class="titulo-patrocinadores">Nossos Patrocinadores</h2>
        <br>
        <div class="logos-patrocinadores">
            <div class="linha-patrocinadores">
                <div class="patrocinador">
                    <img src="img/vw.png" class="patrocinador__icone" alt="Volkswagen">
                </div>
                <div class="patrocinador">
                    <img src="img/oboticario.png" class="patrocinador__icone" alt="O Boticário">
                </div>
                <div class="patrocinador">
                    <img src="img/tim.png" class="patrocinador__icone" alt="TIM">
                </div>
                <div class="patrocinador">
                    <img src="img/ford.png" class="patrocinador__icone" alt="Ford">
                </div>
                <div class="patrocinador">
                    <img src="img/indeed.png" class="patrocinador__icone" alt="indeed">
                </div>
                <div class="patrocinador">
                    <img src="img/dell.png" class="patrocinador__icone" alt="dell">
                </div>
                <div class="patrocinador">
                    <img src="img/natura.png" class="patrocinador__icone" alt="natura">
                </div>
                <div class="patrocinador">
                    <img src="img/cna.png" class="patrocinador__icone" alt="leroy merlin">
                </div>
            </div>
    </section>


    <!-- Seção 7 -->
    <section class="secao7">
        <br>
        <div class="textosecao7">Não sabe por onde começar?</div>

        <img src="img/vocacional.png" class="vocacional" alt=":/">
        <div class="texto">
            <p>Preparamos um teste que indica a profissão que mais combina com suas características.</p>
            <p>É super simples e rápido: basta responder a algumas perguntinhas, que você vai receber os resultados.</p>
            <br>
        </div>
        <a href="../formulariotv/testev.html"><button class="botao_">Quero descobrir</button></a>
        <br><br><br><br>
    </section>

    <!-- footer -->
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Todos os direitos reservados:
            <a class="text-body" href="https://Empregaki.com/">Empregaki.</a>
        </div>
    </footer>

</body>

</html>