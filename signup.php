<?php
  $studnum = $_POST['studnum'];
  $studname = $_POST['password'];

  //database connection
  $con = new mysqli("localhost", "root", "", "testreg");
  if($con->connect_error){
    die("Failed to connect: " .$con->connect_error);
  }
  else{
    $stmt = $con->prepare("select * from registration where studnum = ? ");
    $stmt->bind_param("i", $studnum);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password']== $studname){
        echo "<h2> Login Successfully</h2>";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign Up</title>
		<link rel="stylesheet" href="path/to/signdes.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="jquery.datetimepickeer.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	</head>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
         
           <div class="col-xl-4 d-none d-xl-block">
              <img
                src="123.jpg"
                style="
                width: 500px;
                height: 130px;
                margin-top: 20px;
                margin-left: 10px;"
            
              />
            </div>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"> </h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="studnum" class="form-control form-control-lg" value="20150100666" />
                    <label class="form-label" for="studnum">Student Number</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="studName" class="form-control form-control-lg" />
                    <label class="form-label" for="studName">Student Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input
                      type="date"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                    />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="option1"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="option2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="option3"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>
                
                  <div class="row">
            
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  
                  <label class="form-label select-label">Program: </label>
                 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>SELECT PROGRAM</option>
                  <option value="1">CENGG</option>
                  <option value="2">CCSS</option>
            </select>
              </div>
              </div>

              <div class="row">  
                <div class="col-12">
                  
                  <label class="form-label select-label">Year Level:  </label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>SELECT Year Level</option>
                  <option value="1">1st Year</option>
                  <option value="2">2nd Year</option>
                  <option value="3">3rd Year</option>
                  <option value="4">4th Year</option>
                  <option value="5">5th Year</option>
                </select>
              </div>
             </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

             
              <div class="mt-4 pt-2">
                <input style="width:100%" class="btn btn-primary btn-lg" type="submit" href="login.php" value="Save Changes" />
                <div class=" mb-4 pb-2">
                <input style="width:100%" class="btn btn-primary btn-lg" type="submit" href="login.php" value="Delete" />
              </div>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>