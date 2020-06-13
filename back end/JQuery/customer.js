$(document).ready(function(){
	
	$("#cancel").on("click", function(){
		location="customer.php";
	});

	$("#customers").DataTable({
		"responsive" : true,
		"paging" : false,
		"info" : false,
		"scrollY" : "350px",
	});

	$(".check4delete").on("click", function(e){
		e.preventDefault();
		var C_ID = $(this).attr('id');
		var add = $(this).attr('href');
		$.ajax({
			type : "POST",
			url : "../back end/php/checkCustomer4delete.php",
			data : {id : C_ID}
		}).done(function(data){
			if (data !== "")
				alert("برای حذف این معامله دار باید اول معاملات مربوط به ان را حذف نمایید!");
			else
				location.href = add;
		});
	});

	$("#update").on("click", function(e){
		if($("#customer_name").val() == "") 
		{
			e.preventDefault();
			alert("لطفاً نام معامله دار را وارد کنید!");
			return 0;
		}
	
		else if($("#last_name").val() == "")
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

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#create_date").val();
		var approveDate = $("#approve_date").val();
	//if format of date is valid it will check the month and day part to be valid not lessthan one or morethan 12 for month and 31 for day
		if(!checkDate.match(regEx) || !approveDate.match(regEx))
		{
			alert("فورمت تاریخ اشتباه است!");
			e.preventDefault();
			return 0;
		}
		else
		{
			var arrayDate = checkDate.split(/[\/-]+/);
			var arrayApprove = approveDate.split(/[\/-]+/);
			if((arrayDate[1] <= 0 || arrayDate[1] > 12) || (arrayApprove[1] <= 0 || arrayApprove[1] > 12))
			{
				alert("قسمت ماه در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
			else if((arrayDate[2] <= 0 || arrayDate[2] > 31) || (arrayApprove[2] <= 0 || arrayApprove[2] > 31))
			{
				alert("قسمت روز در تاریخ اشتباه است!");
				e.preventDefault();
				return 0;
			}
		}
	});

	$("#print").on("click", function(){
		$(".print").print({
			stylesheet : "print2.css",
		});		
	});

	$("#approve_date").on("blur", function(){
		var app = $("#approve_date").val();
		var id = $("#id").val();
		var approveResult = $.ajax({
			type : "POST",
			url : "../back end/php/approveResult.php",
			data : {val:app, id:id}
		});

		approveResult.done(function(data){
			$("#approve_result").val(data);
		});
	});
})