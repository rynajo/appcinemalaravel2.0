@extends('padrao')

@section('content')

<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome do filme</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecione a sala</option>
            <option value="1">Sala 1</option>
            <option value="2">Sala 2</option>
            <option value="3">Sala 3</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantidade de poltronas</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <label for="dataLancamentoInput" class="form-label">Data de ínicio da sessão:</label>
      <input type="date" name="dtlancamentofilme" class="form-control" id="dataLancamentoInput" >
    </div>
    <div class="mb-3 form-check">
      <label for="dataLancamentoInput" class="form-label">Data de término da sessão:</label>
      <input type="date" name="dtlancamentofilme" class="form-control" id="dataLancamentoInput" >
    </div>
    <div class="mb-3 form-check">
      <label for="dataLancamentoInput" class="form-label">Horário da sessão:</label>
      <input type="time" name="dtlancamentofilme" class="form-control" id="dataLancamentoInput" >
    </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

@endsection