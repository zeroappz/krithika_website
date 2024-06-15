<?php  
session_start();
include 'conn.php';
 
if(isset($_SESSION["email"])){
    include 'permission.php';
}
else{
    header('Location: index.php');  
}

 try  
 {  

 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  

<!doctype html>
<html lang="en">

<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=== CSS Link ===-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" href="assets/images/kirthika.png" style="width:80px; height:107px !important;">
    <!--=== Title ===-->

    <style type="text/css">
        .btn-success {
    color: #fff;
    background-color: #100978!important;
    border-color: #198754;
}
.btn-danger {
    color: #fff;
    background-color: #fd0018!important;
    border-color: #dc3545;
}
    </style>
    <title>Kirthika Dental Care</title>
</head>

<body>
    <!-- Header Start -->
    

    <!-- Header End -->
<a href="logout.php" style="float: right; margin-right:50px!important" class="main-btn">Logout</a>

    <br>
    <!--=== Start Banner Section ===-->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">

<?php
if($user_role['role_name'] == "Admin"){
?>

         <a href="create_doctors.php" class="main-btn">Add Doctor</a>
         <a href="create_user.php" class="main-btn">Add User</a>
<?php
}
?>

                    <a href="create_events.php" class="main-btn">Add Event</a>
                 
                    
                    <br>

<?php echo $message;?>
                    <h3 class="wow fadeInUp delay-0-8s">Event List</h3>
                
                    <table class="table table-hover" id="doctor_table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Event Date</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php

  $stmt = $connect->prepare(
                                "SELECT * FROM events");
                        $stmt->execute();
                        $details = $stmt->fetchAll();
                        foreach($details as $events_details)
                        {
?>
<tr>
    <td><?php echo "<img src='".$events_details['image']."' style='height:50px;width:50px;' class='rounded-circle'>"?></td>
    <td><?php echo $events_details['title']; ?></td>
    <td><?php echo $events_details['description']; ?></td>
    <td><?php echo $events_details['event_date']; ?></td>
    <td><?php echo $events_details['created_at']; ?></td>
    <td><?php echo $events_details['updated_at']; ?></td>
     <td>


<?php

if($user_role['role_name'] == "Admin"){
?>
      <a href="edit_event.php?id=<?php echo $events_details['id']?>" class="btn btn-success">Edit</a>
         <a href="delete_event.php?id=<?php echo $events_details['id']?>" class="btn btn-danger" onclick="return checkDelete()">Delete</a>
<?php
}

?>

         
     </td>


</tr>


<?php
                        }
?>
       
    </tbody>
  </table>


  <h5><a href="doctors_list.php">Click to the  Doctor List</a></h5>

                    <!-- <div class="banner-shape-2 shape">
							<img src="assets/images/banner/banner-shape-2.png" alt="Image">
						</div> -->
                </div>
            </div>


        </div>
        </div>
        <!-- <div class="banner-shape-1 shape">
			<img src="assets/images/banner/banner-shape-1.png" alt="Image">
		</div> -->
    </section>
    <!--=== End Banner Section ===-->

    <!-- Footer Start -->
  

    <!-- Footer End -->
    <!--=== Start Copy Right Section ===-->
    
    <!--=== End Copy Right Section ===-->



    <!--=== JS Link ===-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/carousel-thumbs.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}

let table = new DataTable('#doctor_table');
</script>
</body>

</html>