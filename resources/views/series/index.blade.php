@extends('Shared/Layout')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading">Lista de Marcas</div>
        <form method="GET" action="{{route('series.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome da serie" name="buscar">
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
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Avaliação</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($series as $serie)
                            <tr>
                            <td>{{$serie->nomeSerie}}</td>
                                <td>{{$serie->descSerie}}</td>
                                <td>{{$serie->statusSerie}}</td>
                                <td>{{$serie->avaliacaoSerie}}</td>
                            </tr>                         
                        @endforeach
                    </tbody>
                </table> 
            </div> 
        </div>
        <div align="center" class="row">
        	{{ $series->links() }}
	    </div>
    </div>
    <a href="{{route('series.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection