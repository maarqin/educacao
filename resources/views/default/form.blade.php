{{--

    Bundle com a estrutura que todo formulario tera no sistema
    Para usa-lo, apenas faça o @include passando o action, fields e model name pelo parametro do mesmo; obrigatório!
    Outros parametros também são aceitados: class, titulo, object, orientation, autocomplete

    @param1 Action. ['action' => 'FuncionarioController@store']
    @param2 Campos do formulario. ['fields' => 'funcionario.fields']
    @param3 Model name. ['model' => 'funcionario']
    @param4 Class bootstrap que define a largura do formulario
    @param5 Dê um novo titulo ao formulario
    @param6 Só deve ser informado caso o formulario seja para a atualizacao de um cadastro
    @param7 Class html do bootstrap para definir o formato do formulario; inline ou horizontal
    @param8 Habilita ou desabilita o autocomplete do formulario

    @author Marcos Thomaz
    @version 2015-04-20; 2015-04-22; 2015-04-23; 2015-04-26

--}}

<div class="{{ $class or 'col-lg-12' }}">
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-bars"></i>{{ $titulo or 'Preencha os campos' }}
        </div>
        <div class="widget-content">

            @if( @$object )
                {!! Form::model($object, ['class'=> ( @$orientation ) ?: 'form-inline', 'autocomplete' => ( @$autocomplete ) ?: 'off', 'role' => 'form', 'method' => 'PATCH', 'action' => [$action, $object->id]]) !!}
            @else
                {!! Form::open(['class'=> ( @$orientation ) ?: 'form-inline', 'autocomplete' => ( @$autocomplete ) ?: 'off', 'role' => 'form', 'action' => $action]) !!}
            @endif

            @include($fields)

            <div class="form-actions">
                <input type="submit" value="{{ @$object ? 'Atualizar' : 'Salvar' }}" class="btn btn-primary pull-right">
                <a class="btn btn-default-outline pull-right" href="/{{ $model }}">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
