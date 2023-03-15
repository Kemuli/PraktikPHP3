<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   

    
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          
          <br>
          <br>

<div class="form"><form method="POST"  action="hasil.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required>
        <option value="ddp">DDP</option>
        <option value="pw">PW</option>
        <option value="bing">B.ing</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="number" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="number" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="tugas">Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="number" class="form-control" required>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


        </div>
    </div>
</div>
</div>




    
</body>
</html>