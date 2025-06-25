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
        @foreach ($anuncios as $anuncio)

            <tr>
                <td>{{ $veiculo->id }}</td>
                <td>{{ $veiculo->titulo }}</td>
                <td>{{ $veiculo->descricao }}</td>
                <td>{{ $veiculo->preco}}</td>                
	            <td>{{ $veiculo->data_publicacao }}</td>            
                <td>
                    <a href="/anuncio/remove/{{ $anuncio->id }}">Excluir</a>
                    <a href="{{ route('anuncio-editar', $anuncio->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}