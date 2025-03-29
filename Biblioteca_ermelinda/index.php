<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Biblioteca Escolar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: "Comic Sans MS", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fbe7;
            color: #4e342e;
            line-height: 1.6;
        }

        header {
            background-color: #8bc34a;
            padding: 1rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #33691e;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        h1 {
            color: #2e7d32;
        }

        h2 {
            color: #558b2f;
        }

        p {
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #8bc34a;
            color: #fff;
        }

        section {
            background: #c5e1a5;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        .livro {
            margin: 1rem 0;
            padding: 1rem;
            border: 2px solid #8bc34a;
            border-radius: 12px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 400px;
            margin: 0 auto;
        }

        input, button {
            padding: 0.8rem;
            border: 1px solid #558b2f;
            border-radius: 8px;
        }

        button {
            background-color: #8bc34a;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #558b2f;
        }

        #translate-btn {
            margin-top: 1rem;
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .gallery img {
            width: 300px;
            height: auto;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#apresentacao">Início</a></li>
                <li><a href="#livros">Livros Disponíveis</a></li>
                <li><a href="#reserva">Reservar Livro</a></li>
            </ul>
        </nav>
        <button id="translate-btn" onclick="toggleLanguage()">Traduzir para Inglês</button>
    </header>

    <main>
        <section id="apresentacao">
            <h1 data-pt="Bem-vindo à Biblioteca Ermelinda" data-en="Welcome to Ermelinda Library">Bem-vindo à Biblioteca Ermelinda</h1>
            <p data-pt="Nosso objetivo é incentivar a leitura e facilitar o acesso ao conhecimento para todos os alunos da ETEC Ermelinda." data-en="Our goal is to encourage reading and facilitate access to knowledge for all ETEC Ermelinda students'.">Nosso objetivo é incentivar a leitura e facilitar o acesso ao conhecimento para todos os alunos.</p>
            <video width="600" controls>
                <source src="video/video1.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <h2 data-pt="Projeto de Divulgação" data-en="Promotion Project">Projeto de Divulgação</h2>
            <p data-pt="Na **Biblioteca Ermelinda**, oferecemos ambientes acolhedores onde lazer e conhecimento se encontram em perfeita harmonia.  

💻 Precisa de ajuda com suas tarefas escolares, mas não tem as ferramentas adequadas?  
Disponibilizamos computadores para auxiliar em suas pesquisas. Agende seu horário com a secretaria e aproveite esse suporte exclusivo!" data-en="At Ermelinda Library, we offer welcoming spaces where leisure and knowledge come together in perfect harmony.  

💻 Need help with your homework but don’t have the necessary tools?  
We provide computers to assist you with your research. Schedule your time with the secretary and take advantage of this exclusive support!">Na Biblioteca Ermelinda, oferecemos ambientes acolhedores onde lazer e conhecimento se encontram em perfeita harmonia.  

💻 Precisa de ajuda com suas tarefas escolares, mas não tem as ferramentas adequadas? 
Disponibilizamos computadores para auxiliar em suas pesquisas. Agende seu horário com a secretaria e aproveite esse suporte exclusivo!</p>
            <div class="gallery">
                <img src="img/img1.jpg" alt="Evento de leitura">
                <img src="img/img2.jpg" alt="Oficina de escrita">
                <img src="img/img3.jpg" alt="Clube do livro">
            </div>
        </section>

        <section id="livros">
        <section id="livros">
            <h1 data-pt="Livros Disponíveis" data-en="Available Books">Livros Disponíveis</h1>
            <div class="livro"><h2>O Pequeno Príncipe</h2><p>Autor: Antoine de Saint-Exupéry</p></div>
            <div class="livro"><h2>Dom Casmurro</h2><p>Autor: Machado de Assis</p></div>
            <div class="livro"><h2>O Cortiço</h2><p>Autor: Aluísio Azevedo</p></div>
            <div class="livro"><h2>Helena</h2><p>Autor: Machado de Assis</p></div>
            <div class="livro"><h2>Memórias Póstumas de Brás Cubas</h2><p>Autor: Machado de Assis</p></div>
            <div class="livro"><h2>Game of Thrones</h2><p>Autor: George R. R. Martin</p></div>
        </section>
        </section>

        <section id="reserva">
            <h1 data-pt="Reservar um Livro" data-en="Reserve a Book">Reservar um Livro</h1>
            <form onsubmit="exibirAlerta(event)">
                <label for="nome" data-pt="Seu Nome:" data-en="Your Name:">Seu Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="livro" data-pt="Livro Desejado:" data-en="Desired Book:">Livro Desejado:</label>
                <input type="text" id="livro" name="livro" required>

                <button type="submit">Reservar</button>
            </form>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 3 ANO DE DESENVOLVIMENTO DE SISTEMAS M-TEC. Todos os direitos reservados.</p>
    </footer>

    <script>
        let currentLanguage = 'pt';

        function toggleLanguage() {
            const elements = document.querySelectorAll('[data-pt]');
            const button = document.getElementById('translate-btn');

            if (currentLanguage === 'pt') {
                elements.forEach(element => {
                    element.textContent = element.getAttribute('data-en');
                });
                button.textContent = 'Traduzir para Português';
                currentLanguage = 'en';
            } else {
                elements.forEach(element => {
                    element.textContent = element.getAttribute('data-pt');
                });
                button.textContent = 'Traduzir para Inglês';
                currentLanguage = 'pt';
            }
        }
    </script>
</body>

</html>
