const questions = [
    { question: "1. Qual característica tem mais haver com você?", options: ["Compreensivo", "Agregador", "Detalhista", "Objetivo"] },
    { question: "2. Usar números e símbolos numéricos é fácil para você?", options: ["Sim", "Na maioria das vezes", "Algumas vezes", "Não"] },
    { question: "3. Você gosta de esportes?", options: ["Eu amo esportes", "Sim", "Um pouco", "Não"] },
    { question: "4. Quando imagina sua vida daqui a dez anos, você se vê como um profissional:", options: ["Atuante em minha comunidade", "Muito bem sucedido financeiramente", "Realizado, fazendo as coisas que gosto", "Reconhecido e valorizado no mercado"] }, 
    { question: "5. Você gosta mais de atividades que envolvam:", options: ["Estratégia, compra e venda", "Máquinas, atividade corporal, alimentos, plantas ou animais", "Planejamento, ordenação ou cálculo", "Criação, expressão ou beleza"] }, 
    { question: "6. Você imagina se destacar profissionalmente:", options: ["Pela sua ótima capacidade de análise", "Pela sua excelência em estruturar processos", "Pelas suas ótimas habilidades de Comunicação", "Por ser bastante determinado"] },
    { question: "7. O emprego ideal é aquele no qual você:", options: ["Contribui com a sociedade", "Traz segurança", "Pode colocar a mão na massa", "Surpreende ou emociona as pessoas"] },
];

let currentQuestion = 0;
let answers = [];

const quizContainer = document.getElementById('quiz-container');
const questionContainer = document.getElementById('question-container');
const resultContainer = document.getElementById('result-container');
const resultText = document.getElementById('result');

function displayQuestion() {
    const currentQues = questions[currentQuestion];
    questionContainer.innerHTML = `
        <h3>${currentQues.question}</h3>
        <label><input type="radio" name="answer" value="0">${currentQues.options[0]}</label><br>
        <label><input type="radio" name="answer" value="1">${currentQues.options[1]}</label><br>
        <label><input type="radio" name="answer" value="2">${currentQues.options[2]}</label><br>
        <label><input type="radio" name="answer" value="2">${currentQues.options[3]}</label><br>
    `;
}

function nextQuestion() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (!selectedAnswer) {
        alert('Por favor, selecione uma opção.');
        return;
    }

    answers.push(parseInt(selectedAnswer.value));

    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        displayQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    const totalScores = [0, 0, 0, 0]; // Inicializa os pontos para cada categoria
    answers.forEach((answer, index) => {
        totalScores[answer] += index + 1;
    });

    const maxScoreIndex = totalScores.indexOf(Math.max(...totalScores));

    // Mapeie o índice de pontuação máxima para a profissão correspondente
    const professions = ["Profissão ", "Profissão 2", "Profissão 3"];
    const result = professions[maxScoreIndex];

    // Exiba o resultado
    resultText.innerHTML = `Com base nas suas respostas, a profissão que mais se adequa a você é: <strong>${result}</strong>.`;
    resultContainer.style.display = 'block';
    quizContainer.style.display = 'none';
}

// Inicializa o quiz
displayQuestion();