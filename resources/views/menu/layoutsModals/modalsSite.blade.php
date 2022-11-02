<!-- Modal selecionar qual informação alterar do site -->
<div class="modal fade" id="alterarSite" tabindex="-1" role="dialog" aria-labelledby="alterarSite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="alterarSite">Selecionar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>Selecione qual tipo de informação do site deseja alterar</p>

        </div>
        <div class="modal-footer">
          <a class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#alterarPlanos">Planos</a>
          <a class="btn bg-gradient-secondary" data-bs-toggle="modal" data-bs-target="#alterarEquipe">Equipe</a>
          <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Alterar Planos -->
<div class="modal fade" id="alterarPlanos" tabindex="-1" role="dialog" aria-labelledby="alterarPlanos" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="alterarPlanos">Alterar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="@if ($plano === null)
                {{ route('admin.alterarInfos.storePlanos')}}
                " method="POST">
                @csrf
            @else
            {{ route('admin.alterarInfos.updatePlanos', $plano->id)}}
            " method="POST">
            @csrf
            @method('PUT')
            @endif

                    <div class="row mb-3">
                        <label for="pl_plano1" class="col-md-4 col-form-label text-md-end">{{ __('Plano Mensal') }}</label>

                        <div class="col-md-6">
                            <input id="pl_plano1" type="text"
                            class="form-control @error('pl_plano1') is-invalid @enderror"
                            name="pl_plano1" onkeypress="return onlynumber();"
                                @if ($plano1 === null)
                                    value="{{ old('pl_plano1') }}" autocomplete="pl_plano1" autofocus
                                    placeholder="Insira o valor do plano">
                                @else
                                    value="{{$plano1->pl_plano1}}" autocomplete="pl_plano1" autofocus
                                    placeholder="Insira o valor do plano">
                                @endif

                            @error('pl_plano1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pl_plano2" class="col-md-4 col-form-label text-md-end">{{ __('Plano Trimestral') }}</label>

                        <div class="col-md-6">
                            <input id="pl_plano2" type="text"
                            class="form-control @error('pl_plano2') is-invalid @enderror"
                            name="pl_plano2" onkeypress="return onlynumber();"
                                @if ($plano2 === null)
                                    value="{{ old('pl_plano2') }}" autocomplete="pl_plano2" autofocus
                                    placeholder="Insira o valor do plano">
                                @else
                                    value="{{$plano2->pl_plano2}}" autocomplete="pl_plano2" autofocus
                                    placeholder="Insira o valor do plano">
                                @endif

                            @error('pl_plano2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pl_plano3" class="col-md-4 col-form-label text-md-end">{{ __('Plano Semestral') }}</label>

                        <div class="col-md-6">
                            <input id="pl_plano3" type="text"
                            class="form-control @error('pl_plano3') is-invalid @enderror"
                            name="pl_plano3" onkeypress="return onlynumber();"
                                @if ($plano3 === null)
                                    value="{{ old('pl_plano3') }}" autocomplete="pl_plano3" autofocus
                                    placeholder="Insira o valor do plano">
                                @else
                                    value="{{$plano3->pl_plano3}}" autocomplete="pl_plano3" autofocus
                                    placeholder="Insira o valor do plano">
                                @endif

                            @error('pl_plano3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pl_plano4" class="col-md-4 col-form-label text-md-end">{{ __('Plano Anual Recorrente') }}</label>

                        <div class="col-md-6">
                            <input id="pl_plano4" type="text"
                            class="form-control @error('pl_plano4') is-invalid @enderror"
                            name="pl_plano4" onkeypress="return onlynumber();"
                                @if ($plano4 === null)
                                    value="{{ old('pl_plano4') }}" autocomplete="pl_plano4" autofocus
                                    placeholder="Insira o valor do plano">
                                @else
                                    value="{{$plano4->pl_plano4}}" autocomplete="pl_plano4" autofocus
                                    placeholder="Insira o valor do plano">
                                @endif

                            @error('pl_plano4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <div class="row mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Alterar') }}
                    </button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>


  <!-- Modal alterar equipe -->
  <div class="modal fade" id="alterarEquipe" tabindex="-1" role="dialog" aria-labelledby="alterarEquipe" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="alterarEquipe">Selecionar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h6>Observação: No site aparece os ultimos 4 profissionais!</h6>
            <p>Crie um novo profissional para a equipe ou altere os existentes!</p>
            <a class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#criarMembro">Criar</a><br>
            @foreach ($membros as $membro)
                <a class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#alterarMembro{{$membro->id}}">Alterar {{$membro->mem_nome}}</a>
                <a href="" class="material-icons text-danger" data-bs-toggle="modal" data-bs-target="#excluirMembro{{$membro->id}}"><i class="material-icons text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Profissional">delete</i></a>
                <br>
            @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-toggle="modal" data-bs-target="#alterarSite">Voltar</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="criarMembro" tabindex="-1" role="dialog" aria-labelledby="criarMembro" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="criarMembro">Criar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('membros.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                    <div class="row mb-3">
                        <label for="mem_nome" class="col-md-4 col-form-label text-md-end">{{ __('*Nome do profissional') }}</label>

                        <div class="col-md-6">
                            <input id="mem_nome" type="text"
                            class="form-control @error('mem_nome') is-invalid @enderror"
                            name="mem_nome" value="{{ old('mem_nome') }}" required autocomplete="mem_nome" autofocus
                            placeholder="Insira o nome do membro da equipe">

                            @error('mem_nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mem_cargo" class="col-md-4 col-form-label text-md-end">{{ __('Cargo do profissional') }}</label>

                        <div class="col-md-6">
                            <input id="mem_cargo" type="text"
                             class="form-control @error('mem_cargo') is-invalid @enderror"
                              name="mem_cargo" value="{{ old('mem_cargo') }}" autocomplete="exe_descricao"
                              placeholder="Insira o cargo">

                            @error('mem_cargo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mem_foto" class="col-md-4 col-form-label text-md-end">{{ __('Foto do profissional') }}</label>

                        <div class="col-md-6">
                            <input id="mem_foto" type="file"
                             class="form-control-sm @error('mem_foto') is-invalid @enderror"
                              name="mem_foto" value="{{ old('mem_foto') }}" autocomplete="mem_foto"
                              accept=".jpeg, .png, .jpg, .gif, .svg">

                            @error('mem_foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <div class="row mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Cadastrar') }}
                    </button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!-- editar membros -->
  @foreach($membros as $membro)
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Pode haver problemas em seu formulário!<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="modal fade" id="alterarMembro{{$membro->id}}" tabindex="-1" role="dialog" aria-labelledby="alterarMembro{{$membro->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="alterarMembro{{$membro->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('membros.update',$membro->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $membro->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $membro->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mem_nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do profissional') }}</label>

                        <div class="col-md-6">
                            <input id="mem_nome" type="text"
                             class="form-control @error('mem_nome') is-invalid @enderror"
                              name="mem_nome" value="{{ $membro->mem_nome }}" required autocomplete="mem_nome" autofocus>

                            @error('mem_nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mem_cargo" class="col-md-4 col-form-label text-md-end">{{ __('Cargo do profissional') }}</label>

                        <div class="col-md-6">
                            <input id="mem_cargo" type="text"
                             class="form-control @error('mem_cargo') is-invalid @enderror"
                              name="mem_cargo" value="{{ $membro->mem_cargo }}" autocomplete="mem_cargo" autofocus>

                            @error('mem_cargo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mem_foto" class="col-md-4 col-form-label text-md-end">{{ __('Foto do exercicio') }}</label>

                        <div class="col-md-6">
                            <input id="mem_foto" type="file"
                             class="form-control-sm @error('mem_foto') is-invalid @enderror"
                              name="mem_foto" value="{{ old('mem_foto') }}" autocomplete="mem_foto"
                              accept=".jpeg, .png, .jpg, .gif, .svg">
                              <img style="margin-top: 5px;" src="/images/membros/{{$membro->mem_foto}}" width="100px">

                            @error('mem_foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <div class="row mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Atualizar') }}
                    </button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Modal de excluir membro -->
  @foreach($membros as $membro)
<div class="modal fade" id="excluirMembro{{$membro->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirMembro{{$membro->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="excluirMembro{{$membro->id}}">Excluir Exercício</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>Deseja excluir esse profissional?</p>
            <form action="{{ route('membros.destroy',$membro->id) }}" method="POST">

                @csrf
                @method('DELETE')

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endforeach

