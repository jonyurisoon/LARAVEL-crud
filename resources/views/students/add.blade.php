<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{ route('students.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Enter name: </label>
            <input type="text" name="name" placeholder="Enter name" />
        </div>
        <div>
            <label for="grade">Enter grade: </label>
            <input type="text" name="grade" placeholder="Enter grade" />
        </div>
        <div>
            <input type="submit" value="Save student" />
        </div>
    </form>
</body>

</html>