<?php

namespace Tests\Feature;

use App\Models\Aula;
use App\Models\Professor;
use App\Models\Aluno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AulaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_class()
    {
        // Cria um professor e um aluno para associar à aula
        $professor = Professor::factory()->create();
        $aluno = Aluno::factory()->create();

        // Faz uma requisição para criar uma aula
        $response = $this->post('/aulas', [
            'nome' => 'Aula de Teste',  // Nome da aula
            'descricao' => 'Descrição da aula de teste',
            'professor_id' => $professor->id, // Usando o ID do professor criado
            'aluno_id' => $aluno->id, // Usando o ID do aluno criado
            'data_inicio' => now(),
            'data_fim' => now()->addHour(),
        ]);

        // Verifica se a aula foi criada e se redirecionou para o lugar correto
        $response->assertStatus(302); // Ou o status que você espera
        $response->assertRedirect('/aulas');
        
        // Verifica se a aula foi salva no banco de dados
        $this->assertDatabaseHas('aulas', [
            'nome' => 'Aula de Teste',  // Verifica o nome da aula
            'descricao' => 'Descrição da aula de teste',
            'professor_id' => $professor->id,
            'aluno_id' => $aluno->id,
        ]);
    }
}
