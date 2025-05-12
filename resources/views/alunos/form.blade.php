<form action="{{ route('alunos.store') }}" method="POST">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $aluno->nome ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ old('cpf', $aluno->cpf ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ old('data_nascimento', $aluno->data_nascimento ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $aluno->email ?? '') }}">
    </div>



<div class="mb-3">
    <label for="cep" class="form-label">CEP</label>
    <input type="text" name="cep" id="cep" class="form-control" value="{{ old('cep', $aluno->cep ?? '') }}">
</div>


<div class="mb-3">
    <label for="logradouro" class="form-label">Logradouro</label>
    <input type="text" name="logradouro" id="logradouro" class="form-control" value="{{ old('logradouro', $aluno->logradouro ?? '') }}">
</div>  

<div class="mb-3">
    <label for="numero" class="form-label">Número</label>
    <input type="text" name="numero" id="numero" class="form-control" value="{{ old('numero', $aluno->numero ?? '') }}">
</div>  

<div class="mb-3">
    <label for="bairro" class="form-label">Bairro</label>
    <input type="text" name="bairro" id="bairro" class="form-control" value="{{ old('bairro', $aluno->bairro ?? '') }}">
</div>  

<div class="mb-3">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" name="cidade" id="cidade" class="form-control" value="{{ old('cidade', $aluno->cidade ?? '') }}">
</div>    

<div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado', $aluno->estado ?? '') }}">
</div>    

<div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $aluno->telefone ?? '') }}">
</div>                  

<div class="mb-3">
    <label for="whatsapp" class="form-label">WhatsApp</label>
    <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp', $aluno->whatsapp ?? '') }}">
</div>              

<div class="mb-3">
    <input type="hidden" name="status" value="ativo">
</div>

<script>
    document.getElementById('cep').addEventListener('blur', async function () {
        const cep = this.value.replace(/\D/g, '');
        if (cep.length !== 8) {
            alert('CEP inválido');
            return;
        }

        try {
            const response = await fetch(`/buscar-endereco/${cep}`);
            if (!response.ok) throw new Error();

            const data = await response.json();

            document.getElementById('logradouro').value = data.logradouro || '';
            document.getElementById('bairro').value = data.bairro || '';
            document.getElementById('cidade').value = data.localidade || '';
            document.getElementById('estado').value = data.uf || '';
        } catch (e) {
            alert('Erro ao buscar endereço. Verifique o CEP.');
        }
    });
</script>
