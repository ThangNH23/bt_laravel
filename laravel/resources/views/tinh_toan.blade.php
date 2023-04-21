<html>
    <head>
        <title>Caculator</title>
    </head>
    <body>
    <h1>Area of Triangle</h1>
        <form method="post">
            @csrf
            <label for="">Operator</label>
            <select name="Operator" id=""> 
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select> <br> <br>
            <label for="firstNB">Enter value of (A): </label>
            <input type="number" name="first_number" placeholder="enter value A"> <br> <br>
            <label for="secondNB">Enter value of (B)</label>
            <input type="number" name="second_number" placeholder="enter value B"> <br> <br>    
            <button type="submit">Caculate</button>
        </form>
        @if(isset($result)) 
            return <h2>Kết quả của bạn là: {{$result}}</h2>
        @endif
    </body>
</html>