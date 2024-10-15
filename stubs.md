- Icono `bell`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          fill-rule="evenodd"
          d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
          clip-rule="evenodd"
      />
  </svg>
  ```

- Diseño para la lista de notificaciones


  ```html
  <div>
      <div class="flex flex-col">
          <!-- ítem de notificación -->
          <div
              class="flex flex-row items-center gap-4 border-b-[1px] border-neutral-800 p-6"
          >
              <!-- logo size-8 -->
              <p class="text-white">Contenido de la notificación</p>
          </div>
      </div>
  </div>
  ```

- Notificaciones no leídas

  ```html
  <span class="absolute left-7 top-4 block size-3 rounded-full bg-sky-500"></span>
  ```

- Componente `sidebar`

  ```html
  <div class="col-span-1 h-full pr-4 md:pr-6">
      <div class="flex flex-col items-end">
          <div class="space-y-2 lg:w-[230px]">
              <a
                  href="#"
                  class="flex h-14 w-14 items-center justify-center rounded-full p-4 hover:bg-blue-300 hover:bg-opacity-10"
              >
                  <!-- logo size 7 -->
                  Logo
              </a>

              <a href="#" class="flex flex-row items-center">
                  <div
                      class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                  >
                      <!-- icono size-7 -->
                  </div>
                  <div
                      class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                  >
                      <!-- icono size-6 -->
                      <p class="hidden text-xl text-white lg:block">Inicio</p>
                  </div>
              </a>

              <!-- Botón de cerrar sesión -->

              <!-- Botón para publicar -->
          </div>
      </div>
  </div>
  ```

- Componente `logo`


  ```html
  <svg
      width="48"
      height="48"
      viewBox="0 0 48 48"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
  >
      <rect width="48" height="48" fill="transparent" />
      <path
          d="M8.99786 17.8433L39.9033 0L39.0844 12.6994L12.7638 27.8955L8.99786 17.8433Z"
          fill="white"
      />
      <path
          opacity="0.5"
          d="M12.7637 27.8948L34.4994 15.3457L33.6805 28.0451L16.5296 37.9471L12.7637 27.8948Z"
          fill="white"
      />
      <path
          opacity="0.25"
          d="M16.5273 37.9477L29.0933 30.6927L28.2744 43.3921L20.2933 48L16.5273 37.9477Z"
          fill="white"
      />
  </svg>
  ```

- Icono `home`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"
      />
      <path
          d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"
      />
  </svg>
  ```

- Icono `user`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          fill-rule="evenodd"
          d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
          clip-rule="evenodd"
      />
  </svg>
  ```

- Icono `logout`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path
          fill-rule="evenodd"
          d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
          clip-rule="evenodd"
      />
  </svg>
  ```

- Icono `feather`

  ```html
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path
          fill="currentColor"
          d="M278.5 215.6L23 471c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l57-57 68 0c49.7 0 97.9-14.4 139-41c11.1-7.2 5.5-23-7.8-23c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l81-24.3c2.5-.8 4.8-2.1 6.7-4l22.4-22.4c10.1-10.1 2.9-27.3-11.3-27.3l-32.2 0c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l112-33.6c4-1.2 7.4-3.9 9.3-7.7C506.4 207.6 512 184.1 512 160c0-41-16.3-80.3-45.3-109.3l-5.5-5.5C432.3 16.3 393 0 352 0s-80.3 16.3-109.3 45.3L139 149C91 197 64 262.1 64 330l0 55.3L253.6 195.8c6.2-6.2 16.4-6.2 22.6 0c5.4 5.4 6.1 13.6 2.2 19.8z"
      />
  </svg>
  ```

- Botón de publicar

  ```html
  <a href="#" class="block w-full">
      <div
          class="mt-6 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-sky-500 p-4 transition hover:bg-opacity-80 lg:hidden"
      >
          <!-- Icono feather size-6 -->
      </div>
      <div class="mt-6 hidden cursor-pointer rounded-full bg-sky-500 px-4 py-2 hover:bg-opacity-90 lg:block">
          <p class="hidden text-center text-[20px] font-semibold text-white lg:block">Publicar</p>
      </div>
  </a>
  ```

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
