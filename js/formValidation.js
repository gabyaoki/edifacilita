function validateForm()
{
	bSubmit = true;
	arrReqFields = document.getElementsByClassName("required");
	
	for (var i=0;i<arrReqFields.length;i++)
	{
		el = arrReqFields[i];

		switch(el.tagName.toLowerCase())
		{
			case "div":
				var oneChecked = false;

				var arrFields = el.getElementsByTagName("input");

				for(var b=0; b<arrFields.length; b++)
				{
					var subEl = arrFields[b];
					if (subEl.checked)
					{
						oneChecked = true;
					}
				}

				showError(oneChecked, el);

				break;

			default:
				showError(el.value, el);
		}
	}
	return bSubmit;
}


function showError(checkState, thisEl)
{
	if(!checkState) {
		thisEl.className += " error";
		bSubmit = false;
		
	} else {
		thisEl.classList.remove("error");
	}
}