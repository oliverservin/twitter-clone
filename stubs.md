- Plugin de notificaciones

  ```html
  <script defer src="https://unpkg.com/alpinejs-notify@latest/dist/notifications.min.js"></script>
  ```
- Componente `toast`

  ```html
  <div>
      <div class="fixed right-4 top-4 z-50 w-64 space-y-2"></div>

      <template>
          <div role="alert" class="flex gap-1.5 rounded-lg bg-sky-500 px-4 py-3 text-white">
              <!-- Icono de check -->
              <!-- Texto de la notificación -->
          </div>
      </template>
  </div>
  ```
- Icono de `check`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          fill-rule="evenodd"
          d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
          clip-rule="evenodd"
      />
  </svg>
  ```

- Input foto de portada

  ```html
  <div>
      <input
          type="file"
          id="cover"
          class="hidden"
      />

      <div class="space-y-2">
          <div class="relative h-44 overflow-hidden rounded-lg bg-neutral-700">
              <!-- Previsualizar portada -->
              <span
                  class="block h-full w-full bg-cover bg-center bg-no-repeat"
              ></span>
          </div>
          <div class="text-right">
              <x-button secondary type="button">
                  Seleccionar foto nueva
              </x-button>
          </div>
      </div>
  </div>
  ```
- Input foto de perfil

  ```html
  <div>
      <input
          type="file"
          id="photo"
          class="hidden"
      />

      <div class="flex items-center justify-between gap-2">
          <div>
              <span
                  class="block h-20 w-20 rounded-full bg-neutral-700 bg-cover bg-center bg-no-repeat"
              ></span>
          </div>
          <x-button secondary type="button">
              Seleccionar foto nueva
          </x-button>
      </div>
  </div>
  ```
- Foto de portada en `user-hero`

  ```html
  <img src="" class="h-full w-full object-cover" />
  ```
- Foto de portada en modal

  ```html
  <img
      class="h-full w-full bg-center bg-no-repeat object-cover"
  />
  ```
- Foto de portada en modal

  ```html
  <img
      class="h-20 w-20 rounded-full object-cover"
  />
  ```

## Editar perfil

- Modal de editar perfil

  ```html
  <div>
      <div x-cloak x-transition.opacity x-show="showEditModal" class="fixed inset-0 z-50 bg-neutral-800/70"></div>
      <div x-cloak x-transition x-show="showEditModal" class="fixed inset-0 z-50 flex items-center">
          <div @click.away="showEditModal = false" class="mx-auto w-full max-w-lg rounded-lg bg-black p-10">
              Formulario
          </div>
      </div>
  </div>
  ```

- Formulario de editar perfil

  ```html
  <form>
      <div class="flex items-center justify-between">
          <h3 class="text-3xl font-semibold text-white">Edita tu perfil</h3>
          <button type="button" class="p-1 hover:opacity-70">
              <!-- Icono de cerrar -->
          </button>
      </div>
      <div class="mt-20 flex flex-col gap-4">
          <!-- input para el nombre -->
          <!-- input para el nombre de usuario -->
      </div>
      <div class="mt-20">
          <button>Guardar</button>
      </div>
  </form>
  ```

## Seguir usuarios

- Botón para seguir un usuario

  ```html filename=resources/views/components/user-bio.blade.ph
  <div class="flex justify-end p-2">
      <button>Seguir</button>
  </div>
  ```
- Sección de siguiendo y seguidores

  ```html
  <div class="mt-4 flex flex-row items-center gap-6">
      <div class="flex flex-row items-center gap-1">
          <p class="text-white">0</p>
          <p class="text-neutral-500">Siguiendo</p>
      </div>
      <div class="flex flex-row items-center gap-1">
          <p class="text-white">0</p>
          <p class="text-neutral-500">Seguidores</p>
      </div>
  </div>
  ```
- Follow bar

  ```html
  <div class="hidden px-6 py-4 lg:block">
      <div class="rounded-xl bg-neutral-800 p-4">
          <h2 class="text-xl font-semibold text-white">A quién seguir</h2>
          <div class="mt-4 flex flex-col gap-6">
            <div class="flex flex-row gap-4">
                <!-- avatar -->
                <div class="flex flex-col">
                    <p class="text-sm font-semibold text-white">Nombre del usuario</p>
                    <p class="text-sm text-neutral-400">@username</p>
                </div>
            </div>
          </div>
      </div>
  </div>
  ```


## Mostrar posts por usuario

- User hero

  ```html
  <div>
      <div class="relative h-44 bg-neutral-700">
          <div class="absolute -bottom-16 left-4">
              <!-- Avatar grande con borde -->
          </div>
      </div>
  </div>
  ```
- User bio

  ```html
  <div class="border-b-[1px] border-neutral-800 pb-4">
      <div class="mt-8 px-4">
          <div class="flex flex-col">
              <p class="text-2xl font-semibold text-white">
                  <!-- Nombre del usuario -->
              </p>
              <p class="text-base text-neutral-500">
                  <!-- @username -->
              </p>
          </div>
          <div class="mt-4 flex flex-col">
              <div class="mt-4 flex flex-row items-center gap-2 text-neutral-500">
                  <!-- icono de calendario -->
                  <p>
                      <!-- Se unió en [fecha con iso format MMMM de YYYY] -->
                  </p>
              </div>
          </div>
      </div>
  </div>
  ```
- Icono de calendario

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path
          fill-rule="evenodd"
          d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z"
          clip-rule="evenodd"
      />
  </svg>
  ```

## Likes

- Botón para likear

  ```html
  <button
      class="relative z-10 flex flex-row items-center gap-2 text-neutral-500 transition hover:text-red-500"
  >
      <!-- icono de heart -->
      <p>
          <!-- Conteo de likes -->
      </p>
  </button>
  ```
- Icono `heart-outline` de Heroicons

  ```html
  <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
  >
      <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
      />
  </svg>
  ```
- Icono `heart-solid` de Heroicons

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"
      />
  </svg>
  ```
