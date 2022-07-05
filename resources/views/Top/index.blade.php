<x-app>
    @section('title','Menu Log')
    <ul>
        <li>
            <a href="{{route('recipe.index')}}">レシピ一覧</a>
        </li>
        <li>
            <a href="{{route('recipe.create')}}">レシピ追加</a>
        </li>
        <li>
            <a href="{{route('menu.index')}}">メニュー一覧</a>
        </li>
        <li>
            <a href="{{route('menu.create')}}">メニュー追加</a>
        </li>
    </ul>
</x-app>
