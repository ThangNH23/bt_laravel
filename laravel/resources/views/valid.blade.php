<html>
    <head>
        <title>form-validation</title>
    </head>
    <body>
        <h1>Form validation</h1>
        <form action="#" method="post">
            <div class="form-control">
                <label for="">Name</label>
                <input type="text" name="Name" class="form-group" id="a">
            </div>
            <div class="form-control">
                <label for="">Age</label>
                <input type="number" name="Age" class="form-group" id="b">
            </div>
            <div class="form-control">
                <label for="">Date</label>
                <input type="datetime" name="Date" class="form-group" id="c">
            </div>
            <div class="form-control">
                <label for="">Phone number</label>
                <input type="number" name="Phone" class="form-group" id="d">
            </div>
            <div class="form-control">
                <label for="">Website</label>
                <input type="text" name="Web" class="form-group" id="e">
            </div>
            <div class="form-control">
                <label for="">Address</label>
                <input type="text" name="Address" class="form-group" id="f">
            </div>
            <div>
                @include ('block.error')
            </div>
            <button type="submit" class="btn btn-primary">
        </form>
        <div class="display-info">
            @if(isset($user))
                <p>Name: {{ $user['Name'] }}</p>
                <p>Age: {{ $user['Age'] }}</p>
                <p>Date: {{ $user['Date'] }}</p>
                <p>Phone: {{ $user['Phone'] }}</p>
                <p>Website: {{ $user['Web'] }}</p>
                <p>Address: {{ $user['Address'] }}</p>
            @endif
        </div>
    </body>
</html>