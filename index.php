<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>


<?php include_once './parts/header.php';?>


    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-1 mx-auto my-5">
          <img src="./images/thamar.jpg" alt="my-picture" class="img-thumbnail">
        <h1 class="display-4 fw-normal">أربح مع ثامر</h1>
        <p class="lead fw-normal">باقي على فتح التسجيل</p>
        <h3 class="lead fw-normal" id="countdown"></h3>
        <p class="lead fw-normal">سجل على سحب مجاني على نسخة من البرنامج</p>
        </div>

        <div class="container">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر</li>
            <li class="list-group-item">بث مباشر لمدة ساعة</li>
            <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل</li>
            <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد</li>
            <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
          </ul>
        </div>
    </div>

    


    <div class="container">
        <div class="position-relative  text-center">
            <div class="col-md-5 p-lg-1 mx-auto my-5">
            <h3>أرجاء ادخل المعلومات</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="firstName" class="form-label">الأسم الأول</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value=<?php echo $firstName; ?>>
                <div class="form-text"><?php echo $errors['firstnameerror']; ?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الأسم الأخير</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value=<?php echo $lastName; ?>>
                <div class="form-text"><?php echo $errors['lastnameerror']; ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="text" name="email" class="form-control" id="email" value=<?php echo $email  ?>>
                <div class="form-text"><?php echo $errors['emailerror']; ?></div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">أرسل المعلومات</button>
            </form>
            </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto my-5">
            <button id="winner" type="button" class="btn btn-primary">أختار الرابح</button>
        </div>
    </div>

    <div id="loaderwrap">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalWindow" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $user) : ?>
           <h3 class="display-3 text-center"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h3>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
    
<?php include_once './parts/footer.php';?>