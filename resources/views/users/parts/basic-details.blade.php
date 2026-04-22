<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Dados Básicos</h5>
            </div>

            <form action="{{route('users.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input
                            type="text"
                            name="name"
                            value="{{old('name') ?? $user->name}}"
                            class="form-control @error('name') is-invalid @enderror"
                        >
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            value="{{old('email') ?? $user->email}}"
                            class="form-control @error('email') is-invalid @enderror"
                        >
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                        >
                        @error('password')
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
