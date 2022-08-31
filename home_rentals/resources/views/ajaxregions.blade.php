@if($countData > 0)         
    @foreach($regions as $value)
        <option value="{{$value->id}}">{{$value->region}}</option>
    @endforeach        
@else
<option value="">--Select Region--</option>      
@endif