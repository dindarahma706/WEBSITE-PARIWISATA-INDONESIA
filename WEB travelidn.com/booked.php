<?php
   include 'dbconn.php';
   session_start();
   if (!isset($_SESSION['email'])) header("Location: home.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Booked</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   </head>
   <body>


   
   <section class="header">

   <a href="home.php" class="logo">travel.co</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="booked.php">booked</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


      <div class="container mt-5">
         <a href="add.php" class="btn btn-primary btn-md mb-5">Create</a>
         <div class="content table-responsive table-full-width">
            <table id="tabel-data" class="table table-striped table-hover tabel-bordered mt-5">
               <thead class="table-dark">
               <th class="text-center"> ID </th>
               <th class="text-center">Name</th>
               <th class="text-center">Email</th>
               <th class="text-center">Phone</th>
               <th class="text-center">Address</th>
               <th class="text-center">Location</th>
               <th class="text-center">Guests</th>
               <th class="text-center">Arrivals</th>
               <th class="text-center">Leaving</th>
               <th class="text-center">Action</th>
               </thead>

               <?php
                  $sqlGet = "SELECT * FROM `book_form`";
                  $query = mysqli_query($conn, $sqlGet);

                  while($data = mysqli_fetch_array($query)) {
                     echo "
                        <tbody>
                           <tr>
                              <td>$data[id]</td>
                              <td>$data[name]</td>
                              <td>$data[email]</td>
                              <td>$data[phone]</td>
                              <td>$data[address]</td>
                              <td>$data[location]</td>
                              <td>$data[guests]</td>
                              <td>$data[arrivals]</td>
                              <td>$data[leaving]</td>
                              <td>
                                 <div class='row'>
                                    <div class='col'>
                                       <a href='update.php?id=$data[id]' class='btn btn-sm'>Update</a>
                                    </div>
                                    <div class='col'>
                                       <a href='delete.php?id=$data[id]' class='btn btn-sm'>Delete</a> 
                                    </div>
                                 </div>
                              </td
                           </tr>
                        </tbody>
                     ";
                  }
               ?>

            </table>
         </div>
      </div>



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +6281-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +6221-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> travelind@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Bali, Indonesia </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Dinda Rahma Juwita</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });
</script>