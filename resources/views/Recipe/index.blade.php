<x-app>
    @section('title','レシピ一覧')
    <table>
        <tr>
            <th>ID</th>
            <th>レシピ名</th>
            <th>カロリー</th>
            <th>操作</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td class="px-2 py-2">{{$recipe->id}}</td>
                <td class="px-2 py-2">{{$recipe->title}}</td>
                <td class="px-2 py-2">{{$recipe->calorie}}</td>
                <td class="px-2 py-2">
                    <form method="POST" action="{{ route('recipe.edit', ['recipeId'=>$recipe->id]) }}">
                        @method('GET')
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">編集</button>
                    </form>
                </td>
                <td class="px-2 py-2">
                    <form method="POST" action="{{ route('recipe.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="recipeId" value="{{$recipe->id}}"/>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ session('result') }}
    <a href="/" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">戻る</a>
</x-app>
