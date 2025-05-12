import { Given, When, Then } from '@badeball/cypress-cucumber-preprocessor';
import AlunoPage from '../../pages/AlunoPage';

Given('que estou na página de cadastro de aluno', () => {
  AlunoPage.acessarFormulario();
});

When('eu preencho os campos obrigatórios corretamente', () => {
  AlunoPage.preencherNome('João Teste');
  AlunoPage.preencherEmail('joao@teste.com');
});

When('informo um CEP válido {string}', (cep) => {
  AlunoPage.preencherCep(cep);
  AlunoPage.clicarForaDoCampoCep();
});

When('submeto o formulário', () => {
  AlunoPage.enviarFormulario();
});

Then('o sistema deve exibir a mensagem {string}', (mensagem) => {
  AlunoPage.validarMensagemDeSucesso(mensagem);
});
