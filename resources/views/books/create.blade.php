<x-app-layout>
    <div class="flex justify-center items-center h-screen pt-32">
        <div class="w-full max-w-md">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-4">{{ __('Add New Book') }}</h2>

                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block font-bold mb-2">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-input rounded-lg w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block font-bold mb-2">{{ __('Description') }}</label>
                        <textarea id="description" class="form-input rounded-lg w-full @error('description') border-red-500 @enderror" name="description" required>{{ old('description') }}</textarea>
                            @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block font-bold mb-2">{{ __('Price') }}</label>
                        <input id="price" type="number" class="form-input rounded-lg w-full @error('price') border-red-500 @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                            @error('price')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="publisher" class="block font-bold mb-2">{{ __('Publisher') }}</label>
                        <input id="publisher" type="text" class="form-input rounded-lg w-full @error('publisher') border-red-500 @enderror" name="publisher" value="{{ old('publisher') }}" required autocomplete="publisher">
                            @error('publisher')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="publisher_year" class="block font-bold mb-2">{{ __('Publisher Year') }}</label>
                        <input id="publisher_year" type="number" class="form-input rounded-lg w-full @error('publisher_year') border-red-500 @enderror" name="publisher_year" value="{{ old('publisher_year') }}" required autocomplete="publisher_year">
                            @error('publisher_year')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="author" class="block font-bold mb-2">{{ __('Author') }}</label>
                        <input id="author" type="text" class="form-input rounded-lg w-full @error('author') border-red-500 @enderror" name="author" value="{{ old('author') }}" required autocomplete="author">
                            @error('author')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="page_nums" class="block font-bold mb-2">{{ __('Page Numbers') }}</label>
                        <input id="page_nums" type="number" class="form-input rounded-lg w-full @error('page_nums') border-red-500 @enderror" name="page_nums" value="{{ old('page_nums') }}" required autocomplete="page_nums">
                            @error('page_nums')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block font-bold mb-2">Category</label>
                        <select id="category" name="category[]" class="form-input rounded-lg w-full" multiple>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                            @error('category')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block font-bold mb-2">Image</label>
                        <input type="file" class="form-input rounded-lg w-full" id="image" name="image">
                    </div>

                    <div class="flex items-center justify-center w-full bg-blue-500 hover:bg-blue-700 h-10 rounded-lg">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Book') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
