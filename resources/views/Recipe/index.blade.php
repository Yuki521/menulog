<form>
    <table>
        <tr>
            <th>レシピ名</th>
            <th>カロリー</th>
            <th>操作</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{$recipe->title}}</td>
                <td>{{$recipe->calorie}}</td>
            </tr>
        @endforeach
    </table>
</form>
