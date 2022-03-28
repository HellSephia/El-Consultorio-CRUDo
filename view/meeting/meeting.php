<h1 class="page-header  my-3">Meetings</h1>

<div class="well well-sm text-right mb-5">
    <a class="btn btn-primary" href="?c=Meeting&a=Crud">New meeting</a>
</div>


<div class="container mb-5">
  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 g-4">

    <?php foreach($this->model->Listar() as $row): ?>
    <div class="col">
      <div class="card mb-5">
        <div class="color rounded-3 w-100 bg-success h-auto"><span class="text-success">color div</span></div>
        <h2 class="text-center pt-2">Assigned date meeting <span> <?php echo $row->date;?></span></h2>
        <div class="card-body">
          <h3 class="card-title"><?php echo $row->first_name . ' ' . $row->last_name; ?></h3>
          <div class="text-cont d-flex flex-column gap-2">
            <span> <strong>-Email:</strong> <?php echo $row->email;?></span>
            <span> <strong>-Phone:</strong> <?php echo $row->phone_number;?></span>
            <span> <strong>-Subject: </strong> <?php echo $row->topic;?></span>
          </div>

          <div class="icons d-flex justify-content-end gap-5 pe-3 pt-3">
            <button type="button" class="btn btn-success">
                <a class="link-light text-decoration-none" href="?c=Meeting&a=Crud&id=<?php echo $row->id; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            </button>
            <button type="button" class="btn btn-danger">
              <a class="link-light text-decoration-none" onclick="javascript:return confirm('Are you sure you want to delete this record?');" href="?c=Meeting&a=Eliminar&id=<?php echo $row->id; ?>"><i class="fa-solid fa-trash"></i></a>
            </button>

          </div>

        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
