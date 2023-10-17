{{$slot}}
{{-- 
    @slot : usado para inserirmos código dentro do componente quando for chamado, 
    o conteúdo vai aparecer onde está o @slot 
--}}
<form action={{ route('site.contato') }} method="post">
    {{-- 
        O token @CSRF (Cross Site Request Forgery) protege as informações da variáveis via Cookies, 
        de forma que não permita que essas informações sejam desviadas na requisição HTTP. E sem esse
        token, o servidor não processa o formulário
    --}}
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="morivo_contato" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>