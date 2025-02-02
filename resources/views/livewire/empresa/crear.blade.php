<div class="main-content mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4 mx-4">
          @if(session()->has('yaregistrado')== 'yaregistrado')
            @include('livewire.components.yaregistrado')
          @endif
          <div>    
            <div class="min-h-screen flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <h3 class=" mt-4 text-2xl text-cyan-400 font-bold text-center">REGISTRAR NUEVA EMPRESA</h3>
                    <form action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombre</span>
                                            <input wire:model="nombre" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo rif --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">RIF</span>
                                            <input wire:model="rif" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('rif') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo cedula --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Cédula</span>
                                            <input wire:model="cedula" type="text"  class="w-full pl-3 border px-3 py-[0.25rem] border-solid text-neutral-900 font-bold outline-2 border-slate-900" onkeypress="$(this).mask('00000000')" maxlength="8">
                                            <input wire:click="consultar" type="button" value="Buscar" class="bg-gradient-primary px-2 py-[0.25rem] rounded-tr-lg rounded-br-lg text-white font-bold ">
                                        </div>
                                        @error('cedula') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombres --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombres</span>
                                            <input wire:model="nombres" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('nombres') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo apellidos --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Apellidos</span>
                                            <input wire:model="apellidos" type="text" class="w-full pl-2 border text-neutral-900 font-bold rounded-r-lg border-neutral-900" >
                                        </div>
                                        @error('apellidos') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Telefono</span>
                                            <input wire:model="telefono" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('telefono') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Tipo de Materiales</span>
                                            <select wire:model="tipo_materiales" class="relative m-0 -ml-px block w-[1px] min-w-0 flex-auto rounded-r-lg border border-solid border-neutral-900 bg-clip-padding px-3 py-[0.25rem] font-bold leading-[1.6] text-neutral-900 outline-2 transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                        @error('telefono') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="flex bg-cyan-900 text-white items-center font-bold whitespace-nowrap rounded-l-lg border-r-0 border-solid px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Dirección</span>
                                            <input wire:model="direccion" type="text" class="w-full pl-3 border border-solid rounded-r-lg font-bold text-neutral-900 outline-2 border-slate-900" />
                                        </div>
                                        @error('direccion') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">Patente:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">Conformidad de Uso:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- campo nombre --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <div class="fileinput fileinput-new text-white text-center" data-provides="fileinput">
                                                <span class="btn btn-raised btn-round bg-cyan-900 btn-file">
                                                  <span class="fileinput-new text-white">RUNPA:</span>
                                                  <input type="file" name="patente" id="patente" accept="application/pdf, .pdf">
                                                </span>
                                              </div>
                                        </div>
                                        @error('patente') <div class="">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 py-2">
                                <h1 class="text-center text-2xl text-info text-gradient">{{ __('GEOREFERENCIACIÓN') }}</h1>
                            </div>
                        </div>
                        <div class="items-center">
                            <div wire:ignore id="map" style= "width: 100%; height: 600px; z-index: 100;" class="mb-4"></div>
                        </div>
                        <div class="row">
                            <label>COORDENADA UTM</label>
                            <div class="col-sm-3">
                                <input wire:model="lat" type="text" name="latitud" value="10.494134" id="latitud" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input wire:model="lon" type="text" name="longitud" value="-66.931854" id="longitud" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- <script>
    var marker;
    var coords = {};
    initMap = function () 
    {
      navigator.geolocation.getCurrentPosition(
        function (position){
          coords =  {
            lng: position.coords.longitude,
            lat: position.coords.latitude
          };
          setMapa(coords);
        },function(error){console.log(error);});
    }
    function setMapa (coords)
    {
      var map = new google.maps.Map(document.getElementById('map'),
      {
        zoom: 13,
        center:new google.maps.LatLng(coords.lat,coords.lng),
      });
      marker = new AdvancedMarkerElement({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coords.lat,coords.lng),
  
      });
      marker.addListener( 'dragend', function (event)
      {
        document.getElementById("latitud").value = this.getPosition().lat();
        document.getElementById("longitud").value = this.getPosition().lng();
      });
    }
  </script> --}}

  {{-- <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
      key: "AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI",
      v: "weekly",
      // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
      // Add other bootstrap parameters as needed, using camel case.
    });

        let map;
        var coords = {};

        async function initMap() 
        {
            const position = { lat: 10.508248641257252, lng: -66.91428145941548 };

            const { Map } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

            map = new Map(document.getElementById("map"), {
                zoom: 12,
                center: position,
                mapId: "DEMO_MAP_ID",
                mapTypeId: "satellite",
            });

            const marker = new AdvancedMarkerElement({
                map,
                animation: google.maps.Animation.DROP,
                position: position,
            });
            marker.addListener("click", toggleBounce);
        }
        function toggleBounce()
        {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
        initMap();
  </script> --}}
  <script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => {
            await (a = m.createElement("script"));
            e.set("libraries", [...r] + "");
            for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
            e.set("callback", c + ".maps." + q);
            a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
            d[q] = f;
            a.onerror = () => h = n(Error(p + " could not load."));
            a.nonce = m.querySelector("script[nonce]")?.nonce || "";
            m.head.append(a);
        }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n));
    })({
        key: "AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI",
        v: "weekly",
    });

    let map;
    let marker;

    async function initMap() {
        const position = { lat: 10.508248641257252, lng: -66.91428145941548 };
        const { Map } = await google.maps.importLibrary("maps");

        // Crear el mapa
        map = new Map(document.getElementById("map"), {
            zoom: 12,
            center: position,
            mapId: "DEMO_MAP_ID",
            mapTypeId: "satellite",
        });

        // Crear el marcador con la opción draggable: true
        marker = new google.maps.Marker({
            map,
            position: position,
            draggable: true, // Habilitar arrastre
        });

        // Escuchar eventos de arrastre
        marker.addListener("dragend", (event) => {
            const newPosition = event.latLng;
            console.log("Nueva posición del marcador:", newPosition.lat(), newPosition.lng());
        });
    }

    initMap();
</script>
      {{-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI&callback=initMap&v=weekly"
      defer
    ></script> --}}
