<html>
    <head>
        <title>PDO</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
       body{
        background-image: url('i4.jpg');
}
.centered-form{
   margin-top: 60px;
   margin-right:50px;
}
.centered-form .panel{
   background: rgba(255, 255, 255, 0.8);
   box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    </style>
    <body>
    <div class="body">
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-2">
           <div class="panel panel-default">
              <div class="panel-heading">
                   <h3 class="panel-title">CRUD Operation Using PHP PDO</h3>
                   </div>
                   <div class="panel-body">
                   <form method="POST" action="PDOINS.php">            
                            <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" name="names" id="names" class="form-control input-sm" placeholder="Name" required="">
                      </div>
                      <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                      </div>
                      <div class="form-group">
                         <label for="contactno">Contact No</label>
                         <input type="text" name="contactno" id="contactno" class="form-control input-sm" placeholder="Contact No" required="" maxlength="10">
                      </div>
                      <div class="form-group">
                         <label for="name">Gender</label>
                         <input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female
                      </div>
                      <div class="form-group">
                         <label for="qualification">Qualification</label>
                         <select name="qualification" id="qualification" class="form-control input-sm" placeholder="Qualification" required="">
                            <option value="NA">--select--</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="Graduation ">Graduation</option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label for="name">Adress</label>
                         <textarea name="adress" id="adress" class="form-control input-sm" required=""></textarea>
                      </div>
                               <input type="submit" name="submit" value="submit" class="btn btn-info btn-block">
                   
                   </form>
                </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</body>
</html>