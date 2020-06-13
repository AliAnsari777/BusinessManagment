$(document).ready(function(){

	// this part display all trade from one customer
	$("#customer_name").on("click", function(){
		var id = $("#customer_name").val();

		var selectBargain = $.ajax({
			type:"POST",
			url: "../back end/php/oneCustomerBargains.php",
			data:{value:id}
		});

		selectBargain.done(function(data){
			$("#displayTrades").html(data);
		});
	});

	$("#filter").on("change", function(){
		var code = 1;
		var choice = $("#filter").val();
		var id = $("#customer_name").val();

		var filter = $.ajax({
			type:"POST",
			url: "../back end/php/filterTradeType.php",
			data:{code:code, value:choice, id:id}
		});

		filter.done(function(data){
			$("#displayTrades").html(data);
		});
	});

	$("#installment_customer_name").on("click", function(){
		var id = $("#installment_customer_name").val();

		var selectBargain = $.ajax({
			type:"POST",
			url: "../back end/php/oneCustomerInstallments.php",
			data:{value:id}
		});

		selectBargain.done(function(data){
			$("#displayInstallments").html(data);
		});
	});

	$("#filterInstallment").on("change", function(){
		var code = 2;
		var choice = $("#filterInstallment").val();
		var id = $("#installment_customer_name").val();
		
		var filter = $.ajax({
			type:"POST",
			url: "../back end/php/filterTradeType.php",
			data:{code:code, value:choice, id:id}
		});

		filter.done(function(data){
			$("#displayInstallments").html(data);
		});
	})

	$("#monthlyProfit").on("click", function(){
		
		var specificProfit = $.ajax({
			type : "POST",
			url : "../back end/php/specificProfit.php",
			data:{code:1}
		});
		specificProfit.done(function(data){
			$("#displayMonthlyProfit").html(data);
		});
	});


	$("#stock").on("click", function(){
		var stock = $.ajax({
			type:"POST",
			url:"../back end/php/reportCalls.php"
		});
		stock.done(function(data){
			$("#stockSupply").html(data);
		});
	});
});