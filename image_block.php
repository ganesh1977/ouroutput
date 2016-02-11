<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('img').on('dragstart', function(event) { event.preventDefault(); });
});
</script>
<img src="images/one.jpg" width="100" height="100" draggable="false">
