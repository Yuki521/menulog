<x-app>
    @section('title','メニュー一覧')
    <table>
        <tr>
            <th>ID</th>
            <th>メニュー名</th>
            <th>タイプ</th>
            <th>合計カロリー</th>
            <th>操作</th>
        </tr>
        @foreach($menus as $menu)
            <tr>

                <td class="px-2 py-2">{{$menu->id}}</td>
                <td class="px-2 py-2">{{$menu->title}}</td>
                <td class="px-2 py-2">{{$menu->type}}</td>
                <td class="px-2 py-2">{{$menu->getCalorie()}}</td>
                <td class="px-2 py-2">
                    <form method="GET" action="{{ route('menu.show',['menu' => $menu->id]) }}">
                        @method('SHOW')
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">詳細</button>
                    </form>
                </td>
                <td class="px-2 py-2">
                    <form method="POST" action="{{ route('menu.destroy',['menu' => $menu->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">削除</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    {{ $menus->links() }}
    {{ session('result') }}
    <a href="/" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">戻る</a>
</x-app>
