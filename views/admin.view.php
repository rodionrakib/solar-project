<!-- <ul>
<?php foreach ($enqueries as $enq) :?>
	<article>
		<h1>
			<?php echo($enq['name']) ?>
		</h1>
		<div class="body">
			
		</div>
	</article>
<?php endforeach ;?>
</ul> -->





    <h1>Admin Area</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th><i class="fa fa-user"></i>Email</th>
                <th><i class="fa fa-calendar"></i> Contact</th>
                <th><i class="fa fa-cogs"></i>action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($enqueries as $enq) :?>
            <tr>
                <td><?php echo $enq['name'] ?></td>
                <td><?php echo $enq['email'] ?></td>
                <td><?php echo $enq['location'] ?></td>
                <td>
                    <div class="item-actions">
                        <a href="#" class="btn btn-sm btn-default">
                           show
                        </a>

                       
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i> edit
                        </a>
                       
                    </div>
                </td>
            </tr>
            <?php endforeach ;?>
      
        </tbody>
    </table>
