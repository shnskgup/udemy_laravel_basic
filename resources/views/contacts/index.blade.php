<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問合せ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('contacts.create') }}" class="text-blue-300">新規登録</a><br>
                    <form method="get" action="{{ route('contacts.index') }}">
                        <input type="text" name="search" placeholder="検索" class="ml-20 my-8 w-1/2 py-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>   
                    </form>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->title }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg">{{ $contact->created_at }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">
                                        <a class="text-blue-300" href="{{ route('contacts.show', ['id' => $contact->id]) }}">詳細を見る</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>