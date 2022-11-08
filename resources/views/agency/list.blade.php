@foreach ($agencies as $agency)
<form action="/api/agencies/{{$agency->agency_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div>
        <input type="submit" value="{{$agency->name}}">
    </div>
</form>
@endforeach