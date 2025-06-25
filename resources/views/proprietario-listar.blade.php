<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($proprietarios as $proprietario)

            <tr>
                <td>{{ $veiculo->id }}</td>
                <td>{{ $veiculo->nome }}</td>
                <td>{{ $veiculo->cpf}}</td>
                <td>{{ $veiculo->telefone }}</td>                
	            <td>{{ $veiculo->email }}</td>             
                <td>
                    <a href="/proprietario/remove/{{ $proprietario->id }}">Excluir</a>
                    <a href="{{ route('proprietario-editar', $proprietario->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}