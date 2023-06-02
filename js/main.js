const form = document.querySelector('form');
const result = document.querySelector('.result');
const questions = document.querySelectorAll('.question');
const answers = [];

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Remove mensagens de erro existentes
  const existingErrorText = document.querySelectorAll('.errorText');
  existingErrorText.forEach((errorText) => {
    errorText.remove();
  });

  // Verifica se todas as perguntas foram respondidas
  const unansweredQuestions = Array.from(questions).filter((question, index) => {
    const checked = question.querySelector('input:checked');
    return !checked;
  });

    if (unansweredQuestions.length > 0) {
        // Exibe a mensagem de erro para cada pergunta não respondida
        unansweredQuestions.forEach((question) => {
        const questionNumber = Array.from(questions).indexOf(question) + 1;
        const errorText = document.createElement('p');
        errorText.classList.add('errorText');
        errorText.textContent = `A pergunta número ${questionNumber} não foi respondida, favor responder.`;
        form.appendChild(errorText);
        // Fill Section background red
        question.classList.add('error');        
        });

        // Remove o resultado caso haja alguma pergunta não respondida
        result.innerHTML = '';
    } else {
    /* Cálculo e exibição das mensagens */
    questions.forEach((question, index) => {
      const checked = question.querySelector('input:checked');
      if (checked) {
        answers[index] = checked.value;
      }
    });

    const visual = answers.filter((answer) => answer === 'visual').length;
    const auditory = answers.filter((answer) => answer === 'auditory').length;
    const kinesthetic = answers.filter((answer) => answer === 'kinesthetic').length;
    const resultText = document.createElement('p');

    if (visual > auditory && visual > kinesthetic) {
      resultText.textContent =
        'Você possui uma preferência pelo estilo de aprendizagem visual. Isso significa que você tende a aprender melhor por meio de demonstrações visuais, gráficos e esquemas organizacionais. Utilize recursos visuais e técnicas de visualização para aprimorar seu aprendizado.';
    } else if (auditory > visual && auditory > kinesthetic) {
      resultText.textContent =
        'Você possui uma preferência pelo estilo de aprendizagem auditivo. Isso indica que você aprende melhor por meio de explicações verbais, diálogos e discussões. Aproveite áudios, palestras e técnicas de narração para melhorar seu aprendizado.';
    } else if (kinesthetic > visual && kinesthetic > auditory) {
      resultText.textContent =
        'Você possui uma preferência pelo estilo de aprendizagem cinestésico. Isso significa que você aprende melhor por meio de atividades práticas, envolvimento físico e experiências táteis. Busque oportunidades de experimentar, fazer e aplicar o conhecimento para otimizar seu aprendizado.';
    } else {
      resultText.textContent = 'Amauri vai te orientar';
    }

    // Remove as mensagens de erro caso todas as perguntas estejam respondidas
    const errorTextElements = document.querySelectorAll('.errorText');
    errorTextElements.forEach((errorText) => {
      errorText.remove();
    });

    // Exibe o resultado
    result.innerHTML = '';
    result.appendChild(resultText);
  }
});    

const radioInputs = document.querySelectorAll('input[type="radio"]');

radioInputs.forEach(function (input) {
  input.addEventListener('click', function (e) {
    const question = e.target.closest('.question');
    const checked = question.querySelector('input:checked');

    if (checked) {
      question.classList.add('checado');
    } else {
      question.classList.remove('checado');
    }
  });
});