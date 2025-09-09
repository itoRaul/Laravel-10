
@if ($errors->any())

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 my-4" role="alert">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

@endif