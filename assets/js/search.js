var searchInput = document.querySelector('#searchInput');
var autocomplete = document.querySelector('#autocomplete');
var idProduto = document.querySelector('#idprodutoSelecionado');

searchInput.addEventListener('input', _.throttle(async function(event) {
    var valor = event.target.value;

    if (valor.length >= 3) {
        try {
            const { data } = await axios.get('/senai/includes/books.php', {
                params: { book: valor }
            });

            console.log('Retorno da API:', data);

            autocomplete.style.display = 'block';

            if (!data.length) {
                autocomplete.innerHTML = '<div id="notfound">Produto não encontrado</div>';
                return;
            }

            autocomplete.innerHTML = data.map(produto => `
                <div class="item-autocomplete" 
                     onclick="selecionarProduto(${produto.idprodutos}, '${produto.nomeProduto}')">
                    ${produto.nomeProduto}
                </div>
            `).join('');

        } catch (error) {
            console.error('Erro na requisição:', error); 
        }
    } else {
        autocomplete.style.display = 'none';
        autocomplete.innerHTML = '';
    }
}, 50));

function selecionarProduto(id, nome) {
    searchInput.value = nome;
    idProduto.value = id;
    autocomplete.style.display = 'none';
}