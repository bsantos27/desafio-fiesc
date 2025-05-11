<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $professor->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" name="cpf" id="cpf" class="form-control" value="{{ old('cpf', $professor->cpf ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ old('data_nascimento', $professor->data_nascimento ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="especialidade" class="form-label">Especialidade</label>
    <input type="text" name="especialidade" id="especialidade" class="form-control" value="{{ old('especialidade', $professor->especialidade ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control" required>
        <option value="ativo" {{ old('status', $professor->status ?? '') == 'ativo' ? 'selected' : '' }}>Ativo</option>
        <option value="inativo" {{ old('status', $professor->status ?? '') == 'inativo' ? 'selected' : '' }}>Inativo</option>
    </select>
</div>                          



            
            