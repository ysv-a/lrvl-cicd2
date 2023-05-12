<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Блог посты
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <table class="w-full mt-5 divide-y divide-gray-200">
                    <thead class="bg-cyan-500">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Title</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Slug</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($posts as $post)
                        <tr>
                            <td class="px-10 py-6  text-sm text-gray-500">{{$post->name}}</td>
                            <td class="px-10 py-6  text-sm text-gray-500">{{$post->slug}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-10 py-6  text-sm font-medium text-gray-900">No posts</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
