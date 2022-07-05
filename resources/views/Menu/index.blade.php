<table>
    <tr>
        <th>ID</th>
        <th>メニュー名</th>
        <th>タイプ</th>
        <th>操作</th>
    </tr>
    @foreach($menus as $menu)
    <tr>

        <td>{{$menu->id}}</td>
        <td>{{$menu->title}}</td>
        <td>{{$menu->type}}</td>
        <td>
            <form method="GET" action="{{ route('menu.show',['menu' => $menu->id]) }}">
                @method('SHOW')
                <button>詳細</button>
            </form>
        </td>
        <td>
            <form method="POST" action="{{ route('menu.destroy',['menu' => $menu->id]) }}">
                @csrf
                @method('DELETE')
                <button>削除</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
{{ session('result') }}
<a href="/">戻る</a>
