<h2>Manage Service</h2>
<div class="text-right">
  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addService">Add service</a>
</div>  
<table class="table">
   <thead>
     <tr>
       <th>product name</th>
       <th>return id</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>John</td>
       <td>Doe</td>
       <td>
         <a href="#" data-toggle="modal" data-target="#addService"> Edit </a>
         <a href="#"> Delete </a>
       </td>
     </tr>
   </tbody>
 </table>
 <div class="row mb-4">
   <div class="col-md-1 text-left">
       <a href="?selected=gallery" class="btn btn-primary">next</a>
   </div>
   <div class="col-md-11 text-right">
       <a href="add_vcard_1.php" class="btn btn-primary">save</a>
   </div>
 </div>
 
 
<!-- Modal -->
<div class="modal fade" id="addService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Product Name</label>
    <input type="text" class="form-control" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">return id</label>
    <input type="text" class="form-control" placeholder="Another input">
  </div>
</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>