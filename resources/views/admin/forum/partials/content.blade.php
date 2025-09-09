<div class="container mx-auto p-4">
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-2/5 text-left py-3 px-4 uppercase font-semibold text-sm">Assunto</th>
          <th class="w-2/5 text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
          <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Ações</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        
        @foreach ($forums->items() as $forum)

            <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="w-2/5 text-left py-3 px-4">{{ $forum->subject }}</td>
                <td class="w-2/5 text-left py-3 px-4">{{ getStatusForum($forum->status) }}</td>
                <td class="w-1/5 text-center py-3 px-4">
                    <div class="flex items-center justify-center gap-x-6">
                        
                        <a 
                           href="{{ route('forum.edit', $forum->id) }}" 
                           title="Editar" 
                           class="text-gray-500 hover:text-blue-600 transition-colors duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.536l12.232-12.232z" />
                            </svg>
                        </a>

                        <a 
                           href="{{ route('forum.show', $forum->id) }}" 
                           title="Ver Detalhes" 
                           class="text-gray-500 hover:text-green-600 transition-colors duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>

                    </div>
                </td>
            </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>