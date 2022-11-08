<!-- <form action="/api/participates" method="post">
    {{csrf_field()}}
    <input type="number" name="event_id" placeholder="Event_id">
    <input type="number" name="user_id" placeholder="User_id">
    <input type="checkbox" name="present" placeholder="Present">
    <input type="submit" value="Ok">
</form> -->

<form action="/api/participates" method="post">
    {{csrf_field()}}
    <select name="event_id" placeholder="Event_id">
        @foreach ($events as $event)
            <option value="{{$event->event_id}}">{{$event->event_id}}</option>
        @endforeach
    </select>

    <select name="user_id" placeholder="User_Id">
        @foreach ($users as $user)
            <option value="{{$user->user_id}}">{{$user->name}}</option>
        @endforeach
    </select>

    <!-- <input type="checkbox" name="present" placeholder="Present"> -->
    <select name="present" id="present">
        <option value=1>jelen</option>
        <option value=0>hianyzik</option>
    </select>

    <input type="submit" value="Ok">
</form>