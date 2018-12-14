@extends('/Shared/Layout')

@section('content')


  <div class="container">
  <br><br><br><br>
  
  <div class="alert alert-danger" style="color: #e4e4e4;background-color: #cc0000;border:none;">
    <h4 style="padding-top:5px;">Cadastrar Temporada</h4>
  </div>
  <br>
    <form method="post" action="{{route ('temporadas.store')}}">
                {{ csrf_field() }}
                    <div class="form-group">
                      <label for="login-email" class="label-material">Quantidade</label>
                      <input type="text" class="form-control" name="quantTemporada" >
                    </div>
                    <div class="form-group">
                      <label for="login-email" class="label-material">Status</label>
                      <input type="text" class="form-control" name="statusTemporada">
                    </div>
                    <div class="form-group">
                      <label for="login-email" class="label-material">Avaliação</label>
                      <input type="text" class="form-control" name="avaliacaoTemporada">
                    </div>
                    <div class="form-group">
                      <label for="login-email" class="label-material">Série</label>
                      <input type="text" class="form-control" name="series_id">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                    </form>
</div>

<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

@endsection