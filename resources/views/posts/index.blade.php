<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Posts') }}
      </h2>
  </x-slot>

  <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <button class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4' >
            <a href="{{ route('posts.create') }}">Create a New Post</a>
        </button>
        
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-black border-2">
              <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table-auto border-separate border-spacing-4 ">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Post Text</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $posts as $post)    
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->post_text }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href=
                                "{{ route('posts.edit',$post) }}">Edit
                                </a>
                            </td>
                            <td>
                                <form action=
                                "{{ route('posts.destroy',$post) }}" method="post"
                                >
                                    @csrf
                                    @method('DELETE')  
                                    <button type="submit" onclick="return confirm('Are you sure?')">Delete
                                    </button> 
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
