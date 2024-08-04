
<!-- Dropdown com opções de ordenação -->
<div id="ordenarDropdown" style="display:none; position: absolute; border: 1px solid #ccc; background-color: #fff; z-index: 1000;">
    <a href="#" class="dropdown-item ordenar-opcao" data-ordem="recentes" style="display: block; padding: 8px;">Mais recente</a>
    <a href="#" class="dropdown-item ordenar-opcao" data-ordem="antigos" style="display: block; padding: 8px;">Mais antigo</a>
    <a href="#" class="dropdown-item ordenar-opcao" data-ordem="alfabetica" style="display: block; padding: 8px;">Ordem alfabética</a>
</div>


<script>
// Mostrar/ocultar dropdown ao clicar no link
document.getElementById('ordenarLink').addEventListener('click', function(event) {
    event.preventDefault();
    const dropdown = document.getElementById('ordenarDropdown');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    
    // Posiciona o dropdown logo abaixo do link
    const rect = this.getBoundingClientRect();
    dropdown.style.left = `${rect.left}px`;
    dropdown.style.top = `${rect.bottom}px`;
});

// Fechar o dropdown ao clicar fora dele
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('ordenarDropdown');
    if (!dropdown.contains(event.target) && event.target.id !== 'ordenarLink') {
        dropdown.style.display = 'none';
    }
});

// Ordenar a lista de acordo com a opção escolhida
document.querySelectorAll('.ordenar-opcao').forEach(opcao => {
    opcao.addEventListener('click', function(event) {
        event.preventDefault();
        const ordem = this.getAttribute('data-ordem');
        ordenarLista(ordem);
        document.getElementById('ordenarDropdown').style.display = 'none';
    });
});

// Função para ordenar a lista
function ordenarLista(ordem) {
    const list = document.getElementById('ocorrenciasList');
    const items = Array.from(list.getElementsByTagName('li'));

    if (ordem === 'recentes') {
        // Ordena do mais recente para o mais antigo (mantém a ordem original)
        items.reverse();
    } else if (ordem === 'antigos') {
        // Ordena do mais antigo para o mais recente (ordem original)
        items.sort((a, b) => a.index - b.index);
    } else if (ordem === 'alfabetica') {
        // Ordena em ordem alfabética
        items.sort((a, b) => a.textContent.localeCompare(b.textContent));
    }

    // Atualiza a lista no DOM
    list.innerHTML = '';
    items.forEach(item => list.appendChild(item));
}
</script>
