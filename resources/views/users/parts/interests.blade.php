<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Interesses</h5>
            </div>

            <form action="{{route('users.updateInterests', $user->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                    @foreach(['Tecnologia', 'Esportes', 'Música', 'Viagens'] as $item)
                        <div class="form-check">
                            <input class="form-check-input @error('interests') is-invalid @enderror"
                                   type="checkbox"
                                   value="{{$item}}"
                                   name="interests[][name]"
                                   @checked(in_array($item, $user->interests->pluck('name')->toArray() ))
                            >
                            <label class="form-check-label">
                                {{$item}}
                            </label>

                            @if($loop->last)
                                @error('interests')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            @endif
                        </div>
                    @endforeach
                </div>

                @error('interests')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{route('users.index')}}" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
