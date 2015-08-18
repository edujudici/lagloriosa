<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>croppic</title>

    <!-- estilo crop image -->
    {{ HTML::style('comum/assets/css/main.css'); }}
    {{ HTML::style('comum/assets/css/croppic.css'); }}

  </head>

  <body>
		
	<div id="cropContainerModal" style="width: 370px"></div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js'); }}
    {{ HTML::script('comum/assets/js/croppic.min.js'); }}
    <script>
		
		var croppicContainerModalOptions = {
				uploadUrl:'{{URL::to("/save-to-file")}}',
				cropUrl:'{{URL::to("/crop-to-file")}}',
				modal:true,
				imgEyecandyOpacity:0.4,
				height: 200,
				width: 370,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
		}
		var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);
		
	</script>
  </body>
</html>
