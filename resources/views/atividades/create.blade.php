<form action="{{route('atividades.store')}}" method="post">
    @csrf
    <input name="nome" id="nome" type="text">
    <input type="date" name="data" id="data">
    <input type="checkbox" name="status" id="status">
    <button type="submit">Criar</button>
</form>
