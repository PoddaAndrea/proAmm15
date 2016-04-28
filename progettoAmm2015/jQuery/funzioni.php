<script>			

	//la funzione permette una transizione (passaggio da una condizione ad un altra) 
	//attivabile tramite il click del mouse (.click(function()...)	
	$(document).ready(function(){

		$(".log").click(function(){
			$("#contentAdozioni").hide("slow"); //la funzione hide, nasconde il contenuto
			$("#contentDonazioni").hide("slow");
			$("#contentReg").hide("slow");
			$("#contentHome").show("slow");//la funzione show, mostra il contenuto
			$("#mask").fadeIn();//la funzione fadeIn, mostra il contenuto (transizione diversa da show)
			$(".popupInfo").fadeIn();
			
			
		});

		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)

		$(".close").click(function(){

			$(".popupInfo").fadeOut();//la funzione fadeOut, nasconde il contenuto (transizione diversa da hide)
			$("#mask").fadeOut();
			$("#contentReg").hide("slow");
			$("#contentHome").show("slow");//la funzione show, mostra il contenuto
			
			
		});

		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)

		$(".close_error").click(function(){

			$("#error").fadeOut();//la funzione fadeOut, nasconde il contenuto (transizione diversa da hide)
			$("#mask_3").fadeOut();
			$(".popupInfo").fadeIn();//la funzione fadeIn, mostra il contenuto (transizione diversa da show)
			$("#mask").fadeIn();
			
			
		});

		
		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)		
	
		$(".inv").click(function(){
				
			$("#contentAdozioni").hide("slow");//la funzione hide, nasconde il contenuto
			$("#contentDonazioni").hide("slow");
			$("#contentReg").hide("slow");
			$("#contentHome").show("slow");//la funzione show, mostra il contenuto
			$("#mask").fadeIn();
			$(".popupInfo").fadeIn();//la funzione fadeIn, mostra il contenuto (transizione diversa da show)


				
			});
		
		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)

		
		$(".ado").click(function(){
			$("#contentReg").hide("fast");//la funzione hide, nasconde il contenuto
			$("#contentDonazioni").hide("fast");
			$("#contentHome").hide("fast");
			$("#contentAdozioni").show("slow");//la funzione show, mostra il contenuto
			
		});

		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)
		
				
		$(".hom").click(function(){
			$("#contentReg").hide("fast");//la funzione hide, nasconde il contenuto
			$("#contentDonazioni").hide("fast");
			$("#contentAdozioni").hide("fast");
			$("#contentHome").show("slow");//la funzione show, mostra il contenuto
			
		});
		

		//la funzione permette una transizione (passaggio da una condizione ad un altra) 
		//attivabile tramite il click del mouse (.click(function()...)		

		$(".don").click(function(){
			$("#contentReg").hide("fast");//la funzione hide, nasconde il contenuto
			$("#contentAdozioni").hide("fast");
			$("#contentHome").hide("fast");
			$("#contentDonazioni").show("slow");//la funzione show, mostra il contenuto
			
		});


		
		
	});
	
</script>