
  <body class="" >
    <a class="btn btn-primary link my-5" href="?c=Meeting&a=index" role="button">Go back</a>
    <table class="table table-striped mb-5 pb-5 " style="overflow-x:auto;">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>topic</th>
                <th>date</th>
                <th>delete date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model-> DeleteMeeting() as $delete): ?>
            <tr>
                <td><?php echo $delete->id; ?></td>
                <td><?php echo $delete->name; ?></td>
                <td><?php echo $delete->topic; ?></td>
                <td><?php echo $delete->date;?></td>
                <td><?php echo $delete->delete_date; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> 
  </body>
