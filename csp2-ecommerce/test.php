<?php

$page_title = 'About Us';

include 'partials/header.php';

?>
</head>
<body>

	<?php

	//include 'partials/navigation.php';
	//include 'partials/searchbox.php';

	?>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- <script type="text/javascript">
  $(document).ready(function(){
      $(".btn").click(function(){
          $("#myModal").modal('show');
      });
  });
</script>
 -->


<?php

include 'partials/foot.php'

?>