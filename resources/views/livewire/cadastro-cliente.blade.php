<div class="mt-5  ">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
    style="background-color: #4CA786">

        <div class="card-body mx-4">
            <form class="row" wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Nome do Cliente"
                        wire:model.defer="nome">
                        @error('nome') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3 ml-2">
                    <label for="endereco">Endereço</label>
                    <input type="endereco" name="endereco" id="endereco" class="form-control"
                        placeholder="Ex.: Rua: A, N° 99-99" wire:model.defer="endereco">
                        @error('endereco') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Ex.: cliente@gmail.com" wire:model.defer="email">
                        @error('email') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>
               
                    <div class="col-md-6 ">
                        <label for="cpf">cpf</label>
                        <input name="text" id="cpf" class="form-control" placeholder="Ex: 123-456-789-01"
                            wire:model.defer="cpf">
                            @error('cpf') <span class="text-warning small">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-md-6 ">
                        <label for="telefone">Telefone</label>
                        <input name="text" id="telefone" class="form-control" placeholder="Ex: (99)9999-9999"
                            wire:model.defer="telefone">
                            @error('telefone') <span class="text-warning small">{{ $message }}</span>@enderror
                    </div>
               

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group ">
                        <input type="password" name="password" id="password" class="form-control" rows="5"
                            wire:model.defer="password"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #000000">
                        <strong>Cadastre-se</strong></button>
                   
                </div>
            </form>
        </div>
    </div>

</div>