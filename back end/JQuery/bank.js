$(document).ready(function(){

	$("#cancel").on("click", function(){
		location="sell&buy.php";
	});

	$("#create").on("click", function(e){
		
		if($("#payment_price").val() == "")
		{
			e.preventDefault();
			alert("لطفاً مبلغ را وارد نمایید!");
		}
		else if ($("#date").val() == "")
		{
			e.preventDefault();
			alert("لطفاً تاریخ را وارد نمایید!");
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#date").val();

	//if format of date is valid it will check the month and day part to be valid not lessthan one or morethan 12 for month and 31 for day
		if(!checkDate.match(regEx))
		{
			alert("فورمت تاریخ اشتباه است!");
			e.preventDefault();
		}
		else
		{
			var arrayDate = checkDate.split(/[\/-]+/);
			if(arrayDate[1] <= 0 || arrayDate[1] > 12)
			{
				alert("قسمت ماه در تاریخ اشتباه است!");
				e.preventDefault();
			}
			else if(arrayDate[2] <= 0 || arrayDate[2] > 31)
			{
				alert("قسمت روز در تاریخ اشتباه است!");
				e.preventDefault();
			}
		}
	});
})