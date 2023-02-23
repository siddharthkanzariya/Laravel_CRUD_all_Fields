<h1 align="center">Student Information</h1>
<hr>
@if(session()->get('success'))
    {{ session()->get('success') }}
@endif
<br>
<a href="{{route('student.create')}}" align="center">ADD</a>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>HOBBY</th>
        <th>MOBILE</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>BLOODGRUOP</th>
        <th>ADDRESS</th>
        <th>IMAGE</th>
        <th colspan='4'>ACTION</th>
    </tr>
    @foreach($studentarray as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->st_name}}</td>
        <td>{{$student->st_gender}}</td>
        <td>{{$student->st_hobby}}</td>
        <td>{{$student->st_mobile}}</td>
        <td>{{$student->st_email}}</td>
        <td>{{$student->st_password}}</td>
        <td>{{$student->st_bloodgroup}}</td>
        <td>{{$student->st_address}}</td>
        <td><img src="{{asset('uploads/' . $student->st_image)}}" width="90"></td>
        <td>
            <a href="{{route('student.show',$student->id)}}">Show</a>
        </td>
        <td>
            <a href="{{route('student.edit',$student->id)}}">Edit</a>
        </td>
        <td>
            <form action="{{route('student.destroy',$student->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>
    @endforeach
</table>