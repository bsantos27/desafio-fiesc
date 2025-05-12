Feature: Cadastro de Aluno com CEP

  Scenario: Cadastro válido com preenchimento de CEP
    Given que estou na página de cadastro de aluno
    When eu preencho os campos obrigatórios corretamente
    And informo um CEP válido "40354257"
    And submeto o formulário
    Then o sistema deve exibir a mensagem "Cadastro realizado com sucesso"
