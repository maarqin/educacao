{{--

    Bundle para listagens padroes do sistema
    Tabela default para os modulos CRUD que o sistema ira conter

    @param1 Deve-se sempre dizer o nome da model do formulario !!!Not-empty!!!

    @author Marcos Thomaz
    @version 2015-04-22; 2015-04-27; 2015-05-06

--}}
<style type="text/css">
    .list-btn li {
        float: left;
        list-style: none;
    }
    i.icons-action { margin-right: 0 !important; }
    .no-margin{
        margin: 5px 0 0 !important;
    }
    span.hidden-xs { float: right }
    .action-th { width: 160px !important; }
</style>
<div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">

        <div class="heading col-md-12" style="margin-bottom:5px">
            <a class="btn btn-primary" href="/{{ $model }}/create"><i class="fa fa-plus"></i>Adicionar novo</a>
            <a class="btn btn-default" style="float: right; margin: 0;" href="/{{ $model }}"><i class="fa fa-refresh"></i>Atualizar</a>
        </div>

        <div class="widget-content padded clearfix">
            <table class="table table-bordered table-striped" id="dataTable1">
                <thead>
                <tr>
                    @yield('header')
                </tr>
                </thead>
                <tbody>
                    @yield('datas')
                </tbody>
            </table>
        </div>
    </div>
</div>
