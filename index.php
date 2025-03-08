<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<?php include_once './parts/header.php'; ?>

<div class="container-fluid">

   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-info rounded shadow">
      <div class="col-md-6 p-lg-5 mx-auto my-5 text-white">
         <img src="./images/logo.jpg" width="200" height="200"/>
         <h1 class="display-3 fw-bold ">اربح مع هزاع</h1>
         <p class="lead fw-normal">باقي على فتح التسجيل</p>
         <h3 id="demo"></h3>
         <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج </p>
         <a class="btn btn-outline-light" href="#">comming soon</a>
      </div>
      <div class="text-right">
      <ul class="list-group list-group-flush my-style">
      <li class="list-group-item my-style"> تاريخ البث المباشر على صفحتى على الفيسبوك بالتاريخ المذكور اعلاه</li>
      <li class="list-group-item  my-style"> سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
      <li class="list-group-item my-style"> خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك
      </li>
      <li class="list-group-item my-style"> بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
      <li class="list-group-item my-style"> الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
   </ul>
      </div>
   </div>
 

   <form class="mt-5" action="index.php" method="POST">
      <h3 class="text-dark">الرجاء أدخل معلوماتك</h3>
      <hr />
      <div class="mb-3">
         <label for="firstName" class="form-label">الاسم الاول</label>
         <input type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>" class="form-control"
            aria-describedby="firstNameHelp">
         <div id="firstNameHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
      </div>

      <div class="mb-3">
         <label for="lastName" class="form-label">اسم العائلة</label>
         <input type="text" name="lastName" id="lastName" value="<?php echo $lastName ?>" class="form-control"
            aria-describedby="lastNameHelp">
         <div id="lastNameHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
      </div>
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
         <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>"
            aria-describedby="emailHelp">
         <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
      </div>
      <div class="text-center">
         <button type="submit" name="submit" class="btn btn-outline-dark">ارسال المعلومات</button>
      </div>

   </form>
   <div id="myContainer">
      <div id="myImage" >
         <img src="./images/loading.gif" />
      </div>
   </div>

   <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn btn-info my-5 px-5" id="btn-winner"> اختيار الرابح </button>
   </div>

   <div class="preload d-none"><img src="http://i.imgur.com/KUJoe.gif">
   </div>
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">

               <button id="modalHide" type="button" class="close" data-bs-dismiss="myModal" aria-bs-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               <h5 class="modal-title text-dark px-4 mx-auto" id="modelLabel">الرابح بهذه المسابقة</h5>
            </div>
            <div class="modal-body">
               <?php foreach ($users as $user): ?>
                  <p class="text-dark">
                     <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></p>
                  <p class="text-dark"><?php echo htmlspecialchars($user['email']); ?></p>
               <?php endforeach; ?>
            </div>

         </div>
      </div>
   </div>



   </table>

</div>

<?php include_once './parts/footer.php'; ?>
