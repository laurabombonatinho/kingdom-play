@extends('Shared/Layout')
@section('content')
    <div class="panel panel-default">
    <br><br><br><br>
    <div class="row alert alert-danger" style="color: #e4e4e4;background-color: #cc0000;border:none;">
    <div class="col-md-8"><h4 style="padding-top:5px;">Episódio</h4></div>
    <div class="col-md-4">
    <form method="GET" action="{{route('episodios.index', 'buscar' )}}">
                <div class="input-group">
                    <input type="text" class="form-control" style="color: #cc0000;background-color: #efefef;border:none" placeholder="Digite o nome do episódio" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" style="color: #b8bcc4;background-color: #22252a;" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
            </form>
  </div>
  <br>

  
      
        <div class="row">
            <div class="col-md-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Duração</th>
                            <th>Avaliação</th>
                            <th>Status</th>
                            <th>Temporada</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($filmes as $filme)
                            <tr>
                                <td>{{$filme->nomeEp}}</td>
                                <td>{{$filme->duracaoEp}}</td>
                                <td>{{$filme->avaliacaoEp}}</td>
                                <td>{{$filme->statusEp}}</td>
                                <td>{{$filme->temporadas_id}}</td>
                            </tr>                         
                        @endforeach
                    </tbody>
                </table> 
            </div> 
        </div>
       
    </div>
    <br><br>
    <a href="{{route('episodios.create')}}"><button class="btn btn-primary">Adicionar</button></a>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection