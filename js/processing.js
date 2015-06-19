/**
* ----------------------------------------------------------------------------------------------------
* All form interactions
* ----------------------------------------------------------------------------------------------------
*/

$(document).ready(function(){

	var thx_remodal = $.remodal.lookup[$('[data-remodal-id=thxModal]').data('remodal')];

	var metrikaGoalList = {   //[form_id] : [metrika_mark]
		offer_form: 'OFFER',
		callback_form: "CALLBACK",
	};


	$("form").submit(function(e){

		var activeForm = $(this);

		e.preventDefault();

		$.post("processing.php", activeForm.serialize(), function(data){


			if(data == "success") { //При возврате от сервера ответа "success"
			    thx_remodal.open();
			    var inst = $.remodal.lookup[$('.remodal').data('remodal')];
			    inst.close();
			} else{
				console.log("Произошла ошибка на сервере!");
				console.log(data);
			}
				// yaCounter25566455.reachGoal('total');

				// for(var key in metrikaGoalList){ //Перебор свойств хэша ключей метрики
				// 	if(activeFormId == key) { //При совпадении id submit формы с ключом хэша целей метрики
				// 		yaCounter25566455.reachGoal(metrikaGoalList[key]);
				// 	}
				// }
		});
	});
});

