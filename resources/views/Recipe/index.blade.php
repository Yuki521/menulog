<form>
    <table>
        <tr>
            <th>ID</th>
            <th>レシピ名</th>
            <th>カロリー</th>
            <th>操作</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{$recipe->id}}</td>
                <td>{{$recipe->title}}</td>
                <td>{{$recipe->calorie}}</td>
                <td>
                    <form method="POST" action="{{ route('recipe.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="recipeId" value="{{$recipe->id}}"/>
                        <button>削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ session('result') }}
</form>
