  <section class="h-100-vh mb-8">
      <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{asset('img/Caracas_Panoramica.jpg')}}');">
      </div>
      <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10">
              <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                  <div class="card z-index-0">
                      <div class="card-header text-center pt-4">
                          <h1>Crea una cuenta</h1>
                      </div>
                      <div class="card-body">
                          <form wire:submit="register" action="#" method="POST" role="form text-left">
                              <div class="mb-3">
                                  <div class="@error('name') border border-danger rounded-3  @enderror">
                                      <input wire:model.live="name" type="text" class="form-control" placeholder="Empresa" aria-label="Name" aria-describedby="email-addon">
                                  </div>
                                  @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                              </div>
                              <div class="mb-3">
                                  <div class="@error('email') border border-danger rounded-3 @enderror">
                                      <input wire:model.live="email" type="email" class="form-control" placeholder="Correo" aria-label="Email" aria-describedby="email-addon">
                                  </div>
                                  @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                              </div>
                              <div class="mb-3">
                                  <div class="@error('password') border border-danger rounded-3 @enderror">
                                      <input wire:model.live="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                  </div>
                                  @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Crear Cuenta</button>
                              </div>
                              <p class="text-sm mt-3 mb-0">Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">{{ __('Ingresar') }}</a>
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
