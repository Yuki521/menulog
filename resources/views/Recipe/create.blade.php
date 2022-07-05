<x-app>
    <form method="POST" action="">
        <table>
            @method('POST')
            @csrf
            <tr>
                <th>レシピ名</th>
                <td class="px-2 py-2"><input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="title" value="{{old('title')}}"></td>
                @error('title')
                <td class="px-2 py-2">{{$message}}</td>
                @enderror
            </tr>
            <tr>
                <th>カロリー</th>
                <td class="px-2 py-2"><input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="calorie" value="{{old('calorie')}}"></td>
                @error('calorie')
                <td class="px-2 py-2">{{$message}}</td>
                @enderror
            </tr>
            {{ session('result') }}
        </table>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">送信</button>

        <a href="/" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">戻る</a>
    </form>
</x-app>
