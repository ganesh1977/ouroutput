&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
<br>
&lt;script type="text/javascript">
<br>
$(document).ready(function()
{
<br>
	$('img').on('dragstart', function(event) { event.preventDefault(); });
<br>
});
&lt;/script>
<br>
&lt;img src="images/one.jpg" width="100" height="100" draggable="false">