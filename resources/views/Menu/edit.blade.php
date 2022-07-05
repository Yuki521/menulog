<form method="POST" action="{{route('menu.update',['menu'=>$menu->id])}}">
    <table>
        @method('PATCH')
        @csrf
        <tr>
            <th>メニュー名</th>
            <td><input type="text" name="title" value="{{old('title',$menu->title)}}"></td>
            @error('title')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>タイプ</th>
            <td><input type="text" name="type" value="{{old('type',$menu->type)}}"></td>
            @error('type')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>レシピ</th>
            <td>
                <select name="recipe_ids[]" multiple>
                    @foreach ($recipes as $recipe)
                        <option {{$menu->recipes->contains($recipe->id) ? 'selected' : ''}} value="{{ $recipe->id }}">{{ $recipe->title }}</option>
                    @endforeach
                </select>
            </td>
            @error('recipe_ids')
            <td>{{$message}}</td>
            @enderror
        </tr>
        {{ session('result') }}
    </table>
    <button>送信</button>

    <a href="{{route('menu.index')}}">戻る</a>
</form>
