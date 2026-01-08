<div class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
    
    <div class="flex justify-between items-end mb-8 animate-enter">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                Visão Geral
            </h1>
            <p class="text-gray-500 mt-1">Bem-vindo de volta, Dr. Bob.</p>
        </div>
        <a href="/paciente/novo" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-6 rounded-lg shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1 hover:scale-105 flex items-center gap-2">
            <svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
            </svg>
            Novo Paciente
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 animate-enter delay-100">
        
        <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 shadow-xl text-white relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300">
            <div class="absolute right-0 top-0 opacity-10 transform translate-x-2 -translate-y-2 group-hover:scale-110 transition-transform duration-500">
                <svg style="width: 128px; height: 128px;" xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
            </div>
            <p class="text-blue-100 font-medium text-sm uppercase tracking-wider">Total de Pacientes</p>
            <h2 class="text-5xl font-bold mt-2"><?= $totalPacientes ?></h2>
            <p class="mt-4 text-blue-200 text-sm flex items-center gap-1">
                <span class="bg-white/20 px-1.5 py-0.5 rounded text-white font-bold">↑ 12%</span>
                <span>desde o mês passado</span>
            </p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 relative overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 font-medium text-sm uppercase tracking-wider">Consultas Hoje</p>
                    <h2 class="text-4xl font-bold text-gray-800 mt-2">4</h2>
                </div>
                <div class="bg-green-100 p-3 rounded-xl text-green-600 animate-pulse">
                    <svg style="width: 24px; height: 24px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <p class="mt-4 text-gray-400 text-sm">Próxima às 14:00</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 relative overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 font-medium text-sm uppercase tracking-wider">Receita Mensal</p>
                    <h2 class="text-4xl font-bold text-gray-800 mt-2"><span class="text-lg text-gray-400">R$</span> 8.5k</h2>
                </div>
                <div class="bg-purple-100 p-3 rounded-xl text-purple-600">
                    <svg style="width: 24px; height: 24px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <p class="mt-4 text-green-500 text-sm font-semibold flex items-center gap-1">
                Meta batida 🎉
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 animate-enter delay-200">
        
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800 text-lg">Últimos Pacientes Cadastrados</h3>
                <a href="/paciente" class="text-blue-600 text-sm font-semibold hover:underline">Ver todos &rarr;</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 bg-gray-50 text-xs font-semibold text-gray-500 uppercase">Nome</th>
                            <th class="px-6 py-4 bg-gray-50 text-xs font-semibold text-gray-500 uppercase">Contato</th>
                            <th class="px-6 py-4 bg-gray-50 text-xs font-semibold text-gray-500 uppercase text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if(empty($recentes)): ?>
                            <tr>
                                <td colspan="3" class="px-6 py-8 text-center text-gray-400">
                                    Nenhum paciente cadastrado ainda.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach($recentes as $p): ?>
                                <?php 
                                    $iniciais = strtoupper(substr($p['nome'], 0, 1));
                                    if (strpos($p['nome'], ' ') !== false) {
                                        $partes = explode(' ', $p['nome']);
                                        $iniciais .= strtoupper(substr(end($partes), 0, 1));
                                    }
                                    $cores = ['bg-red-500', 'bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-purple-500'];
                                    $corAvatar = $cores[array_rand($cores)];
                                ?>
                                <tr class="hover:bg-gray-50 transition-colors duration-150 cursor-default group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="<?= $corAvatar ?> h-10 w-10 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-sm ring-2 ring-white group-hover:ring-blue-100 transition-all">
                                                <?= $iniciais ?>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-bold text-gray-900 group-hover:text-blue-600 transition-colors"><?= $p['nome'] ?></div>
                                                <div class="text-xs text-gray-400">ID: #<?= str_pad($p['id'], 4, '0', STR_PAD_LEFT) ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-600"><?= $p['email'] ?></div>
                                        <div class="text-xs text-gray-400"><?= $p['telefone'] ?></div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <span class="relative flex h-3 w-3">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                            </span>
                                            <span class="text-xs font-semibold text-green-700">Ativo</span>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-gradient-to-b from-gray-900 to-gray-800 rounded-2xl shadow-lg p-6 text-white h-fit">
            <h3 class="font-bold text-lg mb-4">Ações Rápidas</h3>
            <div class="space-y-3">
                <button class="w-full group flex items-center justify-between p-4 rounded-xl bg-gray-700/50 hover:bg-blue-600 transition-all border border-gray-600 hover:border-blue-500 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center gap-3">
                        <span class="bg-gray-600 group-hover:bg-blue-500 p-2 rounded-lg transition-colors">📅</span>
                        <span class="font-medium text-sm">Agendar Consulta</span>
                    </div>
                    <span class="text-gray-400 group-hover:text-white transition-transform group-hover:translate-x-1">&rarr;</span>
                </button>

                <button class="w-full group flex items-center justify-between p-4 rounded-xl bg-gray-700/50 hover:bg-purple-600 transition-all border border-gray-600 hover:border-purple-500 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center gap-3">
                        <span class="bg-gray-600 group-hover:bg-purple-500 p-2 rounded-lg transition-colors">📄</span>
                        <span class="font-medium text-sm">Emitir Atestado</span>
                    </div>
                    <span class="text-gray-400 group-hover:text-white transition-transform group-hover:translate-x-1">&rarr;</span>
                </button>

                 <div class="mt-8 pt-6 border-t border-gray-700">
                    <p class="text-xs text-gray-400 uppercase font-bold tracking-wider mb-3">Próximos Lembretes</p>
                    <div class="flex items-start gap-3 text-sm text-gray-300 mb-3 hover:text-white transition-colors cursor-pointer">
                        <div class="w-2 h-2 mt-1.5 rounded-full bg-yellow-400 animate-pulse"></div>
                        <p>Reunião clínica às 16h</p>
                    </div>
                    <div class="flex items-start gap-3 text-sm text-gray-300 hover:text-white transition-colors cursor-pointer">
                        <div class="w-2 h-2 mt-1.5 rounded-full bg-red-400"></div>
                        <p>Backup do sistema pendente</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>