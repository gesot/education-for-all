<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Education For All</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('nav/navbar.php');?>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="admin-page.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search id/name...">

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.querySelector(".content-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    if (td || td2) {
      txtValue = td.textContent || td.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      if ((txtValue.toUpperCase().indexOf(filter) > -1)||(txtValue2.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<!----------START OF ROWS---------->
    <?php include("user-interaction/stats.php"); ?>
<!----------END OF ROWS---------->

<!----------START OF TABLE---------->


    <h2 style="margin-left: 20px;">Table name</h2>
    <hr>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-7" style="overflow-y: scroll;height: 400px;">  
    <?php include("user-interaction/user-table.php") ?>
    </div>
    </div>
    </div>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-12" style="overflow-y: scroll;height: 400px;">  
    <?php include("user-interaction/comment-table.php") ?>
    </div>
    </div>
    </div>

<!----------END OF TABLE---------->

<!----------START OF FOOTER----------->
<footer>
    <div class="container-fluid" style='margin-top:40px; padding:20px;'>

      <div class="row">
        <div class="col-12 col-md-4">
          <h2>About us</h2>
          <div class="content">
            <p>Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης<br>Τμήμα Πληροφορικής<br>Στόχοι Αειφόρου Ανάπτυξης ΟΗΕ<br>Καλή Υγεία και Ευημερία</p>
            <div class="social">
              <a href="https://facebook.com"><span class="fa fa-facebook-f"></span></a>
              <a href="https://twitter.com"><span class="fa fa-twitter"></span></a>
              <a href="https://instagram.com"><span class="fa fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fa fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <a href="https://www.google.gr/maps/place/%CE%91%CF%81%CE%B9%CF%83%CF%84%CE%BF%CF%84%CE%AD%CE%BB%CE%B5%CE%B9%CE%BF+%CE%A0%CE%B1%CE%BD%CE%B5%CF%80%CE%B9%CF%83%CF%84%CE%AE%CE%BC%CE%B9%CE%BF+%CE%98%CE%B5%CF%83%CF%83%CE%B1%CE%BB%CE%BF%CE%BD%CE%AF%CE%BA%CE%B7%CF%82/@40.6308283,22.9570337,17z/data=!3m1!4b1!4m5!3m4!1s0x14a838ff432792c9:0x15eefe1dc3e6c8e9!8m2!3d40.6308283!4d22.9592224?hl=el"><span class="fa fa-map"></span></a>
              <span class="text">Thessaloniki, Greece</span>
            </div>
            <div class="phone">
              <a href="https://www.google.com/search?q=auth+phone&sxsrf=ALeKk00buQcm7lPf6nj1TQuEa9ofHu6Obw%3A1617693532199&ei=XAtsYIbPC4j4sAeChY7ICw&oq=auth+phone&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEMsBMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeOgcIABBHELADOgcIABCwAxBDOgIIAFCiggFY-IcBYO2KAWgCcAJ4AIABpgGIAeQGkgEDMC42mAEAoAEBqgEHZ3dzLXdpesgBCsABAQ&sclient=gws-wiz&ved=0ahUKEwiG7d2CiunvAhUIPOwKHYKCA7kQ4dUDCA0&uact=5"><span class="fa fa-phone"></span></a>
              <span class="text">+30 231 099 6000</span>
            </div>
            <div class="email">
              <span class="fa fa-envelope"></span>
              <span class="text">email@csd.auth.gr</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div>
                <button class="btn btn-primary" type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm text-center">
          <span class="credit">Created By Aristotle University of Thessaloniki | </span>
          <i class="fa fa-copyright" aria-hidden="true"></i><span> 2021 All rights reserved.</span>
      </div>
      </div>
    </div>
    </footer>
    <!----------END OF FOOTER---------->

    <!----------START OF <TOP> BUTTON---------->
		<a href="#"><i class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up"></i></i></a>
	<!----------END OF TOP BUTTON---------->
</body>
</html>