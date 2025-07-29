<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    {{-- Styles --}}
    @include('partials.head')
</head>

<body>

    <div class="flex grow flex-col in-data-kt-[sticky-header=on]:pt-(--header-height)" >

    <div >
        {{-- Header --}}
            @include('partials.header')
    </div>
    <div >
        {{-- Navbar --}}
    @include('partials.navbar')
    </div>
    
    <div class="container-fixed w-full flex px-0 lg:ps-4">

        <div  >
            {{-- Sidebar --}}
        @include('partials.sidebar')
        </div>

        <main class="flex flex-col grow" id="content" role="content">
            <div class="kt-container-fluid">
                <div class="grid gap-5 lg:gap-7.5">
                    <div class="grid lg:grid-cols-1 gap-5 lg:gap-7.5 items-stretch">
                    {{-- Content --}}
                     @yield('content')
                    </div>
            </div>
            </div>
        </main>

        
    </div>



    
    </div>


    {{-- Scripts --}}
    @include('partials.scripts')
</body>
</html>
