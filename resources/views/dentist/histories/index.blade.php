@extends('layouts.front')

@section('title','Historia clinica')

@section('content')


@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}}
</div>

@endif
<div class="container">
    {!! Form::model(Request::All() ,['route' => ['histories.index', $customer->id], 'method' => 'GET']) !!}
    <div class="row">
            <div class="col-md-1" id="dentacheck">
                <br>
                {!! Form::checkbox('chk16', '18', false, ['id'=>'chk16', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'16', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 18', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk15', '17', false, ['id'=>'chk15', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'15', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 17', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk14', '16', false, ['id'=>'chk14', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'14', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 16', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk13', '15', false, ['id'=>'chk13', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'13', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 15', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk12', '14', false, ['id'=>'chk12', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'12', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 14', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk11', '13', false, ['id'=>'chk11', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'11', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 13', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk10', '12', false, ['id'=>'chk10', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'10', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 12', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk9', '11', false, ['id'=>'chk9', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'9', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 11', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk8', '21', false, ['id'=>'chk8', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'8', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 21', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk7', '22', false, ['id'=>'chk7', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'7', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 22', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk6', '23', false, ['id'=>'chk6', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'6', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 23', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk5', '24', false, ['id'=>'chk5', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'5', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 24', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk4', '25', false, ['id'=>'chk4', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'4', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 25', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk3', '26', false, ['id'=>'chk3', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'3', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 26', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk2', '27', false, ['id'=>'chk2', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'2', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 27', ['class'=>'mylabel']) !!}
                <br>
                {!! Form::checkbox('chk1', '28', false, ['id'=>'chk1', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'1', 'autocomplete'=>'off'])  !!}
                {!! Form::label('name', 'Pieza 28', ['class'=>'mylabel']) !!}
                <br>

            </div>
        <div class="col-md-3">

            <img id="denta" src="{{Storage::url('images/dentition-adult.jpg')}}" usemap="#dentamap" width="300" >
            <map name="dentamap">
                <area id="area1" href="#" data-id="1" data-full="Diente #28" coords="360,244,367,244,375,242,384,251,389,262,388,275,383,287,372,296,360,299,349,297,340,290,337,279,336,268,335,256,337,248,343,243,351,242" shape="poly">
                <area id="area2" href="#" data-id="2" data-full="Diente #28" coords="377,236,381,231,383,217,380,200,368,185,358,187,349,192,337,190,327,197,327,211,331,219,331,226,333,235,339,242,352,241,366,245" shape="poly">
                <area id="area3" href="#" data-id="3" data-full="Diente #28" coords="355,187,363,184,369,178,370,169,369,158,365,150,363,138,356,130,347,126,339,130,329,134,322,137,316,145,317,154,319,163,319,177,324,184,332,191,340,189,347,191" shape="poly">
                <area id="area4" href="#" data-id="4" data-full="Diente #28" coords="332,133,343,126,349,117,350,105,344,92,333,86,321,92,307,96,302,107,304,121,307,131,314,136" shape="poly">
                <area id="area5" href="#" data-id="5" data-full="Diente #28" coords="299,100,317,92,325,84,326,69,318,59,307,55,299,61,292,69,281,79,283,88,289,97" shape="poly">
                <area id="area6" href="#" data-id="6" data-full="Diente #28" coords="270,51,266,62,272,71,283,72,295,64,302,54,297,43,285,37,276,41" shape="poly">
                <area id="area7" href="#" data-id="7" data-full="Diente #28" coords="251,23,246,35,243,45,244,55,254,61,266,55,274,43,279,32,272,22,261,19" shape="poly">
                <area id="area8" href="#" data-id="8" data-full="Diente #28" coords="219,55,231,54,238,48,246,34,246,17,234,12,223,10,214,13,206,19,208,29,213,44" shape="poly">
                <area id="area9" href="#" data-id="9" data-full="Diente #28" coords="177,45,183,51,190,55,200,52,206,42,207,29,206,17,198,10,183,10,170,16,170,25" shape="poly">
                <area id="area10" href="#" data-id="10" data-full="Diente #28" coords="166,54,170,45,171,30,167,20,156,15,148,14,138,23,134,31,140,44,146,51,155,57" shape="poly">
                <area id="area11" href="#" data-id="11" data-full="Diente #28" coords="135,70,141,66,142,52,137,38,126,34,114,41,109,51,114,60,120,65,126,70" shape="poly">
                <area id="area12" href="#" data-id="12" data-full="Diente #28" coords="118,97,126,85,125,72,115,60,102,53,88,56,81,68,79,84,90,93,104,99" shape="poly">
                <area id="area13" href="#" data-id="13" data-full="Diente #28" coords="87,137,98,134,106,118,105,100,90,93,77,84,64,92,57,99,55,112,59,125,71,130" shape="poly">
                <area id="area14" href="#" data-id="14" data-full="Diente #28" coords="60,190,78,190,86,184,88,169,92,154,93,141,82,136,62,125,52,130,43,141,41,155,36,165,39,179" shape="poly">
                <area id="area15" href="#" data-id="15" data-full="Diente #28" coords="47,243,71,242,75,224,80,212,79,197,72,190,59,190,48,184,32,189,24,205,22,228,33,238" shape="poly">
                <area id="area16" href="#" data-id="16" data-full="Diente #28" coords="39,298,57,298,72,288,71,265,73,249,64,243,45,244,30,242,20,256,18,273,25,289" shape="poly">
                <area id="area17" href="#" data-id="17" data-full="Diente #28" coords="346,492,365,492,382,494,390,482,395,466,389,451,378,439,363,437,349,441,339,451,341,466,339,478,341,485" shape="poly">
                <area id="area18" href="#" data-id="18" data-full="Diente #28" coords="341,495,358,491,376,494,387,507,387,527,380,545,369,552,353,545,334,543,329,532,332,515,335,503" shape="poly">
                <area id="area19" href="#" data-id="19" data-full="Diente #28" coords="352,545,368,553,377,564,371,581,371,592,361,607,349,610,326,598,319,588,324,570,325,557,332,544" shape="poly">
                <area id="area20" href="#" data-id="20" data-full="Diente #28" coords="313,640,326,648,339,650,352,637,354,615,343,606,325,599,311,603,306,619,306,631" shape="poly">
                <area id="area21" href="#" data-id="21" data-full="Diente #28" coords="309,683,320,680,330,665,331,651,312,640,295,638,288,646,282,661,297,677" shape="poly">
                <area id="area22" href="#" data-id="22" data-full="Diente #28" coords="268,655,259,662,261,679,267,694,281,707,298,701,297,681,284,664" shape="poly">
                <area id="area23" href="#" data-id="23" data-full="Diente #28" coords="244,666,236,676,237,705,248,719,269,711,268,698,262,683,254,671" shape="poly">
                <area id="area24" href="#" data-id="24" data-full="Diente #28" coords="226,673,216,670,207,683,205,720,221,723,235,719,235,706,232,687" shape="poly">
                <area id="area25" href="#" data-id="25" data-full="Diente #28" coords="175,713,182,720,199,722,205,715,204,687,195,671,186,671,178,682" shape="poly">
                <area id="area26" href="#" data-id="26" data-full="Diente #28" coords="171,668,164,665,155,674,149,690,142,703,145,711,162,719,172,710,178,682" shape="poly">
                <area id="area27" href="#" data-id="27" data-full="Diente #28" coords="133,706,148,688,153,675,155,661,143,655,126,667,115,684,117,699" shape="poly">
                <area id="area28" href="#" data-id="28" data-full="Diente #28" coords="98,683,112,680,131,662,129,647,119,637,99,640,85,650,83,663,88,672" shape="poly">
                <area id="area29" href="#" data-id="29" data-full="Diente #28" coords="82,650,107,637,112,622,104,605,95,599,64,609,60,623,60,633,71,647" shape="poly">
                <area id="area30" href="#" data-id="30" data-full="Diente #28" coords="61,610,92,599,98,587,94,575,93,563,89,549,73,544,59,547,44,556,39,566,44,581,46,594" shape="poly">
                <area id="area31" href="#" data-id="31" data-full="Diente #28" coords="83,544,85,524,79,509,75,493,55,492,36,497,28,511,28,530,38,546,48,552,64,543" shape="poly">
                <area id="area32" href="#" data-id="32" data-full="Diente #28" coords="78,475,77,467,74,450,62,437,35,438,24,454,21,473,27,485,36,496,54,492,72,493" shape="poly">
            </map >
        </div>


            <div class="col-md-1" id="dentacheck">
                <br>
                {!! Form::label('name', 'Pieza 48', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk32', '48', false, ['id'=>'chk32', 'name'=>'my_checkbox[]', 'type'=>'checkbox', 'data-id'=>'32', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 47', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk31', '47', false, ['id'=>'chk31', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'31', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 46', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk30', '46', false, ['id'=>'chk30', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'30', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 45', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk29', '45', false, ['id'=>'chk29', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'29', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 44', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk28', '44', false, ['id'=>'chk28', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'28', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 43', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk27', '43', false, ['id'=>'chk27', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'27', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 42', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk26', '42', false, ['id'=>'chk26', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'26', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 41', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk25', '41', false, ['id'=>'chk25', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'25', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 31', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk24', '31', false, ['id'=>'chk24', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'24', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 32', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk23', '32', false, ['id'=>'chk23', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'23', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 33', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk22', '33', false, ['id'=>'chk22', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'22', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 34', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk21', '34', false, ['id'=>'chk21', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'21', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 35', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk20', '35', false, ['id'=>'chk20', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'20', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 36', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk19', '36', false, ['id'=>'chk19', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'19', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 37', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk18', '37', false, ['id'=>'chk18', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'18', 'autocomplete'=>'off'])  !!}
                <br>
                {!! Form::label('name', 'Pieza 38', ['class'=>'mylabel']) !!}
                {!! Form::checkbox('chk17', '38', false, ['id'=>'chk17', 'name'=>'my_checkbox[]','type'=>'checkbox', 'data-id'=>'17', 'autocomplete'=>'off'])  !!}

            </div>
        <div class="col-md-6">
            
                <table class="table table-striped">
                    <thead>
                        <th>Fecha comienzo</th>
                        <th>Pieza</th>
                        <th>Estado</th>
                        <th>Importe</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($histories as $history)
                        <tr>

                            <td>{{$history->created_at}}</td>
                            <td>{{$history->tooth}}</td>
                            <td>{{$history->status}}</td>
                            <td>{{$history->account->amount}}</td>
                            <td>
                            <a class="btn btn-success" href="{{route('histories.edit',[$history->id, $history->tooth])}}" title="Editar cliente" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a class="btn btn-danger" href="{{route('histories.destroy', $history->id)}}" title="Eliminar" onclick="return confirm('Quiere borrar el movimiento?')" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

   
        </div>
    </div>
</div>
 {!! Form::submit('Ver', ['class' => 'btn btn-default']) !!}</span>
            <a class="btn btn-success" href="{{route('histories.create',[$customer->id])}}" title="Nuevo tratamiento" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a>


@endsection

@section('customJS')

<script type="text/javascript" src="{{ asset('js/imagemapster.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        
        $('#denta').mapster({
            fillOpacity : 0.5,
            render_highlight : {
                fillColor : '2aff00',
                stroke : false
            },
            render_select : {
                fillColor : '2a00ff',
                stroke : false
            },
            fadeInterval : 50,
            mapKey : 'data-id',
            onClick : function(e) {
                console.log(e.key);
                $('#chk' + e.key).prop("checked", !$('#chk' + e.key).prop("checked"));
            }
        });

        $("#dentacheck input[type='checkbox']").each(function() {
            $(this).change(function() {
                $('#area' + $(this).data('id')).mapster('set', $(this).prop("checked"));
            });
        });

    });
</script>

@endsection




