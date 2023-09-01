
<?php
$logo_add = App\Models\LogoManager::where('title','logo')->first();
// $getCopyrights = App\Models\Config::where('email_type','Copyrights')->get();
$email = Session::get('groom_email');
$name = Session::get('groom_first_name');
$type = Session::get('type');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('storage/uploads/logo/'.$logo_add->image)); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('storage/uploads/logo/'.$logo_add->image)); ?>" type="image/x-icon">
    <title>South-Dakota-Bride</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style type="text/css">
      body{
      width: 650px;
      font-family: work-Sans, sans-serif;
      background-color: #f6f7fb;
      display: block;
      }
      a{
      text-decoration: none;
      }
      span {
      font-size: 14px;
      }
      p {
          font-size: 13px;
         line-height: 1.7;
         letter-spacing: 0.7px;
         margin-top: 0;
      }
      .text-center{
      text-align: center
      }
    </style>
  </head>

  <body style="margin: 30px auto;">
    <table style="width: 100%">
      <tbody>
        <tr>
          <td>
            <table style="background-color: #f6f7fb; width: 100%">
              <tbody>
                <tr>
                  <td>
                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                      <tbody>
                        <tr>
                          <td><img src="<?php echo e(asset('storage/uploads/logo/'.$logo_add->image)); ?>" alt=""></td>
                        </tr>
                      </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
                      <tbody>
                        <tr>
                            <td style="width: 650px; margin: 0 auto; margin-bottom: 30px"><img src="<?php echo e(asset('storage/uploads/logo/'.$logo_add->image)); ?>" alt=""></td>
                          </tr>
                          <tr>
                            <td style="padding: 30px">
                              <h3>Contact Details </h3>
                              <p>Name:   <?php echo e($data['name']); ?></p>
                              <p>Email:  <?php echo e($data['email']); ?></p>
                              <p>Phone:  <?php echo e($data['phone_number']); ?></p>
                              <p>Message: <?php echo e($data['message']); ?></p>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; margin-top: 30px">
                      <tbody>
                        <tr style="text-align: center">
                          <td>

                            <p style="color: #999; margin-bottom: 0"><span>Design & Development by
                                <a href="https://designprosusa.com/" target="_blank"> Design Pros
                                    USA</a></span>
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/Mail/SignUp_mail.blade.php ENDPATH**/ ?>