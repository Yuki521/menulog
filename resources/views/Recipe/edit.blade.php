<form method="POST" action="{{route('recipe.update',['recipeId'=>$recipe->id])}}">
    <table>
        @method('PUT')
        @csrf
        <tr>
            <th>レシピ名</th>
            <td><input type="text" name="title" value="{{old('title',$recipe->title)}}"></td>
            @error('title')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>カロリー</th>
            <td><input type="text" name="calorie" value="{{old('calorie',$recipe->calorie)}}"></td>
            @error('calorie')
            <td>{{$message}}</td>
            @enderror
        </tr>
        {{ session('result') }}
    </table>
    <button>送信</button>

    <a href="{{route('recipe.index')}}">戻る</a>
</form>
