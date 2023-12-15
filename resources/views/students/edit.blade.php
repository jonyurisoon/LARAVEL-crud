<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('students.update', ['student' => $student])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Enter name: </label>
            <input type="text" name="name" placeholder="Enter name" value="{{$student->name}}" />
        </div>
        <div>
            <label for="grade">Enter grade: </label>
            <input type="text" name="grade" placeholder="Enter grade" value="{{$student->grade}}" />
        </div>
        <div>
            <input type="submit" value="Update student" />
        </div>
    </form>
</body>

</html>