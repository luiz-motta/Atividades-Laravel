@extends('layout.template')

@section('table')

<div class="container">

    <div class="row my-5 mx-5">
        <h1>@yield('h1_1')</h1>
    </div>
    <div class="row mx-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="w-5">@yield('th1')</th>
                    <th scope="col" class="w-50">@yield('th2')</th>
                    <th scope="col" class="w-25">@yield('th3')</th>
                    <th scope="col" class="w-20">@yield('th4')</th>
                </tr>
            </thead>
            <tbody>

                @yield('produtos_novos')

            </tbody>
        </table>
    </div>


    <div class="row my-5 mx-5">
        <h1>@yield('h1_2')</h1>
    </div>
    <div class="row mx-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="w-5">@yield('th1')</th>
                    <th scope="col" class="w-50">@yield('th2')</th>
                    <th scope="col" class="w-25">@yield('th3')</th>
                    <th scope="col" class="w-20">@yield('th4')</th>
                </tr>
            </thead>
            <tbody>

                @yield('produtos_usados')

            </tbody>
        </table>
    </div>

</div>


@endsection

