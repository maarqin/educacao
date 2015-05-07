{{--

    Bundle Voce esta esta
    Informe ao usuario utilizador do sistema
    Diz qual a localizacao atual do usuario
    Sitemap
    Sera chamado pela view do event-controller

    @param1 array Informe um arranjo de dados

    @example @include('default.youarehere', ['menus' => ['#1' => 'Funcionário', '#2' => 'Cadastrar funcionário']])

    @author Marcos Thomaz
    @version 2015-04-20

--}}
<div class="col-lg-12">
    <ul class="breadcrumb">

        <li>
            <a href="#"></a><i class="fa fa-home"></i>
        </li>

        @forelse($menus as $link => $menu)
            <li>
                @if( is_string($link) )
                    <a href="{{ $link }}">{{ $menu }}</a>
                @else
                    {{ $menu }}
                @endif
            </li>
        @empty
            <li>
                Nenhum informado
            </li>
        @endforelse

    </ul>
</div>
