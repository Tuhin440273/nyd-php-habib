<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="asset/boostap/bootstrap-5.3.8-dist/css/bootstrap.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="asset/boostap/css/all.css">
</head>
<body>

  <div class="nav navbar navbar-expand navbar-dark bg-dark">
    <div class="div container">
        <a href=""class=" navbar-brand">NIYD</a>
        <div class="ul navbar-nav"> 
            <li><a href=""class="nav-link">About</a></li>
            <li><a href=""class="nav-link">Homr</a></li>
            <li><a href=""class="nav-link">Contact</a></li>
        </div>
    </div>
  </div>

   <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class=" table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobail</th>
                    </tr>
                    <?php foreach($students as $student){?>
                    <tr>
                        <th><?php echo $student['name']; ?></th>
                        <th><?php echo $student['email']; ?></th>
                        <th><?php echo $student['mobile']; ?></th>

                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
   </section>
  
  <!-- Bootstrap JS -->
  <script src="asset/boostap/bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
</body>
</html>
