<table class="table table-responsive table-striped" id="pedidos-table">    
        <tr>
            <th>Total</th>
            <th>Estado</th>
            <th>Cliente</th>
            <th colspan="3">Acciones</th>
        </tr>    
    @foreach($pedidos as $pedido)
        <tr>
            <td>{!! $pedido->total !!}</td>
            <td>{!! $pedido->estado !!}</td>
            <td>{!! App\User::find($pedido->user_id)->name !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('backend.pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"> Ver</i></a>
                    {!! Form::label('pedidos[]', ' Seleccionar ') !!} 
                    {!! Form::checkbox('pedidos[]', $pedido->id, null, ['class' => 'field']) !!}
                </div>                
            </td>
        </tr>
    @endforeach    
</table>
    <!--div>
         <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="">Despachar Pedidos</a>
    </div-->
<div class="form-group pull-right">
    {!! Form::submit('Despachar Pedidos', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.pedidos.index') !!}" class="btn btn-default">Cancelar</a>
</div>