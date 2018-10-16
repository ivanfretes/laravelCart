
/**
	Envia un formulario, mediante AJAX
*/
function sendForm(formIdentifier, urlAction = null, msg = null){
	let form = $(formIdentifier);
	let formData = formDataToJSON(form);
	
	if (null == urlAction)
		urlAction = form.attr('action');

	$.ajax({
		type: "POST",
		url: urlAction,
		data: formData, // serializes the form's elements.
		headers : {
			"content-type": "application/json",
			"accept": "application/json",
		},
		success: function(data){
			console.log(data); // show response from the php script.
			
			if (null == msg){
				alert(data.message);	
			}
			else {
				alert(msg)
			}
			
		},
		error : function(response, textStatus, errorThrown){
			console.error(response);
		}
	});	
}


/**
	Serializa y convierte los datos de un formulario a un JSON
	@return JSON;
*/
function formDataToJSON(form) {
	let obj = {};
	let formData = form.serialize();
	let formArray = formData.split("&");
	
	for	(inputData of formArray){
		let dataTmp = inputData.split('=');
		let dataValueTmp = dataTmp[1];// Value;
		if (dataValueTmp != null && dataValueTmp.trim() != ''){
			obj[dataTmp[0]] = dataValueTmp.replace('+',' ');
		}
	}
	return JSON.stringify(obj);
}


