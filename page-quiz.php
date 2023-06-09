<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Descubra seu Estilo de Aprendizagem Dominante</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400&display=swap');
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }
            body {
                padding: 5vh 15vw;
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                background-color: #eee;
            }
            .question { margin-bottom: 20px; }
            h1 {
                text-align: center;
                font-size: 4rem;
                margin-bottom: 3rem;
                color: blueviolet;
            }

            section {
                margin: 2rem 0;
                border: 2px solid #ccc;
                border-radius: 8px;
                padding: 2rem;
                transition: background-color 0.2s ease-in-out; 
                background-color: white;
            }
            section * {
                cursor: pointer
            }

            section:hover {
                background-color: #f4f4f4;
            }

            section h2 {
                margin-bottom: 1rem;
            }

            section input {
                display: inline;
                margin-left: 18px;
                margin-right: 5px;
                cursor: pointer;
            }

            .checado,
            .checado:hover {
                background-color: greenyellow;
                border: 2px solid green;
            }

            .error,
            .error:hover {
                background-color: lightcoral;
                border: 2px solid darkred;
                color: white;
                padding: 1rem;
                margin-bottom: 1rem;
                border-radius: 5px;
            }

            section label {
                display: block;
                font-size: 16px;
            }

            button {
                padding: 1rem 5rem;
                border-radius: 5px;
                background-color: blueviolet;
                border: 0;
                color: white;
                text-transform: uppercase;            
                transition: background-color 0.2s ease-in-out;
                font-weight: 600;
            }

            button:hover {
                cursor: pointer;
                background-color: red;
            }

            #modal {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 40vw;
                height: 38vh;
                background-color: white;
                padding: 20px;
                overflow: hidden;
                border-radius: 5px;
                border: none;
                padding: 50px;
                flex-direction: row;
                align-items: center;
            }
            #modal .btnClose {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 1rem;
                cursor: pointer;
                color: white;
                transition: color 0.2s ease-in-out;
                width: 2rem;
                height: 2rem;
                padding: 0;
            }

            #modal h2 {
                text-align: center;
                font-size: 1.25rem;
                margin: 20px 0;
                width: 100%;
                color: blueviolet;
            }

            #modal label {
                font-weight: 400;
            }

            #modal input[name="your-name"],
            #modal input[name="your-email"] {
                outline: none;
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 2px solid #ccc;
                border-radius: 5px;
                transition: border-color 0.2s ease-in-out;
            }

            #modal input[name="your-name"]:focus,
            #modal input[name="your-email"]:focus {
                border-color: blueviolet;
            }

            #modal input[type="submit"] {
                padding: 10px 20px;
                border-radius: 5px;
                background-color: blueviolet;
                border: 0;
                color: white;
                text-transform: uppercase;            
                transition: background-color 0.2s ease-in-out;
                font-weight: 600;
                margin-top: 15px
            }

            #modal input[type="submit"]:hover {
                cursor: pointer;
                background-color: red;
            }

            #modal::BackDrop {
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgba(0,0,0,0.8);
            }


            /*Media Query to Mobile*/
            @media (max-width: 768px) {
                body {
                    padding: 5vh 5vw;
                }
                h1 {
                    font-size: 2rem;
                    line-height: 2.5rem;
                    margin-bottom: 1rem;
                }
                section {
                    margin: 1rem 0;
                    padding: 1rem;
                }

                input {
                    margin-left: 0 !important;
                }

                label {
                    margin-bottom: 1.3rem;
                }

                button {
                    width: 100%;
                    padding: 1rem 2rem;
                }

                #modal {
                    width: 90vw;
                    height: 50vh;
                    padding: 20px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }

                #modal h2 {
                    width: 100%;
                }

                #modal input[name="your-name"],
                #modal input[name="your-email"] {
                    width: 100%;
                }

                #modal input[type="submit"] {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <h1>Quiz: Descubra seu Estilo de Aprendizagem Dominante</h1>
        <form method="post">            
            <section class="question">
                <h2 class="questionInfo">1. Ao aprender algo novo, eu prefiro:</h2>
                <label><input type="radio" value="visual">Ver demonstrações visuais que ilustrem o processo.</label>
                <label><input type="radio" value="auditory">Ouvir alguém explicar detalhadamente as informações.</label>
                <label><input type="radio" value="kinesthetic">Fazer e experimentar na prática.</label>
            </section>
                        
            <section class="question">
                <h2 class="questionInfo">2. Durante uma palestra, eu presto mais atenção:</h2>
                <label><input type="radio" value="visual">Nas apresentações visuais, como slides e gráficos.</label>
                <label><input type="radio" value="auditory">No que o palestrante está dizendo e nos sons ao redor.</label>
                <label><input type="radio" value="kinesthetic">Nos movimentos e gestos do palestrante.</label>
            </section>
                        
            <section class="question">
                <h2 class="questionInfo">3. Quando estou tentando lembrar de algo, eu:</h2>            
                <label><input type="radio" value="visual">Visualizo imagens ou cenas relacionadas.</label>            
                <label><input type="radio" value="auditory">Repito as informações em voz alta ou as discuto comigo mesmo.</label>            
                <label><input type="radio" value="kinesthetic">Tento recriar a sensação física ou ação associada à informação.</label>
            </section>            
            
            <section class="question">
                <h2 class="questionInfo">4. Ao ler um livro, eu prefiro:</h2>            
                <label><input type="radio" value="visual">Apreciar as descrições visuais e imaginar as cenas.</label>            
                <label><input type="radio"value="auditory">Ler em voz alta ou ouvir alguém me contar a história.</label>            
                <label><input type="radio" value="kinesthetic">Sentir o peso e a textura do livro enquanto leio.</label>
            </section>
                        
            <section class="question">
                <h2 class="questionInfo">5. Durante uma conversa, eu costumo:</h2>            
                <label><input type="radio" value="visual">Observar a expressão facial e a linguagem corporal do interlocutor.</label>            
                <label><input type="radio" value="auditory">Prestar atenção nas palavras e entonação utilizadas.</label>            
                <label><input type="radio" value="kinesthetic">Tocar ou gesticular para enfatizar meus pontos de vista.</label>
            </section>
                        
            <section class="question">
                <h2 class="questionInfo">6. Ao estudar, eu me sinto mais engajado quando:</h2>            
                <label><input type="radio" value="visual">Utilizo esquemas, mapas mentais ou gráficos para organizar as informações.</label>            
                <label><input type="radio" value="auditory">Gravo minhas anotações e as ouço posteriormente.</label>            
                <label><input type="radio" value="kinesthetic">Realizo atividades práticas que me permitem experimentar e aplicar o conhecimento.</label>
            </section>            
            
            <section class="question">
                <h2 class="questionInfo">7. Durante uma apresentação, eu me sinto mais conectado quando:</h2>            
                <label><input type="radio" value="visual">Posso ver os slides, gráficos ou demonstrações visuais.</label>            
                <label><input type="radio" value="auditory">Posso ouvir claramente as explicações e exemplos do palestrante.</label>            
                <label><input type="radio" value="kinesthetic">Posso participar de atividades práticas ou discussões interativas.</label>
            </section>            
            
            <section class="question">
                <h2 class="questionInfo">8. Ao planejar algo, eu prefiro:</h2>            
                <label><input type="radio" value="visual">Criar listas, diagramas ou desenhos para visualizar as etapas.</label>            
                <label><input type="radio" value="auditory">Fazer uma lista de tarefas em voz alta ou discutir os planos com outras pessoas.</label>            
                <label><input type="radio" value="kinesthetic">Mover-me fisicamente e agir para iniciar o processo de planejamento.</label>
            </section>
                        
            <section class="question">
                <h2 class="questionInfo">9. Quando estou emocionalmente envolvido em uma situação, eu expresso meus sentimentos:</h2>            
                <label><input type="radio" value="visual">Através da linguagem corporal e expressões faciais.</label>            
                <label><input type="radio" value="auditory">Através de palavras e comunicação verbal.</label>            
                <label><input type="radio" value="kinesthetic">Através de ações físicas, como abraçar ou tocar as pessoas.</label>
            </section>            
            
            <section class="question">
                <h2 class="questionInfo">10. Ao recordar uma memória vívida, eu geralmente me lembro:</h2>            
                <label><input type="radio" value="visual">Das imagens e detalhes visuais da cena.</label>            
                <label><input type="radio" value="auditory">Das vozes, diálogos ou sons associados à situação.</label>            
                <label><input type="radio" value="kinesthetic">Das sensações físicas e emoções experimentadas no momento.</label>
            </section>
            <button type="submit" title="Enviar">Enviar</button>
        </form>
        <div class="result"></div>

        <dialog id="modal">
            <button class="btnClose" title="Fechar">X</button>
            <?php echo do_shortcode('[contact-form-7 id="8" title="Formulário de contato 1"]');?>
        </dialog>        

        <script>
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
                        resultText.textContent = 'Não foi definir o seu estilo de aprendizagem.';
                    }

                    // Remove as mensagens de erro caso todas as perguntas estejam respondidas
                    const errorTextElements = document.querySelectorAll('.errorText');
                    errorTextElements.forEach((errorText) => {
                        errorText.remove();
                    });

                    // Exibe o resultado
                    result.innerHTML = '';
                    result.appendChild(resultText);
					console.log(visual, auditory, kinesthetic)
					
					//Pega os valores das variaveis e coloca nos fields hidden do Contact Form7
					const visualField = document.getElementById('visual');
					visualField.value = visual;
					
					const auditivoField = document.getElementById('auditivo');
					auditivoField.value = auditory;
					
					const cinestesicoField = document.getElementById('cinestesico')
					cinestesicoField.value = kinesthetic;
					
					const cf7hidden = document.querySelector('#resposta');
			        cf7hidden.value = resultText.innerText;

                    const modal = document.querySelector('#modal');
                    //Show Modal BackDrop
                    modal.showModal();
                    modal.style.display = 'flex';

                    // Close Modal
                    const btnClose = document.querySelector('.btnClose');
                    btnClose.addEventListener('click', function () {
                        const modal = document.querySelector('#modal');
                        modal.close();
                        modal.style.display = 'none';
                    });
                }
            });                

            // Remove a classe de erro ao clicar em uma opção
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
			
        </script>
    </body>
</html>