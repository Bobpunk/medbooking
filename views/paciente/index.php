<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-700">Lista de Pacientes</h1>
    <a href="/paciente/novo" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow transition duration-200">
        + Novo Paciente
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Nome
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Telefone
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Email
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $p): ?>
            <tr class="hover:bg-gray-50 transition duration-150">
                <td class="px-5 py-5 border-b border-gray-200 text-sm">
                    <p class="text-gray-900 whitespace-no-wrap font-medium"><?= $p['nome'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"><?= $p['telefone'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"><?= $p['email'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 text-sm text-right">
                    <div class="flex justify-end gap-2">
                        <a href="/paciente/pdf/<?= $p['id'] ?>" target="_blank" class="text-blue-600 hover:text-blue-900 font-bold text-xs border border-blue-600 px-2 py-1 rounded">
                            PDF
                        </a>
                        <a href="/paciente/editar/<?= $p['id'] ?>" class="text-indigo-600 hover:text-indigo-900 font-bold text-xs border border-indigo-600 px-2 py-1 rounded">
                            Editar
                        </a>
                        <a href="/paciente/excluir/<?= $p['id'] ?>" onclick="return confirm('Tem certeza?')" class="text-red-600 hover:text-red-900 font-bold text-xs border border-red-600 px-2 py-1 rounded">
                            Excluir
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>