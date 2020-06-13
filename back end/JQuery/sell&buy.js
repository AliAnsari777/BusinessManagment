$(document).ready(function(){
	
	$("#cancel").on("click", function(){
		location="sell&buy.php";
	});

	// this part prevent user to enter wastage befor entering the weith in kilo.
	$("#wastage").attr("disabled" , "true");
	$("#weithInKilo, #sack").on("keyup",function(){
		$("#wastage").prop("disabled", false);
		$("#wastage").val(0);
	});

	// this part enable us to select data from our table with help of DataTable library
	var sellTables = $("#sellTable").DataTable({
		"responsive" : true,
		"paging" : false,
		"info" : false,
		"scrollY" : "150px",
	});

	$("#bargains").DataTable({
		"responsive" : true,
		"paging" : false,
		"info" : false,
		"scrollY" : "270px",
	});

	var tradeType = $("#buyOrSell").val();
	$("#tradeType").append(tradeType);

	// by clicking on a row inside buys table at bottom of sell.php page, all the row data will store in tableCells array
	// and we use this array to put those values inside the text boxes of sell form and four of them are hidden in that form.
	$("#sellTable tbody").on("click", "tr", function(){
		var tableCells = sellTables.row(this).data();
		$("#buyID").val(tableCells[0]);
		$("#goodsID").val(tableCells[1]);
		$("#stockID").val(tableCells[2]);
		$("#stockSupply").val(tableCells[7]);
		$("#goodsName").val(tableCells[4]);
		$("#profit").val(tableCells[5]);
		$("#stockName").val(tableCells[6]);
	});

	// this part will calculate enterd data and fill some other text boxes like weithInKilo, totalPrice and
	// reminder amount of trade
	$(".sack").on("keyup", function(){
		var total_weith = $("#sack").val() * 50;
		total_weith -= $("#wastage").val();
		$("#weithInKilo").val(total_weith.toFixed(2));
		var totalPrice =  $("#weithInKilo").val() /1000 * $("#priceInTon").val();
		$("#totalPrice").val(totalPrice.toFixed(2));
		var result = $("#totalPrice").val() - $("#paymentAmount").val();
		$("#reminderAmount").val(result.toFixed(2));
	});

	$(".kilo").on("keyup", function(){
		var total_sack = $("#weithInKilo").val() - $("#wastage").val();
		total_sack /= 50;
		$("#sack").val(total_sack);
		var totalPrice =  $("#weithInKilo").val() /1000 * $("#priceInTon").val();
		$("#totalPrice").val(totalPrice.toFixed(2));
		var result = $("#totalPrice").val() - $("#paymentAmount").val();
		$("#reminderAmount").val(result.toFixed(2));
	});


	// this code will highlighte selected row in buys table at bottom of sell.php to help user to know which
	// row he select. for this propuse first it remove "selected" class from all other rows and then add the
	// class to selected row, stylig are defined for selected class in sell.php at top of page.
	$("#sellTable tr").on("click", function() {
	    $("#sellTable tr").children("td").removeClass("selected");
	    $(this).children("td").addClass("selected");
	});

	// this part check that the enterd weith for trade isn't greater than the stock supply
	$("#sack").on("blur", function(){
		var buyKilo = $("#weithInKilo").val();
		var stockKilo = $("#stockSupply").val();
		
		if(parseInt(buyKilo) > parseInt(stockKilo))
		{
			alert("مجموع باقی مانده این خرید کافی نیست!");
		} 
	});

	// at end this code check that all the important text boxes are filled and calculate the profite of the trade.
	$("#newTrade").on("click", function(e){
		if ($("#sack").val() == "" || $("#priceInTon").val() == "" || $("#paymentAmount").val() == "" || $("#tradeDate").val() == "" ||
		$("#wastage").val() == "")
		{
			e.preventDefault();
			alert("لطفاً فورم را تکمیل کنید!");
			return 0;
		}

		//this part chech the format of date text box to be valid date yyyy/mm/dd
		var regEx = /^\d{4}(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
		var checkDate = $("#tradeDate").val();

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

		var buyKilo = $("#weithInKilo").val();
		var stockKilo = $("#stockSupply").val();
		var editStockKilo = $("#weithInKilo4check").val();
		// the second part of if condition is for edit page.
		if(parseInt(buyKilo,10) > parseInt(stockKilo,10) || parseInt(buyKilo,10) > parseInt(editStockKilo,10))
		{
			e.preventDefault();
			alert("مجموع باقی مانده این خرید کافی نیست!");
			return 0;
		}
		
		if(parseInt($("#paymentAmount").val(),10) > parseInt($("#totalPrice").val(),10))
		{
			e.preventDefault();
			alert("مبلغ پرداختی از مجموع مبلغ معامله بیشتر است!");
			return 0;
		}

		if($("#buyOrSell").val() == "فروش")
		{
			var buyPrice = $("#profit").val();
			var sellPrice = $("#priceInTon").val();
			var profit = sellPrice - buyPrice;
			profit *= $("#weithInKilo").val() /1000;
			$("#profit").val(profit);

		}
	});

	$("#editGoodsID").on("click", function(){
		var gID = $("#editGoodsID").val();
		var goods = $.ajax({
			type : "POST",
			url : "../back end/php/goods4edit.php",
			data : {id : gID}
		});
		goods.done(function(data){
			$("#editStockID").html(data);
		});
	});

	$(".check4edit").on("click", function(e){
		e.preventDefault();
		var values = $(this).attr('id');
		var add = $(this).attr('href');
		ids = values.split(" ");
		var B_ID = ids[0];
		var C_ID = ids[1];
		var trade = ids[2];
		var installment;

		if(trade == 'خرید')
			installment = 'پرداخت';
		else
			installment = 'دریافت';

		var check = $.ajax({
			type : "POST",
			url : "../back end/php/checkBeforEdit.php",
			data : {b_id : B_ID, c_id: C_ID, trade: trade, installment:installment}
		});
		check.done(function(data){
			if(data !== "")
			{
				alert("این معامله قابل حذف یا ویرایش نمیباشد! \n برای حذف کردن یا ویرایش این معامله باید معاملات فروش مربوط به این معامله خرید را حذف کنید!");
			}
			else
				location.href = add;
		});
	})
/* this part is for auto compleation list (the first method)
	// this part will search in customer list instantly
	$("#customer").on("keyup", function(){
		var searchVal = $("#customer").val();
		var identifier = 1;
		var searchResult = $.ajax
		({
			type:"POST",
			url:"../back end/php/autoList.php",		
			data:{searchValue:searchVal, identifier:identifier}
		});

		searchResult.done(function(data){
			$("#autoCustomer").html(data);
		});
	});

	// this part will search in goods list instantly
	$("#goods").on("keyup", function(){
		var searchVal = $("#goods").val();
		var identifier = 2;
		var searchResult = $.ajax
		({
			type:"POST",
			url:"../back end/php/autoList.php",		
			data:{searchValue:searchVal, identifier:identifier}
		});

		searchResult.done(function(data){
			$("#autoGoods").html(data);
		});
	});

	// this part will search in stock list instantly
	$("#stock").on("keyup", function(){
		var searchVal = $("#stock").val();
		var identifier = 3;
		var searchResult = $.ajax
		({
			type:"POST",
			url:"../back end/php/autoList.php",		
			data:{searchValue:searchVal, identifier:identifier}
		});

		searchResult.done(function(data){
			$("#autoStock").html(data);
		});
	});*/
})