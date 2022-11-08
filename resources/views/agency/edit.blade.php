<form action="/api/agency/{{$agency->agency_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name" value="{{$agency->name}}">
    <input type="text" name="country" placeholder="Country" value="{{$agency->country}}">
    <input type="text" name="type" placeholder="Type" value="{{$agency->type}}">
    <input type="submit" value="Ok">
</form>