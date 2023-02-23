<html>
    <head>
        <h1 align="center">Enter Student Information</h1>
        <hr>
        <a href="{{route('student.index')}}" align="center">VIEW</a>
        <hr>
    </head>
    <body>
        <form method="post" action="{{route('student.store')}}" enctype="multipart/form-data">
            @csrf
            <table align="center">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter Student Name" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        Male : <input type="radio" name="gender" value="male">
                        Female : <input type="radio" name="gender" value="female">
                    </td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td>
                        Movie    :  <input type="checkbox" name="st_hobby[]" value="movie">
                        Cricket  :  <input type="checkbox" name="st_hobby[]" value="cricket">
                        Roadtrip :  <input type="checkbox" name="st_hobby[]" value="roadtrip">
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile" placeholder="Enter Student Mobile" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Enter Student EmailID" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Enter Student Password" required></td>
                </tr>
                <tr>
                    <td>BloodGroup</td>
                    <td>
                        <select name="bloodgroup">
                            <option value="A+">A+</option>
                            <option value="AB+">AB+</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="address"></textarea></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td><input type="submit"> <input type="reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>