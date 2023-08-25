@extends('template.template')

@section('content')
    <div class="row bg-dark mt-5">
        <div class="col text-center">
            <h5 class="text-light">Ações com Chamados</h5>
        </div>
    </div>
    <table class="table table-sm table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Descrição</th>
            <th scope="col">Cliente</th>
            <th scope="col">Sistema</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        @foreach($supports as $support)

            <tr>
                <th scope="row">{{ $support->title }}</th>
                <th scope="row">{{ $support->body }}</th>
                <th scope="row">{{ $support->username }}</th>
                <th scope="row">{{ $support->systems_name }}</th>

                <td></td>

                <td>
                    <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                       onclick="onOpenModel({{ $support->id }})">Responder</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Responder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('support.Publicanswer') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                      style="height: 300px" name="answer"></textarea>
                            <label for="floatingTextarea2">Resposta</label>
                        </div>
                    </div>
                    <input type="hidden" id="support_id" value="" name="support_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-dark">Responder</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function onOpenModel($id) {
            document.getElementById('support_id').value = $id
        }
    </script>
@endsection
