{{--

    Bundle com os botoes de acao da tabela padrao do CRUD

    @param1 route para o action edit
    @param2 route para o action destroy
    @param3 id number

    @author Marcos Thomaz
    @version 2015-04-27; 2015-05-06

--}}
<td>
    <div class="pull-left no-margin">
        <a href="{{ route($edit, ['id' => $id]) }}" class="btn btn-sm btn-success">
            <i class="fa fa-edit icons-action"></i><span class="hidden-xs">&nbsp;Editar</span></a>
    </div>

    <div class="pull-right no-margin">
        {!! Form::open(['method' => 'DELETE', 'route' => [$destroy, $id]]) !!}
            {!! Form::button('<i class="fa fa-times-circle icons-action"></i><span class="hidden-xs">&nbsp;Apagar</span>',
                ['class' => 'btn btn-sm btn-danger', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </div>
</td>


