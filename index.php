<?php
$url = 'https://www.hoteljob.in.th/mobile/get_postjob/trainee';
$content = file_get_contents($url);
$content = json_decode($content);

if (!empty($content->result)) {
  $jobDetailsList = $content->result;
} else {
  $jobDetailsList = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HotelJob</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&display=swap');

    body {
      font-family: "Anuphan", serif;
    }
    .card {
  height: 100%;
  overflow: hidden; 
}

  </style>
</head>

<body>

  <main class="container my-4">
    <h1 class="h2 mb-4">งานโรงแรมนักศึกษาจบใหม่</h1>
    <div class="row">
      <?php foreach ($jobDetailsList as $jobDetails): ?>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3 " >
        <a href="https://www.hoteljob.in.th/position/<?php echo $jobDetails->postjob_id; ?>/" style="text-decoration: none;">

            <div class="card" style="border-radius: 20px;">
              <div class="card-body m-2">
                <img src="<?php echo $jobDetails->company_logo; ?>" width="145px" height="85px" alt="Company Logo">
                <h4 class="card-title mt-2"><?php echo $jobDetails->postjob_title; ?></h4>
                <h5 style="color: #F26D28;"><?php echo $jobDetails->company_name; ?></h5>
                <h5><i class="bi bi-geo-alt-fill fs-4 me-2" style="color: #F26D28;"></i><?php echo $jobDetails->province . ' ' . $jobDetails->amphur; ?></h5>
                <h5><i class="bi bi-coin fs-4 me-2" style="color: #228CC1;"></i><?php echo $jobDetails->salary == 0 ? "ไม่ระบุเงินเดือน" : $jobDetails->salary . ' THB'; ?></h5>
                <ul class="list-unstyled">
                  <?php
                  if (!empty($jobDetails->job_property)) {
                    $properties = explode("\n", $jobDetails->job_property); 
                    foreach ($properties as $property) {
                      echo "<li> " . htmlspecialchars($property) . "</li>";
                    }
                  }
                  ?>
                </ul>

                <button class="btn btn-primary w-40" style="border-radius: 50px;">สมัครงาน</button>
                <p class="text-muted mt-2">ประกาศเมื่อ <?php echo date('H:i', strtotime($jobDetails->update_date)); ?> น.</p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
