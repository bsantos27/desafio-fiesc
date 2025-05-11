// README.md - Projeto de Agendamento de Aulas com Laravel

# Sistema de Agendamento de Aulas

Sistema web para cadastro de estudantes, professores e agendamento de aulas.

## 🔧 Tecnologias Utilizadas
- PHP 8.x
- Laravel 10.x
- PostgreSQL
- Docker + Docker Compose
- PHPUnit
- SonarQube
- JWT (via Laravel Sanctum ou tymon/jwt-auth)

## 📦 Como Executar com Docker

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
cp .env.example .env
docker-compose up -d --build
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
```

A aplicação estará disponível em: `http://localhost:8000`

## 📂 Estrutura das Entidades

### Estudantes
- id
- nome
- email
- cpf
- data_nascimento

### Professores
- id
- nome
- email
- area_atuacao

### Aulas
- id
- estudante_id
- professor_id
- data
- horario
- status (agendada, realizada, cancelada)

### Usuários (Admin)
- id
- nome
- email
- senha (bcrypt)

## 🔐 Requisitos Não-Funcionais
- Autenticação via JWT
- Senhas criptografadas com bcrypt
- CORS habilitado
- Limite de requisições com throttle
- Testes com PHPUnit
- Análise de código com SonarQube

## 🧪 Testes Automatizados
```bash
docker-compose exec app php artisan test
```
Cobertura esperada: mínimo de 80%

## ✅ Plano de Testes (Exemplo)

### Requisito: Agendar aula com professor disponível

```gherkin
Cenário: Agendar aula com sucesso
  Dado que existe um estudante cadastrado
  E um professor cadastrado
  Quando o estudante agenda uma aula com o professor para o dia 10/05/2025 às 14h
  Então a aula deve ser criada com status "agendada"
```

## 📈 SonarQube
Para rodar a análise:
```bash
# Verifique se o SonarQube está rodando no Docker
# E rode o scanner (depende de como configurado)
```

## 📚 Documentação da API
A documentação da API está disponível em `/docs` (usando Swagger, opcional)

## ❗ Dificuldades e Soluções
- Utilização de containers isolados com PostgreSQL exigiu ajustes de conexão
- Configuração do Sanctum com frontend separado exigiu CORS e CSRF específicos

---

Esse `README` cobre os principais aspectos do projeto técnico. Posso montar agora os arquivos do Laravel como migrations, models e rotas iniciais. Deseja isso?
