
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Vacancy BPP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{url("css/welcome.css")}}" rel="stylesheet">
        <link href="{{url("css/bootstrap.css")}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            
        </style>
    </head>
    <body class="antialiased">
        <video autoplay muted loop id="myVideo">
            <source src="{{url("video/videoplayback.mp4")}}" type="video/mp4">
        </video>          
        <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0 content">
            
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                  <h1>Welcome to E-Vacancy BPP</h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center border-gray-200 dark:border-gray-700">
                                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> --}}
                                <svg height="25pt" viewBox="0 0 496 496" width="25pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="248" x2="248" y1="496" y2="0"><stop offset="0" stop-color="#9f2fff"/><stop offset="1" stop-color="#0bb1d3"/></linearGradient><path d="m328 0c-92.632812 0-168 75.359375-168 168 0 37.671875 12.617188 72.367188 33.640625 100.425781l-28.953125 28.949219-12.6875-12.6875-139.726562 139.71875c-7.914063 7.929688-12.273438 18.457031-12.273438 29.648438 0 23.128906 18.816406 41.945312 41.9375 41.945312 11.207031 0 21.742188-4.359375 29.65625-12.289062l139.71875-139.710938-12.6875-12.6875 28.949219-28.953125c28.058593 21.023437 62.753906 33.640625 100.425781 33.640625 92.632812 0 168-75.359375 168-168s-75.367188-168-168-168zm-267.726562 472.40625c-4.890626 4.898438-11.402344 7.59375-18.335938 7.59375-14.304688 0-25.9375-11.640625-25.9375-25.945312 0-6.925782 2.695312-13.4375 7.59375-18.34375l128.40625-128.398438 36.6875 36.6875zm127.039062-152.40625-11.3125-11.3125 27.871094-27.878906c3.59375 3.953125 7.367187 7.71875 11.320312 11.320312zm140.6875 0c-83.816406 0-152-68.183594-152-152s68.183594-152 152-152 152 68.183594 152 152-68.183594 152-152 152zm-50.984375-158.328125c-17.085937 4.878906-29.015625 20.695313-29.015625 38.464844v39.863281h160v-39.863281c0-17.769531-11.929688-33.585938-29.015625-38.464844l-26.984375-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.441406-41.503906-11.238282-.992188-22.351563 2.800781-30.582032 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907zm39.007813-21.023437c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.832031-13.160156 7.792969-17.695312 5.007812-4.59375 11.558593-6.769532 18.382812-6.207032 12.238281 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031v23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312zm-268.023438 315.351562c0 4.414062-3.585938 8-8 8s-8-3.585938-8-8 3.585938-8 8-8 8 3.585938 8 8zm381.824219-377.929688c47.496093 53.699219 45.007812 135.441407-5.65625 186.097657-26.375 26.375-61.183594 39.695312-96.070313 39.695312-32.113281 0-64.28125-11.277343-90.019531-34.039062l10.59375-11.984375c47.390625 41.894531 119.496094 39.710937 164.175781-4.984375 44.695313-44.6875 46.878906-116.808594 4.984375-164.175781zm-191.65625 169.257813-11.984375 10.601563c-47.496094-53.699219-45.007813-135.441407 5.65625-186.097657 50.664062-50.65625 132.398437-53.136719 186.089844-5.65625l-10.59375 11.984375c-47.382813-41.894531-119.488282-39.703125-164.175782 4.984375-44.703125 44.6875-46.894531 116.808594-4.992187 164.183594zm-110.167969-247.328125v16h-16v-16zm-16 32h16v16h-16zm16 0v-16h16v16zm-16-16v16h-16v-16zm-80 112h-16v-16h16zm-16 16h16v16h-16zm16 0v-16h16v16zm-16 0h-16v-16h16zm104 96h-16v-16h16zm-16 16h16v16h-16zm16 0v-16h16v16zm-32-16h16v16h-16zm392 144h-16v-16h16zm-16 16h16v16h-16zm16-16h16v16h-16zm-16 0v16h-16v-16zm-128 64v16h-16v-16zm-16 32h16v16h-16zm16 0v-16h16v16zm-16-16v16h-16v-16zm-64-120v16h-16v-16zm-16 32h16v16h-16zm16 0v-16h16v16zm-16-16v16h-16v-16zm0 0" fill="url(#a)"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url("list_lowongan")}}">Lowongan Pekerjaan</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Informasi lowongan kerja serta persyaratan 
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center">
                                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> --}}
                                <svg height="25pt" viewBox="0 0 496 496" width="25pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="248" x2="248" y1="496" y2="0"><stop offset="0" stop-color="#9f2fff"/><stop offset="1" stop-color="#0bb1d3"/></linearGradient><path d="m456 112h-40v-112h-336v112h-40c-22.054688 0-40 17.945312-40 40v256c0 22.054688 17.945312 40 40 40h104v32h-32v16h272v-16h-32v-32h104c22.054688 0 40-17.945312 40-40v-256c0-22.054688-17.945312-40-40-40zm-360-96h304v320h-304zm-56 112h40v224h336v-224h40c13.230469 0 24 10.769531 24 24v216h-464v-216c0-13.230469 10.769531-24 24-24zm296 352h-176v-32h176zm120-48h-416c-13.230469 0-24-10.769531-24-24v-24h464v24c0 13.230469-10.769531 24-24 24zm-264-32h16v16h-16zm32 0h48v16h-48zm64 0h16v16h-16zm-176-80h272v-80h-272zm16-64h240v48h-240zm16 16h16v16h-16zm32 0h16v16h-16zm32 0h16v16h-16zm32 0h16v16h-16zm32 0h16v16h-16zm32 0h16v16h-16zm32 0h16v16h-16zm-80-240h-144v112h144zm-16 96h-112v-80h112zm32-96h112v16h-112zm0 32h112v16h-112zm0 32h112v16h-112zm0 32h112v16h-112zm-144 48h-16v-16h16zm16-16h240v16h-240zm-32 32h272v16h-272zm0 0" fill="url(#a)"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url("biodata")}}">Pencari Kerja</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    login dan dapat melengkapi data diri
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg> --}}
                                <svg height="25pt" viewBox="0 0 496 496" width="25pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="248" x2="248" y1="496" y2="0"><stop offset="0" stop-color="#9f2fff"/><stop offset="1" stop-color="#0bb1d3"/></linearGradient><path d="m144 216h16c0 8.824219 7.175781 16 16 16s16-7.175781 16-16h16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm-8-40c4.414062 0 8-3.585938 8-8s-3.585938-8-8-8-8 3.585938-8 8 3.585938 8 8 8zm80 0c4.414062 0 8-3.585938 8-8s-3.585938-8-8-8-8 3.585938-8 8 3.585938 8 8 8zm227.3125 64 52.6875 52.6875v203.3125h-224v-48h-272v-77.40625c0-24.144531 15.390625-45.496094 38.289062-53.121094l81.710938-27.242187v-22.40625c-13.6875-11.320313-23.824219-26.726563-28.710938-44.304688-19.816406-2.359375-35.289062-19.078125-35.289062-39.519531v-64c0-66.167969 53.832031-120 120-120s120 53.832031 120 120v64c0 20.441406-15.472656 37.160156-35.289062 39.519531-4.886719 17.578125-15.023438 32.984375-28.710938 44.304688v22.40625l40 13.335937v-63.566406zm4.6875 48h20.6875l-20.6875-20.6875zm-221.839844 17.152344-37.824218 37.824218 38.238281 27.320313 12.195312-60.945313zm53.839844-121.152344c0-10.414062-6.710938-19.214844-16-22.527344v38.527344c0 2.238281-.167969 4.433594-.335938 6.632812 9.464844-3.21875 16.335938-12.097656 16.335938-22.632812zm-191.664062 22.632812c-.167969-2.199218-.335938-4.394531-.335938-6.632812v-38.527344c-9.289062 3.3125-16 12.113282-16 22.527344 0 10.535156 6.871094 19.414062 16.335938 22.632812zm43.664062-94.632812c9.464844 0 18.832031 3.128906 26.40625 8.808594l17.59375 13.191406 17.601562-13.191406c7.566407-5.679688 16.933594-8.808594 26.398438-8.808594 20.328125 0 37.441406 13.886719 42.464844 32.65625 6.527344 1.070312 12.472656 3.71875 17.535156 7.550781v-32.207031c0-57.34375-46.65625-104-104-104s-104 46.65625-104 104v32.207031c5.0625-3.832031 11.007812-6.480469 17.535156-7.550781 5.023438-18.769531 22.136719-32.65625 42.464844-32.65625zm44 160c39.703125 0 72-32.296875 72-72v-44c0-15.441406-12.558594-28-28-28-6.023438 0-11.984375 1.992188-16.800781 5.601562l-27.199219 20.398438-27.191406-20.398438c-4.824219-3.609374-10.785156-5.601562-16.808594-5.601562-15.441406 0-28 12.558594-28 28v44c0 39.703125 32.296875 72 72 72zm-40 6.289062v14.398438l40 40 40-40v-14.398438c-12.015625 6.160157-25.59375 9.710938-40 9.710938s-27.984375-3.550781-40-9.710938zm-22.769531 31.0625 12.195312 60.945313 38.238281-27.320313-37.824218-37.824218zm158.769531 122.648438v-111.574219l-17.9375-5.976562-16.648438 83.246093-61.414062-43.863281-61.425781 43.871094-16.644531-83.246094-54.585938 18.191407c-16.351562 5.457031-27.34375 20.703124-27.34375 37.945312v61.40625h48v-48h16v48zm208 48v-176h-48v-48h-144v224zm-96-96h80v80h-80zm16 64h48v-48h-48zm-96 16h64v-16h-64zm0-32h64v-16h-64zm0-32h64v-16h-64zm16-128h-16v16h16zm96 0h-80v16h80zm0 32h-112v16h112zm32 48h16v-16h-16zm-16-16h-128v16h128zm47.59375-250.984375c10.285156 14.398437 16.40625 31.976563 16.40625 50.984375 0 48.519531-39.480469 88-88 88s-88-39.480469-88-88 39.480469-88 88-88c23.71875 0 45.238281 9.480469 61.089844 24.792969l13.015625-14.199219 11.796875 10.8125zm-11.089844 12.097656-67.65625 73.808594-45.839844-36.675781 10-12.492188 34.160157 27.324219 59.136719-64.511719c-13-12.703125-30.746094-20.566406-50.304688-20.566406-39.703125 0-72 32.296875-72 72s32.296875 72 72 72 72-32.296875 72-72c0-14.328125-4.257812-27.65625-11.496094-38.886719zm0 0" fill="url(#a)"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url("repository")}}">Pasang Lowongan</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   login dan mengelola informasi lowongan kerja
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg> --}}
                                <svg height="25pt" viewBox="0 0 496 496" width="25pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="248" x2="248" y1="496" y2="0"><stop offset="0" stop-color="#9f2fff"/><stop offset="1" stop-color="#0bb1d3"/></linearGradient><path d="m464 112.808594v-16.808594c0-13.230469-10.769531-24-24-24h-8c0-20.449219-8.742188-40.007812-23.992188-53.65625-15.230468-13.640625-35.710937-20.144531-56.191406-17.886719-31.59375 3.496094-58.046875 28.75-62.921875 60.054688-.597656 3.847656-.773437 7.679687-.765625 11.496093h-8.128906c-3.785156 0-7.320312.960938-10.511719 2.527344-9.785156-42.625-47.945312-74.535156-93.488281-74.535156-26.742188 0-52.328125 12.398438-68.921875 33.289062-16.292969 6.511719-27.078125 22.277344-27.078125 40.007813v38.703125h-40c-22.054688 0-40 17.945312-40 40v256c0 22.054688 17.945312 40 40 40h104v32h-32v16h272v-16h-32v-32h104c22.054688 0 40-17.945312 40-40v-256c0-19.3125-13.769531-35.472656-32-39.191406zm-159.296875-49.839844c3.777344-24.296875 24.335937-43.898438 48.863281-46.609375 2.1875-.238281 4.355469-.359375 6.503906-.359375 13.824219 0 26.867188 4.953125 37.273438 14.273438 11.855469 10.605468 18.65625 25.824218 18.65625 41.726562 0 15.742188-6.71875 30.855469-18.433594 41.457031-6.613281 5.984375-11.039062 13.933594-12.75 22.542969h-16.816406v-41.472656c9.289062-3.3125 16-12.113282 16-22.527344 0-13.230469-10.769531-24-24-24s-24 10.769531-24 24c0 10.414062 6.710938 19.214844 16 22.527344v41.472656h-16.824219c-1.726562-8.609375-6.183593-16.585938-12.839843-22.632812-13.976563-12.703126-20.566407-31.535157-17.632813-50.398438zm47.296875 9.03125c0-4.40625 3.59375-8 8-8s8 3.59375 8 8-3.59375 8-8 8-8-3.59375-8-8zm30.527344 80c-3.3125 9.289062-12.113282 16-22.527344 16s-19.214844-6.710938-22.527344-16zm-102.527344-64h9.871094c3.234375 14.152344 10.65625 27.175781 21.695312 37.207031 3.273438 2.976563 5.570313 6.738281 6.953125 10.792969h-14.519531v16h16.808594c3.71875 18.230469 19.871094 32 39.191406 32 19.3125 0 35.472656-13.769531 39.191406-32h16.808594v-16h-14.542969c1.367188-4.039062 3.621094-7.761719 6.847657-10.679688 11.023437-9.976562 18.558593-23.074218 21.832031-37.320312h9.863281c4.40625 0 8 3.59375 8 8v96c0 4.40625-3.59375 8-8 8h-66.808594l-29.191406 23.351562v-23.351562h-64c-4.40625 0-8-3.59375-8-8v-96c0-4.40625 3.59375-8 8-8zm-40 80v-24c8.824219 0 16 7.175781 16 16s-7.175781 16-16 16h-.550781c.328125-2.625.550781-5.289062.550781-8zm-125.472656-120.40625 2.367187-.792969 1.503907-2c13.53125-18.03125 35.058593-28.800781 57.601562-28.800781 44.113281 0 80 35.886719 80 80v36.449219c-4.726562-2.753907-10.144531-4.449219-16-4.449219v-32h-128v32c-5.855469 0-11.273438 1.695312-16 4.449219v-59.152344c0-11.679687 7.449219-22.007813 18.527344-25.703125zm27.152344 201.398438 22.34375 22.34375-23.632813 18.902343-10.789063-37.757812zm46.199218 42.761718-8.160156 12.246094h-7.429688l-8.167968-12.246094 11.878906-9.507812zm-73.65625-34.832031 17.386719 60.839844 19.964844-15.976563 7.800781 11.703125-5.621094 22.511719h-105.753906v-29.886719c0-17.722656 11.886719-33.519531 28.910156-38.433593zm60.023438 63.078125h3.507812l4 16h-11.507812zm24 16-5.621094-22.503906 7.800781-11.703125 19.964844 15.976562 17.386719-60.839843 37.3125 10.757812c17.023437 4.90625 28.910156 20.703125 28.910156 38.425781v29.886719zm13.363281-45.761719-23.632813-18.902343 22.34375-22.34375 12.078126 3.488281zm-11.609375-53.550781-24 24-24-24v-9.398438c7.414062 3.015626 15.511719 4.710938 24 4.710938s16.585938-1.695312 24-4.710938zm-24-20.6875c-26.472656 0-48-21.527344-48-48v-56h96v56c0 26.472656-21.527344 48-48 48zm-63.449219-40h-.550781c-8.824219 0-16-7.175781-16-16s7.175781-16 16-16v24c0 2.710938.222656 5.375.550781 8zm-72.550781-48h40v32c0 17.648438 14.351562 32 32 32h4.710938c4.144531 10.199219 10.832031 19.089844 19.289062 25.878906v16.105469l-63.519531 18.328125c-23.832031 6.863281-40.480469 28.992188-40.480469 53.800781v45.886719h288v-45.886719c0-24.808593-16.648438-46.929687-40.480469-53.808593l-63.519531-18.320313v-16.105469c8.457031-6.789062 15.144531-15.679687 19.289062-25.878906h4.710938c5.855469 0 11.273438-1.695312 16-4.449219v4.449219c0 13.230469 10.769531 24 24 24h48v40.648438l50.808594-40.648438h61.191406c13.230469 0 24-10.769531 24-24v-62.527344c9.289062 3.3125 16 12.113282 16 22.527344v216h-464v-216c0-13.230469 10.769531-24 24-24zm296 352h-176v-32h176zm120-48h-416c-13.230469 0-24-10.769531-24-24v-24h464v24c0 13.230469-10.769531 24-24 24zm-264-32h16v16h-16zm32 0h48v16h-48zm64 0h16v16h-16zm160-64h16v16h-16zm-16 16h-96v-16h96zm-80-32h-16v-16h16zm16-16h96v16h-96zm96-16h-128v-16h128zm0 0" fill="url(#a)"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url("info")}}">Info</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Temukan informasi mengenai lowongan pekerjaan
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
        <script src="{{url("js/main.js")}}"></script>
    </body>
</html>   