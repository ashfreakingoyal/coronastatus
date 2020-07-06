<?php
    
    include "logicc.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Tracker(india)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylec.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>

  <div class="container-fluid bg-warning p-5 text-center my-3">
  <img src="covid.png" alt="COVID RISK RESULT" width="70%">
       <h5 class="text-muted">An opensource project to keep track of all the Covid-19 cases around World</h5>
  
  </div>

   <div class="container my-5">
       <div class="row text-center">
           <div class="col-4  text-warning">
           <div class="h-100 alert-warning shadow rounded-lg py-4">
               <h5>Confirmed</h5>
               <?php  echo $data['cases_time_series'][$days_count]['totalconfirmed']; ?>
               <small class="text-warning pl-3"><i class="fas fa-arrow-up"></i><?php  echo $data['cases_time_series'][$days_count]['dailyconfirmed']; ?></small>
                    
           </div>
           </div>
           <div class="col-4 text-success">
           <div class="h-100 alert-success shadow rounded-lg py-4">
               <h5>Recovered</h5>
               <?php  echo $data['cases_time_series'][$days_count]['totalrecovered']; ?>
               <small class="text-success pl-3"><i class="fas fa-arrow-up"></i><?php  echo $data['cases_time_series'][$days_count]['dailyrecovered']; ?></small>
                    
           </div>
           </div>
           <div class="col-4 text-danger">
           <div class="h-100 alert-danger shadow rounded-lg py-4">
               <h5>Deceased</h5>
               <?php  echo $data['cases_time_series'][$days_count]['totaldeceased']; ?>
               <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php  echo $data['cases_time_series'][$days_count]['dailydeceased']; ?></small>
                    
           </div>
           </div>
       </div>
   </div>
  
   <div class="container bg-light p-3 my-3 text-center">
       <h5 class="text-info">"Follow the guidelines issued by the Government and respect the frontline soldiers"</h5>
       <p class="text-muted">Stay indoors stay safe</p>

   </div>

  

   <div class="table-responsive">
  <table class="table">
     <thead class="thead-dark">
        <tr>
           <th scope="col">States</th>
           <th scope="col">Confirmed</th>
           <th scope="col">Active</th>
           <th scope="col">Recovered</th>
           <th scope="col">Deceased</th>
        </tr>
     </thead>
     <tbody>
         <?php
         for($i=1;$i<=$length_count;$i++){
            ?>
            <tr>
            <th><?php echo $data['statewise'][$i]['state'];?></th>
            <td>
            <?php echo $data['statewise'][$i]['confirmed'];?>
            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i>
            <?php echo $dat['states_daily'][$cur_confirmed][strtolower($data['statewise'][$i]['statecode'])];?>
            </small>
            </td>
            <td>
            <?php echo $data['statewise'][$i]['active'];?>
            
            </td>
            <td>
            <?php echo $data['statewise'][$i]['recovered'];?>
            <small class="text-success pl-3"><i class="fas fa-arrow-up"></i>
            <?php echo $dat['states_daily'][$cur_recovered][strtolower($data['statewise'][$i]['statecode'])];?>
            </small>
            </td>
            <td>
            <?php echo $data['statewise'][$i]['deaths'];?>
            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i>
            <?php echo $dat['states_daily'][$cur_deceased][strtolower($data['statewise'][$i]['statecode'])];?>
            </small>
            </td>
            </tr>
        <?php } ?>
         
         
     </tbody>
  </table>
  </div>
  </div>
  



      <footer class="footer mt-auto py-3 bg-light">
          <div class="container text-center">
              <span class="text-muted">copyright &copy;2020, <a href="index.php">Ashwani</a></span>


          </div>
      </footer>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
</body>
</html>