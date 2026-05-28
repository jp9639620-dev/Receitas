// Validação do formulário de equipamentos
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            const quantidade = document.getElementById('quantidade').value;
            
            // Validar se a quantidade é um número positivo
            if (isNaN(quantidade) || quantidade <= 0) {
                e.preventDefault();
                alert('Por favor, insira uma quantidade válida (maior que 0)');
                return false;
            }
        });
    }
});

// Função para formatar entrada de quantidade apenas com números
document.addEventListener('DOMContentLoaded', function() {
    const quantidadeInput = document.getElementById('quantidade');
    
    if (quantidadeInput) {
        quantidadeInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    }
});
