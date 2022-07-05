<x-app>
    <table>
        <tr>
            <th>ID</th>
            <th>メニュー名</th>
            <th>タイプ</th>
            <th>レシピ</th>
        </tr>
        <tr>
            <td class="px-2 py-2">{{$menu->id}}</td>
            <td class="px-2 py-2">{{$menu->title}}</td>
            <td class="px-2 py-2">{{$menu->type}}</td>
            @foreach($menu->recipes as $recipe)
                <td class="px-2 py-2">{{$recipe->title}}</td>
                <td class="px-2 py-2">{{$recipe->calorie}}</td>
                <td class="px-2 py-2">｜</td>
            @endforeach
        </tr>
    </table>
    <form method="GET" action="{{ route('menu.edit',['menu' => $menu->id]) }}">
        @method('GET')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">編集</button>
    </form>
    <a href="{{route('menu.index')}}">戻る</a>
</x-app>
