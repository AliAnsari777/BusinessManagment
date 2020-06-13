$(document).ready(function(){
	$("#tabs").tabs();

	 // this part is for general costs validation and checking
	$("#costList").DataTable({
		"responsive" : true,
		"paging" : false,
		"info" : false,
		"scrollY" : "300px",
	});

	$("#exchange_rate").on("keyup", function(){
		var dollar = $("#afg").val() / $("#exchange_rate").val();
		$("#usd").val(dollar.toFixed(2));
	});

	$("#afg").on("keyup", function(){
		var dollar = $("#afg").val() / $("#exchange_rate").val();
		$("#usd").val(dollar.toFixed(2));
	});

	$("#generalCreate").on("click", function(e){
		if($("#note").val() == "" || $("#usd").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}
		else
		{
			var value = $("#usd").val();
			var check = /^[0-9\.]+$/.test(value);
			if(!check)
			{
				e.preventDefault();
				alert("لطفاً مقدار مصرف را درست درج نمایید!");
				return 0;
			}
		}

		if(parseInt($("#usd").val(),10) <= 0)
		{
			e.preventDefault();
			alert("مبلغ هزینه اشتابه است!");
			return 0;
		}
		else
		{
			e.preventDefault();
			$.ajax({
				type : "POST",
				url : "../back end/php/checkBank.php"
			}).done(function(data){
				if(data < parseInt($("#usd").val(),10))
				{
					alert("مقدار مصرف از موجودی بانک بیشتر است!");
					return 0;
				}
				else
					$("#general_cost").submit();
			});
		}
		
		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#date").val();
	//if format of date is valid it will check the month and day part to be valid not lessthan one or morethan 12 for month and 31 for day
		if(!checkDate.match(regEx))
		{
			alert("فورمت تاریخ اشتباه است!");
			e.preventDefault();
			return 0;
		}
		else
		{
			var arrayDate = checkDate.split(/[\/-]+/);
			if(arrayDate[1] <= 0 || arrayDate[1] > 12)
			{
				alert("قسمت ماه در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
			else if(arrayDate[2] <= 0 || arrayDate[2] > 31)
			{
				alert("قسمت روز در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
		}
	});

/**************************************************************************/
	// this part is for specific costs validation and checking
	$("#specificCost").DataTable({
		"responsive" : true,
		"paging" : false,
		"info" : false,
		"scrollY" : "250px",
	});

	$("#exchangeRate").on("keyup", function(){
		var dollar = $("#afgPrice").val() / $("#exchangeRate").val();
		$("#usdPrice").val(dollar.toFixed(2));
	});

	$("#afgPrice").on("keyup", function(){
		var dollar = $("#afgPrice").val() / $("#exchangeRate").val();
		$("#usdPrice").val(dollar.toFixed(2));
	});


	$("#specificCreate").on("click", function(e){
		if($("#costType").val() == "" || $("#usdPrice").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}
		else
		{
			var value = $("#usdPrice").val();
			var check = /^[0-9\.]+$/.test(value);
			if(!check)
			{
				e.preventDefault();
				alert("لطفاً مقدار مصرف را درست درج نمایید!");
				return 0;
			}
		}

		if(parseInt($("#usdPrice").val(),10) <= 0)
		{
			e.preventDefault();
			alert("مبلغ هزینه اشتابه است!");
			return 0;
		}
		else
		{
			e.preventDefault();
			var B_ID = $("#B_ID").val();
			$.ajax({
				type : "POST",
				url : "../back end/php/checkBargainsTotal.php",
				data : {id:B_ID}
			}).done(function(data){
				if(data < parseInt($("#usdPrice").val(),10))
				{
					alert("مقدار مصرف از موجموع خرید بیشتر است!");
					return 0;
				}
				else
					$("#specific_cost").submit();
			});
		}
		
		var data = $("#totalC").text();
		var total = data.split(" ");
		var usd = parseInt($("#usdPrice").val(),10);
		usd += parseInt(total[3]);
		$("#totalCost").val(usd);

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#specificDate").val();
	//if format of date is valid it will check the month and day part to be valid not lessthan one or morethan 12 for month and 31 for day
		if(!checkDate.match(regEx))
		{
			alert("فورمت تاریخ اشتباه است!");
			e.preventDefault();
			return 0;
		}
		else
		{
			var arrayDate = checkDate.split(/[\/-]+/);
			if(arrayDate[1] <= 0 || arrayDate[1] > 12)
			{
				alert("قسمت ماه در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
			else if(arrayDate[2] <= 0 || arrayDate[2] > 31)
			{
				alert("قسمت روز در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
		}
	});
})