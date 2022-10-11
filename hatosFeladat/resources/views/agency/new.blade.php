<form action="/api/agencies" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="text" name="type" placeholder="Type" >
    <input type="submit" value="Ok">
</form>