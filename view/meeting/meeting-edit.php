<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

<ol class="breadcrumb d-flex align-items-center gap-3 pt-3">
  <li><a class="btn btn-primary link" href="?c=Meeting" role="button">Go back</a></li>
  <li class="active"><?php echo $alm->id != null ? 'Edit meeting of ' . $alm->first_name . ' ' . $alm->last_name : 'Add new meeting'; ?></li>
</ol>

<form id="frm-alumno" class="mb-5 pb-5 pt-3" action="?c=Meeting&a=Guardar" method="post" enctype="multipart/form-data" >
<h1 class="page-header pb-2">
    <?php echo $alm->id != null ? 'Form of ' . $alm->first_name . ' ' .$alm->last_name : 'Form new meeting'; ?>
    </h1>
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label class="form-label pt-2">First Name</label>
        <input type="text" name="first_name" value="<?php echo $alm->first_name; ?>" class="form-control" placeholder="Sam Bennet" required />
    </div>
    
    <div class="form-group">
        <label class="form-label pt-2">Last name</label>
        <input type="text" name="last_name" value="<?php echo $alm->last_name; ?>" class="form-control" placeholder="bucket fred" required/>
    </div>
    
    <div class="form-group">
        <label class="form-label pt-2">Email</label>
        <input type="email" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="example@email.com" required/>
    </div>
    
    <div class="form-group">
        <label class="form-label pt-2">Phone number</label>
        <input type="text" name="phone_number" value="<?php echo $alm->phone_number; ?>" class="form-control" placeholder="+573206523231" required/>
    </div>

    <div class="form-group">
        <label class="form-label pt-2">Subject</label>
        <input type="text" name="topic" value="<?php echo $alm->topic; ?>" class="form-control" placeholder="Consulting" required/>
    </div>
    
    <div class="form-group">
        <label class="form-label pt-2">Date meeting</label>
        <input type="datetime-local" name="date" value="<?php echo $alm->date; ?>" class="form-control" required/>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success me-3">Save</button>
        <?php echo $alm->id != null ? '' : '<input type="reset" value="Reset" class="btn btn-secondary"/>'; ?>
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>