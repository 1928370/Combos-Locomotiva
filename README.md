<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
        <img src="img/logo.png" alt="Logo do Salão" style="max-width: 100px; border-radius: 50%;">
        </nav>
    </header>
    <title>Salão de Beleza</title>
    <link rel="website icon" type="png"
    href="img/logo.png"
</head>
    <style>
        body {
           font-family: 'Poppins', Arial, sans-serif;
           margin: 0;
           padding: 0;
           background-color: #f4f4f4;
           color: #333;
}
        a {
            text-decoration: none;
            color:#333
        }
        a {
            text-decoration: none;
            color:#333;
        }
        header {
            background: linear-gradient(90deg, #ff007f, #ff99cc); /* Degradê de rosa escuro para rosa claro */
            color: #fff;
            padding: 10px 0;
            text-align: center;
}
        header h1 {
            margin: 0;
            font-size: 2em;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color:#333
        }
        h2 {
            text-align: center;
            color:#333
        }
        .service {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adiciona uma sombra */
            background-color: #fff; /* Fundo branco para destaque */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
}
        .service img {
            max-width: 120px; /* Aumenta o tamanho da imagem */
            border-radius: 10px; /* Bordas arredondadas */
            margin-right: 15px; /* Espaço entre a imagem e o texto */
}
        .service h3 {
            font-size: 1.5em; /* Aumenta o tamanho do título */
            color: #ff007f; /* Rosa escuro para destaque */
            margin: 0;
}
        .service p {
            margin: 5px 0;
        }
        .service p {
            font-size: 1.2em; /* Aumenta o tamanho do preço */
            color: #333; /* Cor mais escura para contraste */
            font-weight: bold; /* Deixa o texto em negrito */
            margin: 5px 0 0;
}
        .service:hover {
            transform: scale(1.02); /* Aumenta levemente ao passar o mouse */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Intensifica a sombra */
}
        footer {
            text-align: center;
            padding: 20px 0;
            background: #333;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Espaçamento entre os elementos */
            background-color: #fff; /* Fundo branco */
            padding: 20px;
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
            max-width: 400px;
            margin: 0 auto; /* Centraliza o formulário */
}
form label {
    font-size: 1em;
    font-weight: bold;
    color: #333;
}
form input, form select, form button {
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ddd;
    border-radius: 5px; /* Bordas arredondadas */
    outline: none;
    transition: all 0.3s ease;
}

form input:focus, form select:focus {
    border-color: #ff007f; /* Destaque ao focar */
    box-shadow: 0 0 5px rgba(255, 0, 127, 0.5);
}

form button {
    background-color: #ff007f; /* Rosa escuro */
    color: #fff;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #e60073; /* Tom mais escuro ao passar o mouse */
}
        form button:active {
            transform: scale(0.98);
        }


    </style>
</head>
<body>

<header>
    <h1>Salão da Cleurice</h1>
    <nav>
        <a href="#servicos">Serviços</a>
        <a href="#agendamento">Agendamentos</a>
    </nav>
</header>

<div class="container">
    <section id="servicos">
        <h2>Serviços</h2>
        <div class="service" onclick="selecionarServico('Corte de Cabelo')">
            <img src="img/corte de cabelo.jpg" alt="Corte de cabelo">
            <div>
                <h3>Corte de Cabelo</h3>
                <p>R$ 50,00</p>
            </div>
        </div>
        <div class="service" onclick="selecionarServico('Tintura de Cabelo')">
            <img src="img/tinta de cabelo.jpeg" alt="Tintura de cabelo">
            <div>
                <h3>Tintura de Cabelo</h3>
                <p>R$ 120,00</p>
            </div>
        </div>
        <div class="service" onclick="selecionarServico('Manicure')">
            <img src="img/manicure.jpg" alt="Manicure">
            <div>
                <h3>Manicure</h3>
                <p>R$ 30,00</p>
            </div>
        </div>
    </section>





    <section id="agendamento">
        <section id="agendamento">
            <h2>Agendamentos</h2>
            <form id="form-agendamento">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                
                <label for="servico">Serviço:</label>
                <select id="servico" name="servico" required>
                    <option value="" disabled selected>Selecione um serviço</option>
                    <option value="Corte de Cabelo">Corte de Cabelo</option>
                    <option value="Tintura de Cabelo">Tintura de Cabelo</option>
                    <option value="Manicure">Manicure</option>
                </select><br><br>
                
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required><br><br>
                
                <label for="horario">Horário:</label>
                <input type="time" id="horario" name="horario" required><br><br>
                
                <button type="button" onclick="enviarWhatsApp()">Agendar</button>
            </form>
        </section>
        <script>
            function enviarWhatsApp() {
                const nome = document.getElementById('nome').value;
                const servico = document.getElementById('servico').value;
                const data = document.getElementById('data').value;
                const horario = document.getElementById('horario').value;
        
                if (nome && servico && data && horario) {
                    const mensagem = `Olá, gostaria de agendar um horário no salão!%0A%0A` +
                                     `*Nome:* ${nome}%0A` +
                                     `*Serviço:* ${servico}%0A` +
                                     `*Data:* ${data}%0A` +
                                     `*Horário:* ${horario}`;
                    const telefoneDona = "5581999999999"; // Substitua pelo número da dona do salão (inclua o código do país)
                    const url = `https://wa.me/553488095621?text=${mensagem}`;
                    window.open(url, '_blank');
                } else {
                    alert('Por favor, preencha todos os campos antes de agendar.');
                }
            }
        </script>
</div>

<footer>
    <p>&copy; 2025 Salão da Cleurice. Todos os direitos reservados.</p>
</footer>

</body>
</html>
