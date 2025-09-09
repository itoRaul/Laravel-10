
<div class="sm:flex sm:items-center sm:justify-between">
    <div>
        <div class="flex items-center gap-x-3">
            <h1 class="text-lg text-black-500">Fórum</h1>
            <span class="px-3 px-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-blue-800 dark:text-blue-400">{{ $total }} dúvidas</span>
        </div>
    </div>

    <div class="flex items-center mt-4 gap-x-3">

        <a href="{{ route('forum.create') }}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border border-gray-200 rounded-lg gap-x-2 sm:w-auto hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
                <span>Nova Dúvida</span>
        </a>
    </div>
</div>


<div class="mt-6 md:flex md:items-center md:justify-between">
    <div class="relative flex items-center mt-4 md:mt-0">
        <span class="absolute">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 left-3 top-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>
        <form action="{{ route('forum.index') }}" method="get">
            <input name="filter" type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Procurar" value="{{ $filters['filter'] ?? ''}}">
        </form>
    </div>
</div>