<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>

   <h2> Tinh tong</head>
    <body>
        <form method="post">
            @csrf 
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Enter số a" name="soA">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="enter so b" name="soB">
            </div>
            <button type="submit" class="btn btn-primary">Tính</button>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="kết quả" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
            </div>
        </form>
    </body>
</html>