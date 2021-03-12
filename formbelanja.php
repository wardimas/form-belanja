<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>
    <div class="container">
    <form class="form-horizontal p-5 shadow"style="background-color:#f1f2f6;" method="POST" action="formbelanja.php">
    
    
    <div class="text-center">
        <h3 class="mb-5 text-primary text-mg">Form Belanja</h3>
      </div>


      <div class="form-group row">
          <label for="Namacustomer" class="col-sm-3 col-form-label"><b>Customer</b></label>
          <div class="col-sm-7">
            <input type="text" class="form-control"name="Namacustomer" required>
          </div>
        </div>
        <br>
    
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>Pilihan Product</b></label>
          <div class="col-sm-5">
            <input type="radio" name="Product"value="TV" required>TV 
            <input type="radio" name="Product"value="Kulkas" required>Kulkas 
            <input type="radio" name="Product"value="mesin cuci" required>Mesin Cuci
          </div>
        </div>
        <br>
  
        <div class="form-group row">
          <label for="Alamat" class="col-sm-3 col-form-label"><b>Alamat</b></label>
          <div class="col-sm-5">
          <textarea type="text" name="Alamat"></textarea><br>
          </div>
        </div>
        <br>

        <div class="form-group row">
          <label for="Jumlah" class="col-sm-3 col-form-label"><b>Jumlah</b></label>
          <div class="col-sm-5">
          <input type="number" name="Jumlah"value="" required>
          </div>
        </div>
        <br>

        <div class="text-center">
            <button class="btn btn-primary" type="submit" name="proses">Kirim</button>
         </div>
        </form>
    </div>
    
    </form>
    <?php
    $proses= $_POST['proses'];
    $customer= $_POST['Namacustomer'];
    $product= $_POST['Product'];
    $jumlah= $_POST['Jumlah'];
    $alamat= $_POST['Alamat'];
    ?>
  
  <div>
  <div class="container bg-light mt-5 mb-5 p-5 shadow">
    <h1 class="animate__animated animate__flash animate__infinite	infinite animate__delay-4s	4s text-danger">HASILNYA!</h1>
      <br>
      <?php
    echo "</br>Nama customer : $customer 
          </br>Product : $product 
          </br>Jumlah : $jumlah
          </br>Alamat : $alamat"; 
         ?>


    <?php
        if($product == "TV"){
            echo "</br>Total Harga : ". 4200000 * $jumlah;
        }
        else if($product == "Kulkas"){
            echo "</br>Total Harga : ". 3100000 * $jumlah;
        }
        else {
            echo "</br>Total Harga : ". 3800000 * $jumlah;
        }
      ?>
  </body>
</html>