
@foreach ($subcategories as $subcategory)
@if ($details->subcategory_id == $subcategory->id )
<option hidden value="{{$subcategory->id}}">{{$subcategory->name}}</option>
@else
<option value="{{$subcategory->id}}">{{$subcategory->name}}</option> 
@endif
@endforeach