<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="icon" href="/css/img/icon.png"/>
    <title>Helpdesk - Student Inquiry</title>
</head>
<body style="background-image: url('/css/img/bg.png')">
    <a href="{{ url('/') }}">
        <img src="/css/img/logo.png" 
             alt="logo" 
             class="rounded mx-auto d-block mt-3 bg-white border" 
             width="200px">
    </a>
    <form action="submit" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="container mt-3 bg-white p-3 border">
            <div class="d-flex">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
            </div>

            <div class="form-group d-flex">
                <div class="pr-3">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                    <span style="color:red">@error ('fname') {{ $message }} @enderror</span>
                </div>

                <div class="pr-3">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="{{ old('fname') }}">
                    <span style="color:red">@error ('lname') {{ $message }} @enderror</span>
                </div>

                <div>
                    <label for="idNumber">ID Number</label>
                    <input type="text" class="form-control" name="idNumber" id="idNumber" placeholder="20xxxxxxxx" value="{{ old('fname') }}">
                    <span style="color:red">@error ('idNumber') {{ $message }} @enderror</span>
                </div>
            </div>

            <div class="form-group col-xs-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control " name="email" id="email" placeholder="name@example.com" value="{{ old('lname') }}">
                <span style="color:red">@error ('email') {{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="text" class="form-control" name="contactNumber" id="contactNumber" placeholder="09xxxxxxxxx" value="{{ old('contactNumber') }}">
                <span style="color:red">@error ('contactNumber') {{ $message }} @enderror</span>
            </div>

            <div class="form-group d-flex">
                <div class="form-group pr-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Example" value="{{ old('subject') }}">
                    <span style="color:red">@error ('subject') {{ $message }} @enderror</span>
                </div>

                <div class="form-group pr-3">
                    <label for="inquiryType">Inquiry type:</label>
                    <select class="form-control" name="inquiryType" id="inquiryType" placeholder="Select inquiry type" value="{{ old('inquiryType') }}">
                    <option disabled selected>Select inquiry type</option>
                    <option>Grades</option>
                    <option>Test Permit</option>
                    <option></option>
                    </select>
                    <span style="color:red">@error ('inquiryType') {{ $message }} @enderror</span>
                </div>

                <!--<div class="form-group">
                    <label for="file">Upload file</label>
                    <input type="file" class="form-control" name="file" id="file" placeholder="Example" value="{{ old('subject') }}">
                    <span style="color:red">@error ('file') {{ $message }} @enderror</span>
                </div>-->
            </div>

            <div class="form-group">
                <label for="concern">State the concern regarding your inquiry:</label>
                <textarea class="form-control" name="concern" id="concern" rows="3" value="{{ old('concern') }}" required></textarea>
                <span style="color:red">@error ('concern') {{ $message }} @enderror</span>
            </div>

            <button type="submit" class="btn btn-success">submit</button>
        </div>
    </form>
</body>
</html>