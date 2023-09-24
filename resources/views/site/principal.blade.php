{{-- @ : encapsulamento; reutilização de funções --}}

{{-- Herdando tudo do arquivo basico.blade.php (toda a estrutura HTML) --}}
@extends('site.layout.basico')
{{-- 
    O arquivo herdado tem dois "parâmetros": um chamado 'titulo' e outro chamado 'conteudo' 
    cahamamos o @section, dizemos a qual dos parâmetros ele se refere e colocamos o 
    conteúdo dentro da section
--}}
@section('titulo', 'Home')
@section('conteudo')
    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa</p>
                <div class="chamada">
                    {{-- 
                        asset
                        Usado para referenciar um arquivo, no caso da pasta public
                        Pelo padrão do Laravel, o termo aponta para o conteúdo da pasta public
                    --}}
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>
            <div class="video">
                <img src="{{ asset('img/player_video.png') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida, por favor entre em contato com nossa equipe pelo formulário abaixo</p>
                @component('site.layout._components.form_contato')
                @endcomponents
            </div>
        </div>
    </div>
@endsection