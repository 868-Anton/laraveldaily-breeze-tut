<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('New Post') }}
      </h2>
  </x-slot>

  <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-black border-2">
              <div class="p-6 bg-white border-b border-gray-200 ">
                <form action="{{ route('posts.store') }}" method="post">
                  @csrf
                  Title: 
                  <br/>
                  <input required type="text" name="title" class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'>
                  <br/><br/>

                  Post Text:
                  <br/> 
                  <Textarea name="post_text" class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'> 
                  </Textarea>
                  <br/><br/>

                  Category:
                  <br/>
                  <select name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                      {{ $category->name }}
                    </option>
                    @endforeach
                  </select>
                  <br/><br/>

                <button class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150' type="submit">Save</button>
                
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
