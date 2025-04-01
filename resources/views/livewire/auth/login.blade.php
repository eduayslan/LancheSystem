<div class="d-flex justify-content-center align-items-center vh-100">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    <div class="font-family-roboto col-md-5  card mx-auto  opacity-100 shadow-lg text-light"
    style="background-color: #4CA786">

        <div class="card-body container-fluid  ">
            <form class="row" wire:submit.prevent="login">
                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Ex.: cliente@gmail.com" wire:model.defer="email">
                        @error('email') <span class="text-warning small">{{ $message }}</span>@enderror
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
                        <strong>Login</strong></button>
                   
                </div>
            </form>
        </div>
    </div>

</div>