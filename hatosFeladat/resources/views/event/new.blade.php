<form action="/api/events" method="post">
    {{csrf_field()}}
    <input type="date" name="date" placeholder="Date">
    <input type="number" name="agency_id" placeholder="Agency_id">
    <input type="number" name="limit" placeholder="Limit">
    <input type="submit" value="Ok">
</form>