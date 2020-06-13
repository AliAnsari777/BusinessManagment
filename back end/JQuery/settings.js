$(document).ready(function(){

	$("#customer_name").on("blur", function(){
		var value = $("#customer_name").val();
		var check = /^[0-9]+$/.test(value);
		if(check)
		{
			alert("لطفاً نام معامله دار را درست درج نمایید!");
		}
	});

	
	$("#goods_name").on("blur", function(){
		var value = $("#goods_name").val();
		var check = /^[0-9]+$/.test(value);
		if(check)
		{
			alert("لطفاً نام حنس را درست درج نمایید!");
		}
	});

	$("#stock_name").on("blur", function(){
		var value = $("#stock_name").val();
		var check = /^[0-9]+$/.test(value);
		if(check)
		{
			alert("لطفاً نام گدام را درست درج نمایید!");
		}
	});

	$("#staff_name").on("blur", function(){
		var value = $("#staff_name").val();
		var check = /^[0-9]+$/.test(value);
		if(check)
		{
			alert("لطفاً نام مسئول گدام را درست درج نمایید!");
		}
	});

	// this part of validation belongs to creating new customer in settings page.
	$("#create_customer").on("click", function(e){
		if($("#customer_name").val() == "") 
		{
			e.preventDefault();
			alert("لطفاً نام معامله دار را وارد کنید!");
			return 0;
		}
		else
		{
			e.preventDefault();
			var customerName = $("#customer_name").val();
			var checkCustomer = $.ajax({
				type : "POST",
				url : "../back end/php/checkCustomerName.php",
				data : {name:customerName}
			});
			checkCustomer.done(function(data){
				if(data !== "")
				{
					alert("نام معامله دار تکراری است!");
				}
				else
					$("#customerForm").submit();
			});
		}

		if($("#last_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً تخلص معامله دار را وارد کنید!");
			return 0;
		}
		else if($("#first_tel").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نمبر تماس معامله دار را وارد کنید!");
			return 0;
		}
	});

	$("#cancel_customer").on("click", function(){
		$(".in").val('');
	});




	// this part of validation belongs to creating a new goods in settings page.
	$("#create_goods").on("click", function(e){
		if($("#goods_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نام جنس را وارد کنید!");
			return 0;
		}
		else
		{
			e.preventDefault();
			var goodsName = $("#goods_name").val();
			var checkgoods = $.ajax({
				type : "POST",
				url : "../back end/php/checkGoodsName.php",
				data : {name:goodsName}
			});
			checkgoods.done(function(data){
				if(data !== "")
				{
					alert("نام جنس تکراری است!");
				}
				else
					$("#goodsName").submit();
			});
		}
	});

	$("#cancel_goods").on("click", function(){
		$(".in").val('');
	});


	// this part of validation belongs to creating a new stock in settings page.
	$("#create_stock").on("click", function(e){
		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#start_date").val();

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

		if($("#stock_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نام گدام را وارد کنید!");
			return 0;
		}
		else
		{
			e.preventDefault();
			var stockName = $("#stock_name").val();
			var checkStock = $.ajax({
				type : "POST",
				url : "../back end/php/checkStockName.php",
				data : {name:stockName}
			});
			checkStock.done(function(data){
				if(data !== "")
				{
					alert("نام گدام تکراری است!");
				}
				else
					$("#stockName").submit();
			});
		}
		
		if($("#staff_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نام مسئول گدام را وارد کنید!");
			return 0;
		}
		else if($("#firstTel").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نمبر تماس مسئول گدام را وارد کنید!");
			return 0;
		}
		else if($("#start_date").val() == "")
		{
			e.preventDefault();
			alert("لطفاً تاریخ شروع کار با گدام را وارد کنید!");
			return 0;
		}
	});

	// this part of validation belongs to updating stock in edit_stock page.
	$("#update_stock").on("click", function(e){
		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#start_date").val();

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

		if($("#stock_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نام گدام را وارد کنید!");
			return 0;
		}
		else if($("#staff_name").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نام مسئول گدام را وارد کنید!");
			return 0;
		}
		else if($("#firstTel").val() == "")
		{
			e.preventDefault();
			alert("لطفاً نمبر تماس مسئول گدام را وارد کنید!");
			return 0;
		}
		else if($("#start_date").val() == "")
		{
			e.preventDefault();
			alert("لطفاً تاریخ شروع کار با گدام را وارد کنید!");
			return 0;
		}
	});

	$("#cancel_stock").on("click", function(){
		$(".in").val('');
	});

	$("#cancel").on("click", function(){
		location="settings.php#stock";
	});
})