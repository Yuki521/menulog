<form method="POST" action="">
    <table>
        @method('POST')
        @csrf
        <tr>
            <th>レシピ名</th>
            <td><input type="text" name="title" value="{{old('title')}}"></td>
            @error('title')
            <td>{{$message}}</td>
            @enderror
        </tr>
        <tr>
            <th>カロリー</th>
            <td><input type="text" name="calorie" value="{{old('calorie')}}"></td>
            @error('calorie')
            <td>{{$message}}</td>
            @enderror
        </tr>
        {{ session('result') }}
    </table>
    <button>送信</button>

    <a href="/">戻る</a>
</form>
