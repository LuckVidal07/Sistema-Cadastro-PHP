document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const submitButton = document.getElementById('btn-submit-cadastro');
    const submitText = document.getElementById('text-submit');
    const spinner = document.getElementById('spinner');

    if (!form || !submitButton) {
        // Para se os elementos essenciais não existirem
        console.error('Elementos do formulário não encontrados.');
        return;
    }

    form.addEventListener('submit', function (e) {
        // NÃO usamos e.preventDefault(); O formulário submete normalmente!

        // Validação básica se os campos estão preenchidos antes de mostrar o spinner
        const formData = new FormData(form);
        let isValid = true;
        for (const [name, value] of formData.entries()) {
            if (!value.trim()) {
                isValid = false;
                break;
            }
        }

        if (isValid) {
            // Ativa o spinner e desabilita o botão (visualmente)
            submitText.classList.add('d-none');
            spinner.classList.remove('d-none');
            submitButton.disabled = true;

            // O formulário continua submetendo o POST e o PHP fará o redirecionamento.
        } else {
            // Se não for válido, o HTML5 já costuma mostrar um aviso, mas
            // você pode adicionar um alerta visual aqui se quiser.
            alert("Por favor, preencha todos os campos obrigatórios.");
            e.preventDefault(); // Impede a submissão se a validação falhar
        }
    });
});