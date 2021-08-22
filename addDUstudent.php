<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/my.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home</title>
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .nav:hover {
      color: red;
      cursor: pointer;
    }
  </style>
  <script type="text/javascript">
    function handleBackward() {
      window.history.back();
    }

    function handleForward() {
      window.history.forward();
    }
  </script>
</head>

<body>
  <header>
    <div class="my-container my-card-4"
      style="height:150px; max-width:1600px; background: linear-gradient(to left, #03553a, #03558a);  border-radius: 0 0 50% 50%/0 0 100% 100%; margin:-17px auto 0;">
    </div>
    <div class="my-container my-xxlarge" style="text-align: center; color: rgb(233, 232, 232); margin-top:-145px;">
      <h2>JEC MCA STUDENT MANAGEMENT </h2>


      <div class="my-container">
        <a class="my-padding" onclick="handleBackward()"><i class="fa fa-angle-double-left my-xxlarge nav"></i></a>
        <a href="home.php" class="my-padding"><i class="fa fa-home my-xxlarge nav"></i></a>
        <a class="my-padding" onclick="handleForward()"><i class="fa fa-angle-double-right my-xxlarge nav"></i></a>
      </div>
    </div>
  </header>


  <div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;">
    <form class="my-container" method="post" action="savestu.php" id="form1" enctype="multipart/form-data">
      <h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #770677; margin-top: 80px;"><b> Enter
          Student Details</b></h1>
      <p>
      <div class="my-container my-border my-margin-left" style="width:200px;height:200px;"></div>
      <div class="my-padding" style="float:left; margin-left:230px; margin-top:-130px;">
        <label class="my-margin-top my-left" style="color:rgb(122, 120, 120);"> Photo: </label>
        <input class="my-input" type="file" name="image" id="image" value="" style="width:250px; color:rgb(122, 120, 120);">
       </div>
      </p><br>
      <div class="my-row-padding">
        <div class="my-half">
          <br>
          <p>
            <input name="roll" type="text" class="my-input my-animate-input" placeholder="Roll No." style="width:40%">
          </p>
          <br>
          <p>
            <input name="name" type="text" class="my-input my-animate-input" placeholder="Name" style="width:40%">
          </p>
          <br>
          <p>
            <input name="address" type="text" class="my-input my-animate-input" placeholder="Address" style="width:40%">
          </p>
          <br>
          <p>
            <input name="phone" type="text" class="my-input my-animate-input" placeholder="Phone No." style="width:40%">
          </p>
          <br>
          <p>
            <input name="batch" type="text" class="my-input my-animate-input" placeholder="Batch" style="width:40%">
          </p>
          <br>

        </div>
        <div class="my-half">
          <br>
          <p>
            <input name="regno" type="text" class="my-input my-animate-input" placeholder="Registration No."
              style="width:40%">
          </p>
          <br>
          <p>
            <input name="email" type="text" class="my-input my-animate-input" placeholder="E-mail" style="width:40%">
          </p>
          <br>
          <p>
            <label class="my-margin-top my-left" style="color:rgb(122, 120, 120)"> Date of Birth &nbsp;</label>
            <input name="dob" type="date" class="my-input" value="Date of Birth"
              style="width:40%; color:rgb(122, 120, 120); ">
          </p>
          <br>
          <p>
            <input name="qualification" type="text" class="my-input my-animate-input" placeholder="Qualification"
              style="width:40%">
          </p>
          <br>
          <p>
            <input name="board" type="text" class="my-input my-animate-input" placeholder="Board" style="width:40%">
          </p>


          <br>
          <button name="submit" class="my-btn my-block my-margin-bottom my-right my-text-white my-padding" type="submit"
            style="width:40%;margin-left:20%; background-color: #770677;"><span class="my-opacity-off">Save</span>
          </button><br>
        </div>
      </div>
      <br>
    </form>
  </div>







</body>

</html>