<form method="POST" action="{{route('menu.store')}}">
    <table>
        @method('POST')
        @csrf
        <tr>
            <th>メニュー名</th>
            <td><input type="text" name="title" value="{{old('title')}}"></td>
            @error('title')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>タイプ</th>
            <td><input type="text" name="type" value="{{old('type')}}"></td>
            @error('calorie')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>レシピ</th>
            <td>
                <select name="recipe_id" multiple>
                    @foreach ($recipes as $recipe)
                        <option value="{{ $recipe->id }}">{{ $recipe->title }}</option>
                    @endforeach
                </select>
            </td>
            @error('calorie')
            <td>{{$message}}</td>
            @enderror
        </tr>
        {{ session('result') }}
    </table>
    <button>送信</button>

    <a href="/">戻る</a>
</form>
