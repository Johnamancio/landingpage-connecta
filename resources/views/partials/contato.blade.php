<section id="contato">
    <div class="container-contato">
        <h2 class="titulo-contato">Entre em Contato</h2>
        <form action="{{ route('enviar.email') }}" method="POST">
            @csrf

            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <textarea name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
