$(document).ready(function () {
    "use strict";
	
	var accounts = {
		
		MyUrl: "",
		
		initialize: function(){
		},
		
		validateAccount: function(usuario, senha){
			console.log(usuario);
			console.log(senha);
			console.log(document.URL)
			console.log(window.location.protocol) ;
			console.log(window.location.host) ;
			console.log(window.location.pathname) ;
			
			$.ajax({
				type: "POST",
				url: "",
				data: {"email":usuario, "senha":senha},
				success: function(data){
				alert('0');
				},
				error: function(data) {
				  alert('1');
				}
			});
			return false;
		}
	}
	
	accounts.initialize();
	
	$('#formAccounts').on('submit', function(e){
		accounts.validateAccount('mat','se')
		/*var dados = $( this ).serialize();
		var form = this;
		
		return false;*/
		e.preventDefault();
		return false;
	});
	
	
});