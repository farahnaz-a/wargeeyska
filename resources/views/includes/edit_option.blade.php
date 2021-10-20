@if ($category->subcategory_id != null)
<option value="{{$details->subcategory_id}}">{{$details->subcategory->name}}</option> 
@endif

@foreach ($subcategories as $subcategory)
@if ($details->subcategory_id == $subcategory->id )
<option hidden value="{{$subcategory->id}}">{{$subcategory->name}}</option>
@else
<option value="{{$subcategory->id}}">{{$subcategory->name}}</option> 
@endif
@endforeach