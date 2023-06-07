<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Descubra seu Estilo de Aprendizagem Dominante</title>
        <link rel="stylesheet" href="style.css">
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
        <script src="js/main.js"></script>
    </body>
</html>