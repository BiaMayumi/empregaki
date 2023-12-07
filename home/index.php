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

        <div class="quadrados">
            <h3>Primeiro Emprego</h3>
            <img src="img/img quadrado.png">
        </div>

        <div class="quadrados">
            <h3>Vendas</h3>
            <img src="img/img quadrado2.png">
        </div>

        <div class="quadrados">
            <h3>Administração</h3>
            <img src="img/img quadrado3.png">
        </div>

        <div class="quadrados">
            <h3>Financeiro</h3>
            <img src="img/img quadrado4.png">
        </div>

        <div class="quadrados">
            <h3>Saúde</h3>
            <img src="img/img quadrado5.png">
        </div>

        <div class="quadrados">
            <h3>Cozinha</h3>
            <img src="img/img quadrado6.png">
        </div>
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
                    <p class="card-text">Você precisa pensar no conceito de marketing pessoal para aplicar ao seu currículo. Essa é a essência do que você precisa dominar, já que está preparando seu currículo com a finalidade de atrair e convencer um potencial empregador.</p>
                    <a href="#" class="btn btn-primary">Ler Mais</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/artigo2.png" class="card-img-top" alt="Imagem do artigo 2">
                <div class="card-body">
                    <h5 class="card-title">As tendências do mercado do trabalho</h5> <br>
                    <p class="card-text">A automação e a inteligência artificial, o trabalho remoto e freelance, a economia digital e o comércio eletrônico bem como a sustentabilidade são algumas das principais tendências que moldam o mercado de trabalho atual.</p>
                    <a href="#" class="btn btn-primary">Ler Mais</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/artigo3.png" class="card-img-top" alt="Imagem do artigo 3">
                <div class="card-body">
                    <h5 class="card-title">Estratégias para entrevista de emprego</h5> <br>
                    <p class="card-text">A habilidade de gerenciar o estresse, a postura, o tom de voz, a oratória e a forma de responder com calma a perguntas difíceis é outra faceta crucial do comportamento avaliado durante uma entrevista de emprego.</p>
                    <a href="#" class="btn btn-primary">Ler Mais</a>
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
    <section class="secao6 text-center py-5">
        <div class="container">
            <h2>Nossos Patrocinadores</h2>
            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/vw.png" class="patrocinador__icone" alt="Volkswagen">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/oboticario.png" class="patrocinador__icone" alt="O Boticário">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/tim.png" class="patrocinador__icone" alt="TIM">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/ford.png" class="patrocinador__icone" alt="Ford">
                    </div>
                </div>
                <!-- Novas colunas para os novos patrocinadores -->
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/indeed.png" class="patrocinador__icone" alt="indeed">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/dell.png" class="patrocinador__icone" alt="dell">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/natura.png" class="patrocinador__icone" alt="natura">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="patrocinador">
                        <img src="img/cna.png" class="patrocinador__icone" alt="leroy merlin">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Seção 7 -->
    <section class="container">
        <h1>Não sabe por onde começar?</h1>
        <img src="img/vocacional.png" class="vocacional" alt=":/">
        <div class="texto">
            <p>Preparamos um teste que indica a profissão que mais combina com suas características.</p>
            <p>É super simples e rápido: basta responder a algumas perguntinhas, que você vai receber os resultados.</p>
        </div>
        <button class="botao_">Quero descobrir</button>
        
    </section>

</body>

</html>


</body>

</html>