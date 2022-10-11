@foreach ($participates as $participate)
<form action="/api/participates/{{$participate->participate_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div>
        <input type="submit" value="{{$participate->participate_id}}">
    </div>
</form>
@endforeach