<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - ETEC Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="inscricao.css">
</head>
<body>

<header>
    <div class="header-top">
        <div class="logo-section">
            <h1>ETEC Zona Leste</h1>
            <p>Centro Paula Souza</p>
        </div>
        <div class="header-contact">
            <span><a href="tel:+551120454000">(11) 2045-4000</a></span>
            <span><a href="mailto:dir.etezonaleste@centropaulasouza.sp.gov.br">dir.etezonaleste@centropaulasouza.sp.gov.br</a></span>
        </div>
    </div>
    <nav>
        <a href="index.html">Início</a>
        <a href="sobre.html">Sobre</a>
        
        <div class="nav-item">
            <a href="cursos.html">Cursos</a>
            <div class="dropdown-menu">
                <a href="cursos.html#tecnicos">Cursos Técnicos - Modalidade Presencial</a>
                <a href="cursos.html#mtec">Ensino Médio Integrado ao Técnico (M-Tec)</a>
                <a href="cursos.html#ams">Articulação dos Ensinos Médios - Técnico e Superior (AMS)</a>
            </div>
        </div>
        
        <a href="inscricao.html">Inscrição</a>
        <a href="contato.html">Contato</a>
    </nav>
</header>

<div class="container">
    <h2>Formulário de Inscrição</h2>
    <p style="margin-bottom: 30px;">
        Preencha o formulário abaixo para se inscrever em um de nossos cursos técnicos. 
        Todos os campos marcados com * são obrigatórios.
    </p>


    <div class="form-box">
        <form id="formInscricao" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-grid">

            <div>
                <label>Nome Completo *</label>
                <input type="text" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div>
                <label>Email *</label>
                <input type="email" name="email" placeholder="seu.email@exemplo.com" required>
            </div>

            <div>
                <label>Telefone *</label>
                <input type="tel" name="telefone" placeholder="(11) 98765-4321" required>
            </div>

            <div>
                <label>Data de Nascimento *</label>
                <input type="date" name="datanascimento" required>
            </div>

            <div class="full">
                <label>Endereço Completo *</label>
                <input type="text" name="endereco" placeholder="Rua/Av., número, complemento" required>
            </div>

            <div>
                <label>Bairro *</label>
                <input type="text" name="bairro" placeholder="Nome do bairro" required>
            </div>

            <div>
                <label>Município *</label>
                <input type="text" name="municipio" placeholder="Município" required>
            </div>

            <div class="full">
                <label>Nível de Escolaridade Atual *</label>
                <select name="escolaridade" required>
                    <option value="">Selecione...</option>
                    <option>Cursando o Ensino Fundamental (8º ou 9º ano)</option>
                    <option>Ensino Fundamental Completo</option>
                    <option>Cursando o Ensino Médio</option>
                    <option>Ensino Médio Completo</option>
                    <option>Ensino Superior Incompleto</option>
                    <option>Ensino Superior Completo</option>
                </select>
            </div>

            <div class="full">
                <label>Qual curso você deseja se inscrever? *</label>
                <select name="curso" required>
                    <option value="">Selecione um curso</option>
                    <option>Desenvolvimento de Sistemas</option>
                    <option>Administração</option>
                    <option>Contabilidade</option>
                    <option>Finanças</option>
                    <option>Logística</option>
                    <option>Recursos Humanos</option>
                    <option>Serviços Jurídicos</option>
                </select>
            </div>

            <div class="full">
                <label>Por que você se interessa por este curso? *</label>
                <textarea name="motivacao" rows="5" placeholder="Conte-nos sobre seus objetivos profissionais e por que escolheu este curso..." required></textarea>
            </div>

            <div class="full">
                <label>Você já possui experiência na área? (Opcional)</label>
                <textarea name="experiencia" rows="3" placeholder="Descreva qualquer experiência prévia relacionada ao curso..."></textarea>
            </div>

            <div class="full" style="display: flex; gap: 15px; align-items: flex-start;">
                <input type="checkbox" name="termos" id="termos" required style="width: auto; margin-top: 12px;">
                <label for="termos" style="margin: 0; margin-top: 12px;">Concordo com os termos e condições de inscrição e aceito a política de privacidade *</label>
            </div>

            <div class="full botoes-container">
                <button type="submit" class="btn-enviar">Enviar Inscrição</button>
                <button type="button" class="btn-cancelar" onclick="window.location.href='index.html'">Cancelar</button>
            </div>

        </form>
    </div>
</div>

<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>Sobre</h3>
            <p>ETEC Zona Leste - Instituição de ensino técnico público mantida pelo Centro Paula Souza.</p>
            <p>Formando profissionais qualificados desde 2006.</p>
        </div>

        <div class="footer-section">
            <h3>Contato</h3>
            <p>📍 Avenida Águia de Haia, 2633</p>
            <p>Cidade AE Carvalho - São Paulo, SP - CEP: 03694-000</p>
            <p>📞 <a href="tel:+551120454000">(11) 2045-4000</a></p>
            <p>📧 <a href="mailto:dir.etezonaleste@centropaulasouza.sp.gov.br">dir.etezonaleste@centropaulasouza.sp.gov.br</a></p>
        </div>

        <div class="footer-section">
            <h3>Links Úteis</h3>
            <p><a href="sobre.html">Sobre a ETEC</a></p>
            <p><a href="cursos.html">Nossos Cursos</a></p>
            <p><a href="https://www.cps.sp.gov.br" target="_blank">Centro Paula Souza</a></p>
            <p><a href="contato.html">Fale Conosco</a></p>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>© 2026 ETEC Zona Leste - Centro Paula Souza | Todos os direitos reservados</p>
    </div>
</footer>

<script src="inscricao.js"></script>
</body>
</html>