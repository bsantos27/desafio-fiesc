class AlunoPage {
    acessarFormulario() {
      cy.visit('/cadastro-aluno');
    }
  
    preencherNome(nome) {
      cy.get('#nome').type(nome);
    }
  
    preencherEmail(email) {
      cy.get('#email').type(email);
    }
  
    preencherCep(cep) {
      cy.get('#cep').type(cep);
    }
  
    clicarForaDoCampoCep() {
      cy.get('#cep').blur();
    }
  
    enviarFormulario() {
      cy.get('form').submit();
    }
  
    validarMensagemDeSucesso(mensagem) {
      cy.contains(mensagem).should('be.visible');
    }
  }
  
  export default new AlunoPage();
  