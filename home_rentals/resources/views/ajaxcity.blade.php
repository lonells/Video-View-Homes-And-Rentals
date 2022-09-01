@if($countData > 0)         
    @foreach($cities as $value)
        <option value="{{$value->id}}">{{$value->city}}</option>
    @endforeach        
@else
<option value="">--Select City--</option>      
@endif