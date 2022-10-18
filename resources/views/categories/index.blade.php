<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Categories') }}
      </h2>
  </x-slot>

  <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-black border-2">
              <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table-auto border-separate border-spacing-4 ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $category)    
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href=
                                "{{ route('categories.edit',$category) }}">Edit
                                </a>
                            </td>
                            <td>
                                <form action=
                                "{{ route('categories.destroy',$category) }}" method="post"
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
