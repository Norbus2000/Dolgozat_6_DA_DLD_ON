<form action="/api/event/{{$event->event_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="date" placeholder="Date" value="{{$event->date}}">
    <input type="number" name="agency_id" placeholder="Agency_id" value="{{$event->agency_id}}">
    <input type="number" name="limit" placeholder="Limit" value="{{$event->limit}}">
    <input type="submit" value="Ok">
</form>