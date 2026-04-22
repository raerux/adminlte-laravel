<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Perfil</h5>
            </div>

            <form action="{{route('users.updateProfile', $user->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Tipo de pessoa</label>
                        <select name="type" class="form-control @error('type') is-invalid @enderror">
                            @foreach(['Pessoa física', 'Pessoa jurídica'] as $type)
                                <option
                                    value="{{$type}}"
                                    @selected(old('type') === $type || $user?->profile?->type === $type)
                                >{{$type}}</option>
                            @endforeach
                        </select>
                        @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input
                            type="text"
                            name="address"
                            value="{{old('address') ?? $user?->profile?->address}}"
                            class="form-control @error('address') is-invalid @enderror"
                        >
                        @error('address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{route('users.index')}}" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
