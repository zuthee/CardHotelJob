<?php 
    $url = 'https://www.hoteljob.in.th/mobile/get_postjob/trainee';
    $content = file_get_contents($url);
    $content = json_decode($content);
    $jobDetails = $content->result[0]; 
?>

<main class="col-lg-8 col-md-6 container my-4">
    <section class="mx-4 mb-4">
        <div class="text-center">
            <img src="<?php echo $jobDetails->company_logo; ?>" class="img-fluid mb-3" width="50%" height="50%" alt="<?php echo $jobDetails->company_name; ?> logo">
            <h2><?php echo $jobDetails->postjob_title; ?></h2>
            <h5 style="color: #F26D28;"><?php echo $jobDetails->company_name; ?></h5>
        </div>
        <ul class="list-unstyled">
            <li><i class="bi bi-geo-alt me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->province; ?>, <?php echo $jobDetails->amphur; ?></span></li>
            <li><i class="bi bi-coin me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->salary; ?> THB</span></li>
            <li><i class="bi bi-clock me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->job_type; ?></span></li>
            <li><i class="bi bi-briefcase me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;">ฝ่ายทรัพยากรบุคคล</span></li>
            <li><i class="bi bi-clipboard-data me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->experience ? $jobDetails->experience . ' ปี' : 'ไม่มีประสบการณ์'; ?></span></li>
            <li><i class="bi bi-people me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;">1 อัตรา</span></li>
        </ul>
    </section>

    <hr>

    <section class="mx-4 mb-4">
        <h3 style="color: #228CC1;">รายละเอียดตำแหน่ง</h3>
        <p class="fw-bold fs-5">Position Details</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-book me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;">ระดับปริญญาตรี</span></li>
            <li><i class="bi bi-gender-ambiguous me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->age; ?></span></li>
            <li><i class="bi bi-credit-card-2-front me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;"><?php echo $jobDetails->graduate; ?></span></li>
            <li><i class="bi bi-mortarboard me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;">รับพิจารณานักศึกษาจบใหม่</span></li>
            <li><i class="bi bi-translate me-4 fs-3" style="color: #228CC1;"></i><span style="font-size: 1.2rem;">ไม่รับพิจารณาชาวต่างชาติ</span></li>
        </ul>
    </section>

    <section class="mx-4 mb-4">
        <h3 style="color: #228CC1;">รายละเอียดงาน</h3>
        <p class="fw-bold fs-5">Job Details</p>
        <ul class="fs-5">
            <li><?php echo $jobDetails->job_property; ?></li>
        </ul>
    </section>

    <section class="mx-4 mb-4">
        <h3 style="color: #228CC1;">สวัสดิการ</h3>
        <p class="fw-bold fs-5">Welfare</p>
        <ul class="fs-5">
            <li><?php echo $jobDetails->welfare; ?></li>
        </ul>
    </section>

    <section class="mx-4 mb-4">
        <h3 style="color: #228CC1;">ข้อมูลการติดต่อ</h3>
        <p class="fw-bold fs-5">Contact</p>
        <ul class="list-unstyled fs-5">
            <li>Orapin Sujittosakul (HR Director)</li>
            <li>285 M.3 Najomtien Sattahip, Chonburi 20250</li>
            <li>เว็บไซต์: <a href="https://www.hoteljob.in.th">www.hoteljob.in.th</a></li>
        </ul>
        <button class="btn btn-primary">สมัครงาน</button>
    </section>
</main>
