@extends('Shared/Layout')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading">Lista de Marcas</div>
        <form method="GET" action="{{route('filmes.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome da marca" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Duração</th>
                            <th>Descrição</th>
                            <th>Avaliação</th>
                            <th>Status</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($filmes as $filme)
                            <tr>
                                <td>{{$filme->nomeFilme}}</td>
                                <td>{{$filme->duracaoFilme}}</td>
                                <td>{{$filme->descricaoFilme}}</td>
                                <td>{{$filme->avaliacaoFilme}}</td>
                                <td>{{$filme->statusFilme}}</td>
                            </tr>                         
                        @endforeach
                    </tbody>
                </table> 
            </div> 
        </div>
        <div align="center" class="row">
        	{{ $filmes->links() }}
	    </div>
    </div>
    <a href="{{route('filmes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection