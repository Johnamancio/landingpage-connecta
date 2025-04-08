<section id="contato">
    <div class="container-contato">
        <h2 class="titulo-contato">Entre em Contato</h2>
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif
        <form action="{{ route('enviar.email') }}" method="POST">
            @csrf

            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <textarea name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>

            <button id="button_form" type="submit">Enviar</button>
        </form>
    </div>
</section>
