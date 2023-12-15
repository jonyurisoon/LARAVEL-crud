<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
    <h1>Students</h1>
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->grade}}</td>
                    <td>
                        <a href="{{route('students.edit', ['student' => $student])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('students.delete', ['student' => $student])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>