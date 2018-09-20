<?php include_once ('navigation.php');?>
<div class="panel panel-success">
      <div class="panel-heading">View Clients</div>
       <div class="panel-body">

 
      <div class="container">
  <h2>Our Clients</h2>
                                                                            

</div>     
 
<div>
    
    <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-primary">
                      
                        <th>Client id</th>
                        <th>First Name</th>
                        <th>Lastname</th>
                        <th>address</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
    
  <?php for ($i = 0; $i < count($posts); $i++) { ?>
                    <tr>
                        <td><?php echo ($i+1); ?></td>
                        
                        <td><?php echo $posts[$i]->first_name; ?></td>
                        <td><?php echo $posts[$i]->last_name; ?></td>
                        <td><?php echo $posts[$i]->address; ?></td>
                        <td><?php echo $posts[$i]->mobile; ?></td>
                        <td><?php echo $posts[$i]->email; ?></td>
                        <td>
                            <a href="<?php echo base_url() . "welcome/delete_client/". $posts[$i]->Client_id; ?>"><button class="btn btn-sm btn-danger">Delete</button></a>
                            <a href="<?php echo base_url() . "welcome/update/". $posts[$i]->Client_id; ?>"><button class="btn btn-sm btn-primary">Update</button></a>
                        </td>
                    </tr>
                     <?php } ?>
                </tbody>
    </table>
</div>




