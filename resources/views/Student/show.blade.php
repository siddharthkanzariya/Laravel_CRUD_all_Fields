ID : {{$studentdata->id}}
<br>
Name :  {{$studentdata->st_name}}
<br>
Gender : {{$studentdata->st_gender}}
<br>
Hobby : {{$studentdata->st_hobby}}
<br>
Mobile : {{$studentdata->st_mobile}}
<br>
Email : {{$studentdata->st_email}}
<br>
Password : {{$studentdata->st_password}}
<br>
BloodGroup : {{$studentdata->st_bloogroup}}
<br>
Address : {{$studentdata->st_address}}
<br>
<img src="{{asset('uploads/'.$studentdata->st_image)}}" width="300">
<br>
<a href="{{route('student.index')}}">Back</a>