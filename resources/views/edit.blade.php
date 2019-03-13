<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <form method="post" action="/teste/update">
        <input type="hidden" name="id" value="{{$oldTask->id}}" />
        <div class="modal-header">
            <h4 class="modal-title">Editar Tarefa</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" value="{{$oldTask->name}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" name="description" required> {{$oldTask->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" id="" value="{{$oldTask->TypeInt}}" name="type">
                    <option></option>
                    <option  @if ($oldTask->TypeInt == 1) selected @endif  value="1">To Do / À Fazer</option>
                    <option @if ($oldTask->TypeInt == 2) selected @endif value="2">Doing / Fazendo</option>
                    <option @if ($oldTask->TypeInt == 3) selected @endif value="3">Done / Feito</option>
                    <option @if ($oldTask->TypeInt == 4) selected @endif value="4">Backlog / Ideias</option>
                </select>
            </div>
            <div class="form-group">
                <label>Data de Início</label>
                <input type="date" name="date_begin" value="{{$oldTask->date_begin}}" class="form-control">
            </div>
            <div class="form-group" type="date">
                <label>Data de Término</label>
                <input type="date" name="date_end" value="{{$oldTask->date_end}}" class="form-control">
            </div>
        </div>
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" value="Atualizar">
    </form>
</body>

</html>