<header>
    <nav class="navbar">
        <div class="logo">
            <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo da Empresa">
             </a>
        </div>
       <div class="nomeMenu">
        <ul id="menu">
            <li><a href="#inicio">Início</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#agendamento">Agendamento</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
        </div>
        <!-- Botão do menu -->
        <div id="menu-toggle" class="menu-toggle">&#9776;</div>
    </nav>
    
</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("menu");

        menuToggle.addEventListener("click", function () {
            menu.classList.toggle("show");
        });
    });
</script>

