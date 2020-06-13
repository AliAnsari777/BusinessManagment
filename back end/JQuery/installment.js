$(document).ready(function(){

 	$("#tabs").tabs();

 	// this fucntion is for selecting all installments from one customer according to sell or buy
 	function InstallmentList(customerName, type, displayPart)
 	{
 		var id = $(customerName).val();
		var tradeType = type;
		// this part will select the text inside the option element and display it in print form
		var name = $(customerName + " option[value=" + id + "]").text();
		var date = $("#installment_date").val();

		var selectBargain = $.ajax({
			type:"POST",
			url: "../back end/php/installmentList.php",
			data:{value:id, sellOrBuy:tradeType}
		});

		selectBargain.done(function(data){
			$(displayPart).html(data);
			$(".design:odd").css("background-color", "#e1eefb" );
			$(".design:even").css("background-color", "#bed3e4" );
			if (type == 'پرداخت')
			{
				var footer = $("#footer").text();
				var values = footer.split(" ");
				$("#total_price").val(values[5]);
				$("#payed_price").val(values[13]);
				$("#reminder_price").val(values[21]);
				$("#customer").val(name);
				$("#sign").val(name);
				$("#date").val(date);
				$("#total_trade").val(values[21]);
			}
			else
			{
				var footer = $("#sell_footer").text();
				var values = footer.split(" ");
				$("#sell_total_price").val(values[5]);
				$("#sell_payed_price").val(values[13]);
				$("#sell_reminder_price").val(values[21]);
				$("#sell_customer").val(name);
				$("#sell_sign").val(name);
				$("#sell_date").val(date);
				$("#sell_total_trade").val(values[21]);
			}
		});
		
 	}

	$("#customer_name4pay").on("change", function(){
		InstallmentList('#customer_name4pay', 'پرداخت','#payInstallment');
	});

	$("#payment_price").on("keyup", function(){
		var pay = $("#payment_price").val();
		var calculate = $("#reminder_price").val() - $("#payment_price").val();

		$("#payment").val(pay);
		$("#reminder").val(calculate);
	});

	$("#print").on("click", function(){
		$(".print").print({
			stylesheet : "print.css",
			append : $(".print"),
		});		
	});



	$("#customer_name4recieve").on("click", function(){
		InstallmentList('#customer_name4recieve', 'دریافت','#recieveInstallment');
	});

	$("#sell_payment_price").on("keyup", function(){
		var pay = $("#sell_payment_price").val();
		var calculate = $("#sell_reminder_price").val() - $("#sell_payment_price").val();

		$("#sell_payment").val(pay);
		$("#sell_reminder").val(calculate);
	});

	$("#sell_print").on("click", function(){
		$(".sell_print").print({
			stylesheet : "../print2.css",
			append : $(".sell_print"),
		});		
	});

	$("#create").on("click", function(e){
		
		if($("#customer_name").val() == "" || $("#payment_price").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}

		var value = $("#payment_price").val();
		var check = /^[0-9]+$/.test(value);
		if(!check)
		{
			e.preventDefault();
			alert("لطفاً مبلغ پرداختی را درست درج نمایید!");
			return 0;
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#installment_date").val();

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

		if (parseInt($("#payment_price").val(),10) > parseInt($("#reminder_price").val(),10))
		{
			e.preventDefault();
			alert("مبلغ پرداختی از مبلغ باقی داری بیشتر است!!!");
			return 0;
		}
		else if($("#payment_price").val() <= 0)
		{
			e.preventDefault();
			alert("مبلغ پرداختی اشتباه است!!!");
		}
	});

	$("#sell_create").on("click", function(e){
		
		if($("#sell_customer_name").val() == "" || $("#sell_payment_price").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}

		var value = $("#sell_payment_price").val();
		var check = /^[0-9]+$/.test(value);
		if(!check)
		{
			e.preventDefault();
			alert("لطفاً مبلغ پرداختی را درست درج نمایید!");
			return 0;
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#sell_installment_date").val();

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

		if (parseInt($("#sell_payment_price").val(),10) > parseInt($("#sell_reminder_price").val(),10))
		{
			e.preventDefault();
			alert("مبلغ پرداختی از مبلغ باقی داری بیشتر است!!!");
			return 0;
		}
		else if($("#sell_payment_price").val() <= 0)
		{
			e.preventDefault();
			alert("مبلغ پرداختی اشتباه است!!!");
		}
	});

	$("#bank_create").on("click", function(e){
		
		if($("#bank_payment_price").val() == "")
		{
			e.preventDefault();
			alert("لطفاً مبلغ را وارد نمایید!");
			return 0;
		}
		else if ($("#bank_installment_date").val() == "")
		{
			e.preventDefault();
			alert("لطفاً تاریخ را وارد نمایید!");
			return 0;
		}

		var value = $("#bank_payment_price").val();
		var check = /^[0-9]+$/.test(value);
		if(!check)
		{
			e.preventDefault();
			alert("لطفاً مبلغ را درست درج نمایید!");
			return 0;
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#bank_installment_date").val();

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

		if($("#bank_payment_price").val() <= 0)
		{
			e.preventDefault();
			alert("مبلغ اشتباه است!!!");
			return 0;
		}
	});


	$("#update").on("click", function(e){
		if($("#payment_amount").val() == "" || $("#payment_date").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}

		var value = $("#payment_amount").val();
		var check = /^[0-9]+$/.test(value);
		if(!check)
		{
			e.preventDefault();
			alert("لطفاً مبلغ پرداختی را درست درج نمایید!");
			return 0;
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#payment_date").val();

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
			}
		}
	});

	$(".cancel").on("click", function(){
		$(".in").val("");
	});

	$("#cancel").on("click", function(){
		location = "payment&receipt.php"
	});
})