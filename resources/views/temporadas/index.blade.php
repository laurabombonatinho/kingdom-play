@extends('Shared/Layout')
@section('content')
    <div class="panel panel-default">
    <br><br><br><br>
    <div class="row alert alert-danger" style="color: #e4e4e4;background-color: #cc0000;border:none;">
    <div class="col-md-8"><h4 style="padding-top:5px;">Temporadas</h4></div>
    <div class="col-md-4">
    <form method="GET" action="{{route('temporadas.index', 'buscar' )}}">
                <div class="input-group">
                    <input type="text" class="form-control" style="color: #cc0000;background-color: #efefef;border:none" placeholder="Digite o nome da temporada" name="buscar">
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
                            <th>Quantidade</th>
                            <th>Status</th>
                            <th>Avaliação</th>
                            <th>Série</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($temporadas as $temporada)
                            <tr>
                                <td>{{$temporada->quantTemporada}}</td>
                                <td>{{$temporada->statusTemporada}}</td>
                                <td>{{$temporada->avaliacaoTemporada}}</td>
                                <td>{{$temporada->series_id}}</td>
                                
                            </tr>                         
                        @endforeach
                    </tbody>
                </table> 
            </div> 
        </div>
       
    </div>
    <br><br>
    <a href="{{route('temporadas.create')}}"><button class="btn btn-primary">Adicionar</button></a>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection