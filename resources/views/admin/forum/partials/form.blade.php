<x-alert/>
@csrf

<div class="max-w-xl mx-auto p-4 space-y-4">

  <input 
    type="text" 
    placeholder="Assunto" 
    name="subject" 
    value="{{ $forum->subject ?? old('subject')}}"
    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-150 ease-in-out"
  >

  <textarea 
    name="body" 
    id="body" 
    cols="30" 
    rows="5" 
    placeholder="Descrição"
    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-150 ease-in-out resize-y"
  >{{ old('body') }}</textarea>

  <button 
    type="submit"
    class="w-full px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
  >
    Enviar
  </button>

</div>
