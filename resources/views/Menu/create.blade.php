<x-app>
    @section('title','メニュー追加')
    <form method="POST" action="{{route('menu.store')}}">
        <table>
            @method('POST')
            @csrf
            <tr>
                <th>メニュー名</th>
                <td class="px-2 py-2">
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" name="title" value="{{old('title')}}">
                </td>
                @error('title')
                <td class="px-2 py-2">{{$message}}</td>
                @enderror
            </tr>
            <tr>
                <th>タイプ</th>
                <td class="px-2 py-2"><input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" name="type" value="{{old('type')}}"></td>
                @error('type')
                <td class="px-2 py-2">{{$message}}</td>
                @enderror
            </tr>
            <tr>
                <th>レシピ</th>
                {{--                <td class="px-2 py-2">--}}
                {{--                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="recipe_ids[]" multiple>--}}
                {{--                        @foreach ($recipes as $recipe)--}}
                {{--                            <option value="{{ $recipe->id }}">{{ $recipe->title }}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </td>--}}
                <td class="px-2 py-2">
                    <div id="app">
                        <button>Click</button>
                    </div>
                    <ul class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @foreach ($recipes as $recipe)
                            <li>
                                <input type="checkbox" name="recipe_ids[]" id="{{$recipe->id }}"
                                       value="{{$recipe->id }}">
                                <label for="{{$recipe->id }}">{{ $recipe->title }}</label>
                            </li>
                        @endforeach
                            {{ $recipes->links() }}
                    </ul>
                </td>
                @error('recipe_ids')
                <td class="px-2 py-2">{{$message}}</td>
                @enderror
            </tr>
            {{ session('result') }}
        </table>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">送信</button>

        <a href="/"
           class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">戻る</a>
    </form>
</x-app>
