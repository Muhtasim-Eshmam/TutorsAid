
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
    <title>Mail from tutor</title>
<style>
.block{
    display: inline;
}
</style>


</head>
<body>
    <h2>Mail from TutorsAid</h2><br>
    <div class="block">
    <label>Subject</label>
    <input type="button" id="subject" name="subject" value="{{request('subject')}}" disabled><br>
    <label>Your Email</label>
    <input type="button" id="email" name="email" value="{{request('email')}}" disabled><br>
    <label>Student Name</label>
    <input type="button" id="sname" name="sname" value="{{request('sname')}}" disabled><br>
    <label>Email Body</label>
    <input type="button" id="body" name="body" value="{{request('body')}}" disabled><br>
</div>
</body>
</html>
</html>