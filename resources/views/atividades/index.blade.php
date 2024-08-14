<h2>Olá Mundo!</h2>

<a href="{{route('atividades.create')}}">Criar Atividade</a>
@foreach($atividades as $atividade)
    <table>
        <thead>
        <tr>
            <th>Nome tarefa</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$atividade->nome}}</td>
        </tr>
        </tbody>
    </table>
@endforeach
