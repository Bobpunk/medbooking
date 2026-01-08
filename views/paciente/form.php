<div class="flex justify-center mt-12 animate-enter">
    <div class="w-full max-w-lg">
        
        <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-100">
            
            <div class="bg-gray-50 px-8 py-5 border-b border-gray-200 flex items-center gap-3">
                <?php if (isset($paciente)): ?>
                    <div class="bg-blue-100 p-2 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Editar Paciente</h2>
                <?php else: ?>
                    <div class="bg-green-100 p-2 rounded-lg text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Novo Paciente</h2>
                <?php endif; ?>
            </div>

            <div class="px-8 py-6">
                
                <?php 
                    $action = isset($paciente) ? '/paciente/atualizar/' . $paciente['id'] : '/paciente/salvar';
                ?>

                <form action="<?= $action ?>" method="POST">
                    
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="nome">
                            Nome Completo
                        </label>
                        <input class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" 
                               type="text" name="nome" required value="<?= $paciente['nome'] ?? '' ?>" placeholder="Ex: José da Silva">
                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                            Email
                        </label>
                        <input class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" 
                               type="email" name="email" value="<?= $paciente['email'] ?? '' ?>" placeholder="email@exemplo.com">
                    </div>

                    <div class="mb-8">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="telefone">
                            Telefone
                        </label>
                        <input class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" 
                               type="text" name="telefone" id="telefone" maxlength="15"
                               value="<?= $paciente['telefone'] ?? '' ?>" placeholder="(00) 00000-0000">
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <a href="/paciente" class="text-sm font-semibold text-gray-500 hover:text-gray-800 transition-colors">
                            &larr; Cancelar
                        </a>
                        
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:shadow-lg transform transition hover:-translate-y-0.5 flex items-center gap-2" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Salvar Dados
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const inputTel = document.getElementById('telefone');
    
    if(inputTel) {
        inputTel.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, "");
            
            if (value.length > 11) value = value.slice(0, 11);

            if (value.length > 2) {
                value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
            }
            if (value.length > 7) {
                value = `${value.slice(0, 9)}-${value.slice(9)}`;
            }
            
            e.target.value = value;
        });
    }
</script>