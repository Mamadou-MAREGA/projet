(function($){
	$('.add').click(function(event){
		event.preventDefault();
		//alert('hello');
		//Requete ajax

		$.get($(this).attr('href'),{},function(data){

			if(data.error){

				alert(data.message);

			}else{

				if(confirm('Voulez vous consulter votre panier ?')) {

					location.href = 'panierForm.php';
					
				}else{

					location.href = 'index.php';
				}
			}
		},'json');//Format de récupération des données

		return false;
	});

})(jQuery);