 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row">  {{-- INDICADORES SUPERIORES --}}
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Recreadores</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    {{-- <i class="ni ni-money-coins " aria-hidden="true"></i> --}}
                    <span class="material-symbols-outlined text-white m-2">person</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">NRC</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <span class="material-symbols-outlined text-white m-2">group</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Voluntarios</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <span class="material-symbols-outlined text-white m-2">woman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Recreador</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <span class="material-symbols-outlined text-white m-2">man</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Lider Recreador</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <span class="material-symbols-outlined text-white m-2">group</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">POSTULADOS</p>
                    <h5 class="font-weight-bolder mb-0"></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <span class="material-symbols-outlined text-white m-2">group</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-4">
          <div class="card">
            <div class="card-body p-3">
              <h5 class=" font-bold text-uppercase">Recreador por Genero</h5>
              <div class="row">
                <div class="ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    <canvas id="genero"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body p-3">
              <h5 class=" font-bold text-uppercase">Recreadores por nivel académico</h5>
              <div class="row">
                <div class="ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    <canvas id="NivelAcademico"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body p-3">
              <h5 class=" font-bold text-uppercase">recreadores activos e inactivos</h5>
              <div class="row">
                <div class="ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    <canvas id="responsabilidad"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <h5 class=" font-bold">RECREADORES POR ESTADO</h5>
              <div class="row">
                <div class="ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <h5 class=" font-bold">NÚCLEO DE RECREACIÓN COMUNITARIO POR ESTADO</h5>
              <div class="row">
                <div class="ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    <canvas id="integrantes"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

