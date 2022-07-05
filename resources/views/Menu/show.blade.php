<table>
    <tr>
        <th>ID</th>
        <th>メニュー名</th>
        <th>タイプ</th>
        <th>レシピ</th>
    </tr>
    <tr>
        <td>{{$menu->id}}</td>
        <td>{{$menu->title}}</td>
        <td>{{$menu->type}}</td>
        @foreach($menu->recipes as $recipe)
            <td>{{$recipe->title}}</td>
            <td>{{$recipe->calorie}}</td>
            <td>｜</td>
        @endforeach
    </tr>
</table>
<form method="GET" action="{{ route('menu.edit',['menu' => $menu->id]) }}">
    @method('GET')
    <button>編集</button>
</form>
<a href="{{route('menu.index')}}">戻る</a>
