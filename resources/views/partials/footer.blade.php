<footer id="footer">
    <div class="container">
        <div class="footer-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        
        <div class="footer-links">
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#agendamento">Agendamento</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>

        <div class="footer-social">
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://whatsapp.com" target="_blank">WhatsApp</a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Minha Empresa. Todos os direitos reservados.</p>
    </div>
</footer>
