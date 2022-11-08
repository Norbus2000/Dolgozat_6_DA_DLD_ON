<form action="/api/participate/{{$participate->participate_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="checkbox" name="present" placeholder="Present" value="{{$participate->present}}">
    <input type="submit" value="Ok">
</form>