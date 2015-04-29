var Core = (function(Core){
	"use strict";

	Core = {

openModalWindow : function(){

				$('body').on('click.modal', '[data-modal-url]', function(event){

					$.arcticmodal({
						url : $(this).data('modal-url')
					});

					event.preventDefault();

				});

			},

	};

	
	return Core;

}(Core || {}));