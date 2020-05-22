<option value="all">{{$type}}</option>
@foreach ($list as $d)
    <option value="{{$d->id}}">{{$d->name}}</option>
@endforeach