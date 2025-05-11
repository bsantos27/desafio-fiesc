<div class="mb-3">
    <label for="aluno_id" class="form-label">Aluno</label>
    <select name="aluno_id" id="aluno_id" class="form-control" required>
        @foreach($alunos as $aluno)
            <option value="{{ $aluno->id }}" {{ old('aluno_id', $aula->aluno_id ?? '') == $aluno->id ? 'selected' : '' }}>{{ $aluno->nome }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="professor_id" class="form-label">Professor</label>
    <select name="professor_id" id="professor_id" class="form-control" required>
        @foreach($professores as $professor)
            <option value="{{ $professor->id }}" {{ old('professor_id', $aula->professor_id ?? '') == $professor->id ? 'selected' : '' }}>{{ $professor->nome }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="data_aula" class="form-label">Data da Aula</label>
    <input type="datetime-local" name="data_aula" id="data_aula" class="form-control" value="{{ old('data_aula', $aula->data_aula ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="conteudo" class="form-label">Conteúdo</label>
    <textarea name="conteudo" id="conteudo" class="form-control" required>{{ old('conteudo', $aula->conteudo ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control" required>
        <option value="agendada" {{ old('status', $aula->status ?? '') == 'agendada' ? 'selected' : '' }}>Agendada</option>
        <option value="realizada" {{ old('status', $aula->status ?? '') == 'realizada' ? 'selected' : '' }}>Realizada</option>
        <option value="cancelada" {{ old('status', $aula->status ?? '') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select>
</div>
