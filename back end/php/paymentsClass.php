<?php
class Payment 
{
	private $I_ID, $B_ID, $C_ID, $payment_amount, $note, $payment_date, $customer_name, $customer_id, $goods_name, $goods_ID, $total_amount,
	$payed_amount, $reminder_amount, $income, $outgo, $pay_or_recieve, $Bank_ID, $totalIncome, $totalOutgo, $tradeType,
	$stockID, $stockName, $priceInTon, $noOfCars,$sack, $weithInKilo, $wastage, $totalPrice, $installment, $sellOrBuy, $tradeDate, $approved,
	$totalBuy, $payable, $payed, $totalSell, $receivable, $received;

	public function SetI_ID($I_ID)
	{
		$this->I_ID = $I_ID;
	}
	public function GetI_ID()
	{
		return $this->I_ID;
	}

	public function SetB_ID($B_ID)
	{
		$this->B_ID = $B_ID;
	}
	public function GetB_ID()
	{
		return $this->B_ID;
	}

	public function SetC_ID($C_ID)
	{
		$this->C_ID = $C_ID;
	}
	public function GetC_ID()
	{
		return $this->C_ID;
	}

	public function SetBank_ID($Bank_ID)
	{
		$this->Bank_ID = $Bank_ID;
	}
	public function GetBank_ID()
	{
		return $this->Bank_ID;
	}

	public function SetTotalIncome($totalIncome)
	{
		$this->totalIncome = $totalIncome;
	}
	public function GetTotalIncome()
	{
		return $this->totalIncome;
	}

	public function SetTotalOutgo($totalOutgo)
	{
		$this->totalOutgo = $totalOutgo;
	}
	public function GetTotalOutgo()
	{
		return $this->totalOutgo;
	}

	public function SetTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
	}
	public function GetTradeType()
	{
		return $this->tradeType;
	}

	public function SetPaymentAmount($payment_amount)
	{
		$this->payment_amount = $payment_amount;
	}
	public function GetPaymentAmount()
	{
		return $this->payment_amount;
	}

	public function SetNote($note)
	{
		$this->note = $note;
	}
	public function GetNote()
	{
		return $this->note;
	}

	public function SetPaymentDate($payment_date)
	{
		$this->payment_date = $payment_date;
	}
	public function GetPaymentDate()
	{
		return $this->payment_date;
	}

	public function SetCustomerName($customer_name)
	{
		$this->customer_name = $customer_name;
	}
	public function GetCustomerName()
	{
		return $this->customer_name;
	}

	public function SetGoodsName($goods_name)
	{
		$this->goods_name = $goods_name;
	}
	public function GetGoodsName()
	{
		return $this->goods_name;
	}

	public function SetTotalAmount($total_amount)
	{
		$this->total_amount = $total_amount;
	}
	public function GetTotalAmount()
	{
		return $this->total_amount;
	}

	public function SetPayedAmount($payed_amount)
	{
		$this->payed_amount = $payed_amount;
	}
	public function GetPayedAmount()
	{
		return $this->payed_amount;
	}

	public function SetCustomerID($customer_id)
	{
		$this->customer_id = $customer_id;
	}
	public function GetCustomerID()
	{
		return $this->customer_id;
	}

	public function SetGoodsID($goods_ID)
	{
		$this->goods_ID = $goods_ID;
	}
	public function GetGoodsID()
	{
		return $this->goods_ID;
	}

	public function SetReminderAmount($reminder_amount)
	{
		$this->reminder_amount = $reminder_amount;
	}
	public function GetReminderAmount()
	{
		return $this->reminder_amount;
	}

	public function SetIncome($income)
	{
		$this->income = $income;
	}
	public function GetIncome()
	{
		return $this->income;
	}

	public function SetOutgo($outgo)
	{
		$this->outgo = $outgo;
	}
	public function GetOutgo()
	{
		return $this->outgo;
	}

	public function SetPayOrRecieve($pay_or_recieve)
	{
		$this->pay_or_recieve = $pay_or_recieve;
	}
	public function GetPayOrRecieve()
	{
		return $this->pay_or_recieve;
	}

	public function SetStockID($stockID)
	{
		$this->stockID = $stockID;
	}
	public function GetStockID()
	{
		return $this->stockID;
	}

	public function SetStockName($stockName)
	{
		$this->stockName = $stockName;
	}
	public function GetStockName()
	{
		return $this->stockName;
	}

	public function SetPriceInTon($priceInTon)
	{
		$this->priceInTon = $priceInTon;
	}
	public function GetPriceInTon()
	{
		return $this->priceInTon;
	}

	public function SetNumberOfCars($noOfCars)
	{
		$this->noOfCars = $noOfCars;
	}
	public function GetNumberOfCars()
	{
		return $this->noOfCars;
	}

	public function SetSack($sack)
	{
		$this->sack = $sack;
	}
	public function GetSack()
	{
		return $this->sack;
	}

	public function SetWeithInKilo($weithInKilo)
	{
		$this->weithInKilo = $weithInKilo;
	}
	public function GetWeithInKilo()
	{
		return $this->weithInKilo;
	}

	public function SetWastage($wastage)
	{
		$this->wastage = $wastage;
	}
	public function GetWastage()
	{
		return $this->wastage;
	}	

	public function SetTotalPrice($totalPrice)
	{
		$this->totalPrice = $totalPrice;
	}
	public function GetTotalPrice()
	{
		return $this->totalPrice;
	}

	public function SetInstallment($installment)
	{
		$this->installment = $installment;
	}
	public function GetInstallment()
	{
		return $this->installment;
	}

	public function SetSellOrBuy($sellOrBuy)
	{
		$this->sellOrBuy = $sellOrBuy;
	}
	public function GetSellOrBuy()
	{
		return $this->sellOrBuy;
	}

	public function SetTradeDate($tradeDate)
	{
		$this->tradeDate = $tradeDate;
	}
	public function GetTradeDate()
	{
		return $this->tradeDate;
	}

	public function SetApproved($approved)
	{
		$this->approved = $approved;
	}
	public function GetApproved()
	{
		return $this->approved;
	}

	public function SetTotalBuy($totalBuy)
	{
		$this->totalBuy = $totalBuy;
	}
	public function GetTotalBuy()
	{
		return $this->totalBuy;
	}

	public function SetPayable($payable)
	{
		$this->payable = $payable;
	}
	public function GetPayable()
	{
		return $this->payable;
	}

	public function SetPayed($payed)
	{
		$this->payed = $payed;
	}
	public function GetPayed()
	{
		return $this->payed;
	}

	public function SetTotalSell($totalSell)
	{
		$this->totalSell = $totalSell;
	}
	public function GetTotalSell()
	{
		return $this->totalSell;
	}

	public function SetReceivable($receivable)
	{
		$this->receivable = $receivable;
	}
	public function GetReceivable()
	{
		return $this->receivable;
	}

	public function SetReceived($received)
	{
		$this->received = $received;
	}
	public function GetReceived()
	{
		return $this->received;
	}
/***********************************************************************/

	// this fucntion will select name of those customers that we buy from them. because this function will use in
	// payment_installment.php which only use for user's payments, so we don't need name of customers we sell to them.
	public function CustomerList4Payment()
	{
		require_once("connect&create.php");

		$list = $connection->prepare("select c.C_ID, c.name from customer as c inner join bargains as b on (c.C_ID = b.C_ID && `sell_or_buy` = 'خرید') group by c.name order by name asc");
		$list->execute();
		$list->store_result();
		$list->bind_result($customer_id, $customer_name);
		while ($list->fetch()) {
			$this->SetCustomerID($customer_id);
			$this->SetCustomerName($customer_name);
			?>
			<option value= "<?php echo $this->GetCustomerID(); ?>"><?php echo $this->GetCustomerName(); ?></option>
			<?php
		}

		$list->free_result();
	}

	// this function will select name of customers that we sell goods to them and need to recieve their mony.
	// this function will use in recieve_installment.php.
	public function CustomerList4Recieve()
	{
		require("connect&create.php");

		$list = $connection->prepare("select c.C_ID, c.name from customer as c inner join bargains as b on (c.C_ID = b.C_ID && `sell_or_buy` = 'فروش') group by c.name");
		$list->execute();
		$list->store_result();
		$list->bind_result($customer_id, $customer_name);
		while ($list->fetch()) {
			$this->SetCustomerName($customer_name);
			$this->SetCustomerID($customer_id);
			?>
			<option value= "<?php echo $this->GetCustomerID(); ?>"><?php echo $this->GetCustomerName(); ?></option>
			<?php
		}

		$list->free_result();
	}

	// After changing payment method of installments the following function arn't necessary because installments doesn't belong to specific bargains
	/************************************************************************
	public function BargainsList4Payment()
	{
		require_once ("connect&create.php");
		// this statment select name of goods from goods table where their id match with G_ID in bargains table and they are buy trade
		// and belong to a specific customer that its id will come after selecting the customer name from drop down list in the first
		// field of table by an ajax call.
		$goods_list = $connection->prepare("SELECT g.name, b.B_ID, b.reminder_amount from goods as g inner join bargains as b on (g.G_ID = b.G_ID && g.Stock_ID = b.Stock_ID && sell_or_buy = 'خرید' && reminder_amount != 0 &&C_ID = ?)");
		$goods_list->bind_param("i", $customer_id);
		$customer_id = $this->GetCustomerID();
		$goods_list->execute();
		$goods_list->store_result();
		$goods_list->bind_result($goods_name, $B_ID, $reminder_amount);
		while ($goods_list->fetch()) {
			$this->SetGoodsName($goods_name);
			$this->SetB_ID($B_ID);
			$this->SetReminderAmount($reminder_amount);
			// because we need bargain's id to find each bargain apart to calculate all its payments in installment table
			// I put bargains id in value of goods name drop down list, to use it when a user click on a goods name drop down list item
			// to find all its payment and sum it and display it in relative text box
			?>
			<option value="<?php echo $this->GetB_ID(); ?>"><?php echo $this->GetGoodsName() . " .... (" . $this->GetReminderAmount() . ")"; ?></option>
			<?php
		} 
		$goods_list->free_result();
	}

	// this function use B_ID from value of goods name drop down list that we use when we save a new installment in installment table, 
	// and select total price and total payment from installment table which their id match with B_ID in bargains table.
	public function BargainsID4Payment()
	{
		require_once ("connect&create.php");
		$bargain_id = $connection->prepare("SELECT b.total_price, sum(i.payment_amount) FROM bargains as b 
    	inner join installment as i on (b.B_ID = i.B_ID)
    	WHERE C_ID = ? && b.B_ID = ? && sell_or_buy = 'خرید' group by b.B_ID");

    	$bargain_id->bind_param("ii", $customer_id, $B_ID);
    	$customer_id = $this->GetCustomerID();
    	$B_ID = $this->GetB_ID();
    	$bargain_id->execute();
    	$bargain_id->store_result();
    	$bargain_id->bind_result($total_amount, $payed_amount);
    	while ($bargain_id->fetch()) {
    		$this->SetTotalAmount($total_amount);
    		$this->SetPayedAmount($payed_amount);
    	}

    	echo $this->GetTotalAmount() . " ";
  		echo $this->GetPayedAmount();

  		$bargain_id->free_result();
	}


	// this function will select name of goods that we sell them to our customers.
	// this function will use in recieve_installment.php.
	public function BargainsList4Recieve()
	{
		require_once ("connect&create.php");
		// this statment select name of goods from goods table where their id match with G_ID in bargains table and they are sell trade
		// and belong to a specific customer that its id will come after selecting the customer name from drop down list in the first
		// field of table by an ajax call.
		$goods_list = $connection->prepare("SELECT g.name, b.B_ID, b.reminder_amount from goods as g inner join bargains as b on (g.G_ID = b.G_ID && g.Stock_ID = b.Stock_ID && sell_or_buy = 'فروش' && reminder_amount != 0 &&C_ID = ?)");
		$goods_list->bind_param("i", $customer_id);
		$customer_id = $this->GetCustomerID();
		$goods_list->execute();
		$goods_list->store_result();
		$goods_list->bind_result($goods_name, $B_ID, $reminder_amount);
		while ($goods_list->fetch()) {
			$this->SetGoodsName($goods_name);
			$this->SetB_ID($B_ID);
			$this->SetReminderAmount($reminder_amount);
			?>
			<option value="<?php echo $this->GetB_ID(); ?>"><?php echo $this->GetGoodsName() . " .... (" . $this->GetReminderAmount() . ")"; ?></option>
			<?php
		}
		$goods_list->free_result();
	}

	// this function is select bargains ID that related to sell trades for using them when we want to save new installment.
	// this function will use in recieve_installment.php.
	public function BargainsID4Recieve()
	{
		require_once ("connect&create.php");
		$bargain_id = $connection->prepare("SELECT b.total_price, sum(i.payment_amount) FROM bargains as b 
    	inner join installment as i on (b.B_ID = i.B_ID)
    	WHERE C_ID = ? && b.B_ID = ? && sell_or_buy = 'فروش' group by b.B_ID ");

    	$bargain_id->bind_param("ii", $customer_id, $B_ID);
    	$customer_id = $this->GetCustomerID();
    	$B_ID = $this->GetB_ID();
    	$bargain_id->execute();
    	$bargain_id->store_result();
    	$bargain_id->bind_result($total_amount, $payed_amount);
    	while ($bargain_id->fetch()) {
    		$this->SetTotalAmount($total_amount);
    		$this->SetPayedAmount($payed_amount);
    	}
    	echo $this->GetTotalAmount() . " ";
  		echo $this->GetPayedAmount();

  		$bargain_id->free_result();
	}********************************************************************************/


	public function NewInstallment()
	{
		require_once ("connect&create.php");

		$new_installment = $connection->prepare("insert into installment (C_ID, trade_type, payment_amount, note, payment_date) 
			values (?, ?, ?, ?, ?)");
		$new_installment->bind_param("isiss", $C_ID, $sellOrBuy, $payment_amount, $note, $payment_date);

		$C_ID = $this->GetC_ID();
		$sellOrBuy = $this->GetSellOrBuy();
		$payment_amount = $this->GetPaymentAmount();
		$note = $this->GetNote();
		$payment_date = $this->GetPaymentDate();

		$new_installment->execute();
		$new_installment->free_result();

		/*
		// this part of function select the existing payment value and reminder value from bargains table to add them 
		// new installment payment that come from payment_installment.php or recieve_installment.php files.
		$new_installment = $connection->prepare("select payment_amount, reminder_amount from bargains where B_ID = ?");
		$new_installment->bind_param("i", $B_ID);
		$new_installment->execute();
		$new_installment->store_result();
		$new_installment->bind_result($payed_amount, $reminder_amount);
		while ($new_installment->fetch()) {
			$this->SetPayedAmount($payed_amount);
			$this->SetReminderAmount($reminder_amount);
		}

		$adding =  $this->GetPayedAmount() + $payment_amount;
		$subtracting = $this->GetReminderAmount() - $payment_amount;
		$new_installment->free_result();

		// after adding the payment value to the selected columns from bargains table we use them to update the payment_amount and
		// reminder_amount columns in bargains table, to have a list of our bargains with an update infromation about 
		// payment and reminder of each treade 
		$new_installment = $connection->prepare("update bargains set payment_amount = ?, reminder_amount = ? where B_ID = ?");
		$new_installment->bind_param("iii", $adding, $subtracting, $B_ID);
		$new_installment->execute();
		$new_installment->free_result();
		*/
	}

	public function InstallmentList()
	{
		require("connect&create.php");

		$installment = $connection->prepare("SELECT I_ID, payment_amount, note, payment_date from installment where C_ID=? && trade_type=?");
		$installment->bind_param("is", $customerID, $sellOrBuy);
		$customerID = $this->GetCustomerID();
		$sellOrBuy = $this->GetSellOrBuy();
		$installment->execute();
		$installment->store_result();
		$installment->bind_result($I_ID, $payment_amount, $note, $payment_date);
		?>
		<table width="99%">
			<tbody>
		<?php
		$i = 1;
		while ($installment->fetch()) {
			$this->SetI_ID($I_ID);
			$this->SetPaymentAmount($payment_amount);
			$this->SetNote($note);
			$this->SetPaymentDate($payment_date);
			?>
			<tr class="design">
				<td width="10%" class="installment_td"><?php echo $i; $i++ ?></td>
				<td width="20%" class="installment_td"><?php echo $this->GetPaymentAmount(); ?></td>
				<td width="30%" class="installment_td"><?php echo $this->GetNote(); ?></td>
				<td width="20%" class="installment_td"><?php echo $this->GetPaymentDate(); ?></td>
				<td width="20%" class="installment_td" style="text-align: center">
					<a style="font-family: tahoma" href="edit_installment.php?I_id=<?php echo $this->GetI_ID();?>&C_id=<?php echo $customerID ?>">ویرایش</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
	                <a  style="font-family: tahoma" href="confirm_delete_installment.php?id=<?php echo $this->GetI_ID();?>">حذف</a>
				</td>
			</tr>
			<?php
		}
		?>
			</tbody>
		<?php
		$installment = $connection->prepare("select
		(select coalesce(sum(total_price),0) from bargains where C_ID = ? && sell_or_buy = ?) as totalTrades,
		(select coalesce(sum(payment_amount),0) from installment where C_ID = ? && trade_type = ?) as totalInstallment");

		$installment->bind_param("isis", $customerID, $type, $customerID, $sellOrBuy);
		if ($sellOrBuy == "پرداخت") 
		{
			$type = "خرید";
		}
		else
		{
			$type = "فروش";
		}

		$installment->execute();
		$installment->store_result();
		$installment->bind_result($total_amount, $payment_amount);
		while ($installment->fetch()) {
			$this->SetTotalAmount($total_amount);
			$this->SetPayedAmount($payment_amount);
		}
		?>
			<tfoot>
				<tr>			
					<?php 
						if ($sellOrBuy == "پرداخت")
						{
							?>
							  <th id="footer" class="installment_th" colspan="5">
							  مجموع خرید : <?php echo $this->GetTotalAmount();?> <span style="color: red; font-weight: bolder;"> | </span>
							  مجموع پرداخت : <?php echo $this->GetPayedAmount();?> <span style="color: red; font-weight: bolder;"> | </span>
							  قرضدار هستیم : <?php echo $this->GetTotalAmount() - $this->GetPayedAmount();?>
							  </th>
							<?php
						}
						else
						{
							?>
							  <th id="sell_footer" class="installment_th" colspan="5">
							  مجموع فروش : <?php echo $this->GetTotalAmount();?> <span style="color: red; font-weight: bolder;"> | </span>
							  مجموع دریافتی : <?php echo $this->GetPayedAmount();?> <span style="color: red; font-weight: bolder;"> | </span>
							  قرضدار هستند : <?php echo $this->GetTotalAmount() - $this->GetPayedAmount();?>
							  </th>
							<?php
						}
					?> 
				</tr>
			</tfoot>
		</table>
		<?php
		$installment->free_result();
	}

	public function EditInstallment($I_id, $C_id)
	{
		require ("connect&create.php");

		$edit = $connection->prepare("SELECT *,	(select name from customer where C_ID = ?) as name FROM `installment` WHERE `I_ID` = ?");
		$edit->bind_param("ii", $C_ID, $I_ID);
		$C_ID = $C_id;
		$I_ID = $I_id;
		$edit->execute();
		$edit->store_result();
		$edit->bind_result($I_ID, $C_ID, $B_ID, $tradeType, $payment_amount, $note, $payment_date, $approve, $customer_name);
		while ($edit->fetch()) {
			$this->SetI_ID($I_ID);
			$this->SetC_ID($C_ID);
			$this->SetTradeType($tradeType);
			$this->SetPayedAmount($payment_amount);
			$this->SetNote($note);
			$this->SetPaymentDate($payment_date);
			$this->SetCustomerName($customer_name);
		?>
			<form action="../back end/php/updateInstallment.php" method="post">
				<table>
					<tr>
						<th>نام معامله دار</th>
						<td><input readonly id="customer_name" name="customer_name" type="text" size="21" 
						value="<?php echo $this->GetCustomerName(); ?>"></td>
					</tr>
					<tr>
						<th>مبلغ پرداختی</th>
						<td><input id="payment_amount" name="payment_amount" type="text" size="21" 
						value="<?php echo $this->GetPayedAmount(); ?>"></td>
					</tr>
					<tr>
						<th>از درک</th>
						<td><textarea cols="32" rows="5" id="note" name="note" type="text" size="21"><?php echo $this->GetNote(); ?></textarea>
					</tr>
					<tr>
						<th>تاریخ</th>
						<td><input id="payment_date" name="payment_date" type="text" size="21" 
						value="<?php echo $this->GetPaymentDate(); ?>"></td>
						<td><input id="I_ID" name="I_ID" hidden="true" type="text" value="<?php echo $this->GetI_ID(); ?>"></input></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
		                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="update" type="submit">ایجاد تغییر</button>
		                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="cancel" type="button">انصراف</button>
		                </td>
					</tr>
				</table>
			</form>
			<?php
		}
	}

	public function UpdateInstallment()
	{
		require ("connect&create.php");

		$update = $connection->prepare("update installment set payment_amount = ?, note = ?, payment_date = ? where I_ID = ?");
		$update->bind_param("issi", $payment_amount, $note, $payment_date, $I_ID);

		$payment_amount = $this->GetPaymentAmount();
		$note = $this->GetNote();
		$payment_date = $this->GetPaymentDate();
		$I_ID = $this->GetI_ID();

		$update->execute();
		$update->free_result();
	}

	public function DeleteInstallment()
	{
		require_once("connect&create.php");

		$delete = $connection->prepare("delete from installment where I_ID = ?");
		$delete->bind_param("i", $I_ID);

		$I_ID = $this->GetI_ID();
		$delete->execute();
		$delete->free_result();
	}

	public function AddToBank()
	{
		require_once ("connect&create.php");

		$bank = $connection->prepare("insert into bank (income, outgo, note, date) values (?, ?, ?, ?)");
		$bank->bind_param("iiss", $income, $outgo, $note, $payment_date);

		$income = $this->GetIncome();
		$outgo = $this->GetOutgo();
		$note = $this->GetNote();
		$payment_date = $this->GetPaymentDate();

		$bank->execute();
		$bank->free_result();
	}

	public function BankEntries()
	{
		require("connect&create.php");

		$list = $connection->prepare("select * from bank");
		$list->execute();
		$list->store_result();
		$list->bind_result($Bank_ID, $income, $outgo, $note, $payment_date);
		?>
		<table width="99%">
			<tbody>
		<?php
		$i = 1;
		while ($list->fetch()) {
			$this->SetBank_ID($Bank_ID);
			$this->SetIncome($income);
			$this->SetOutgo($outgo);
			$this->SetNote($note);
			$this->SetPaymentDate($payment_date);
			?>
				<tr class="design">
					<td width="10%" class="installment_td"><?php echo $i; $i++ ?></td>
					<td width="15%" class="installment_td"><?php echo $this->GetIncome(); ?></td>
					<td width="15%" class="installment_td"><?php echo $this->GetOutgo(); ?></td>
					<td width="25%" class="installment_td"><?php echo $this->GetNote(); ?></td>
					<td width="15%" class="installment_td"><?php echo $this->GetPaymentDate(); ?></td>
					<td width="20%" class="installment_td" style="text-align: center">
						<a style="font-family: tahoma" href="confirm_delete_bankEntry.php?id=<?php echo $this->GetBank_ID();?>">حذف</a>
					</td>
				</tr>
			<?php
		}
		?>
			</tbody>
		<?php
		$list->prepare("select 
						(select coalesce(sum(income), 0) from bank) as income,
						(select coalesce(sum(outgo), 0) from bank) as outgo,
						(select income - outgo) + 
		   				(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'دریافت') -
		   				(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'پرداخت') - 
		   				(select coalesce(sum(usd),0) from general_cost) as bilance");
		$list->execute();
		$list->store_result();
		$list->bind_result($totalIncome, $totalOutgo, $total_amount);
		while ($list->fetch()) {
			$this->SetTotalIncome($totalIncome);
			$this->SetTotalOutgo($totalOutgo);
			$this->SetTotalAmount($total_amount);
		}
		?>
			<tfoot>
				<tr>
					<th colspan="6" class="installment_th">
						مجموع پرداخت : <?php echo $this->GetTotalIncome(); ?> <span style="color: red; font-weight: bolder;"> | </span>
						مجموع برداشت : <?php echo $this->GetTotalOutgo(); ?> <span style="color: red; font-weight: bolder;"> | </span>
						موجودی : <?php echo $this->GetTotalAmount(); ?>
					</th>
				</tr>
			</tfoot>
		</table>
		<?php
	}

	public function DeleteBankEntry()
	{
		require_once("connect&create.php");

		$delete = $connection->prepare("delete from bank where Bank_ID = ?");
		$delete->bind_param("i", $Bank_ID);

		$Bank_ID = $this->GetBank_ID();
		$delete->execute();
		$delete->free_result();
	}

	// this function check the bank budget for general cost to make sure that our cost isn't greater than our bank budget
	public function CheckBank()
	{
		require_once("connect&create.php");
		$check = $connection->prepare("select
			(select coalesce(sum(income), 0) - coalesce(sum(outgo), 0) FROM `bank`) + 
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'دریافت') -
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'پرداخت') - 
		   	(select coalesce(sum(usd),0) from general_cost) as bank");
		$check->execute();
		$check->store_result();
		$check->bind_result($totalIncome);
		while ($check->fetch()) {
			$this->SetTotalIncome($totalIncome);
		}
		
		echo $this->GetTotalIncome();
		$check->free_result();
	}

	// this function check the total price of one bargains for specific cost to make sure that our costs isn't greater than
	// our total price
	public function CheckBargainsTotal()
	{
		require("connect&create.php");

		$check = $connection->prepare("select total_price from bargains where B_ID = ?");
		$check->bind_param("i", $B_ID);
		$B_ID = $this->GetB_ID();
		$check->execute();	
		$check->store_result();
		$check->bind_result($totalPrice);
		while ($check->fetch()) {
			$this->SetTotalPrice($totalPrice);
		}
		echo $this->GetTotalPrice();
		$check->free_result();
	}
	// this function list all customer names for selecting one of them and see all of his bargains
	public function CustomerList()
		{
			require("connect&create.php");

			$list=$connection->prepare("select c.C_ID, c.name from customer as c inner join bargains as b on (c.C_ID = b.C_ID)
			 group by c.name order by c.name asc");
			$list->execute();
			$list->store_result();
			$list->bind_result($customer_id, $customer_name);
			while ($list->fetch()) {
				$this->SetCustomerID($customer_id);
				$this->SetCustomerName($customer_name);
				?>
				<option value= "<?php echo $this->GetCustomerID(); ?>"><?php echo $this->GetCustomerName(); ?></option>
				<?php
			}

			$list->free_result();
		}

	public function AllOfBargainsFromOneCustomer()
	{
		require_once("connect&create.php");

		if($this->GetTradeType() !== null)
		{
			$total_bargain = $connection->prepare("SELECT b.sell_or_buy, b.price_in_ton, b.number_of_cars,b.sack, b.weigh_in_Kilo, b.wastage,
			b.total_price,b.trade_date,b.approve, c.name, g.name, s.name,
	                                  
			(select coalesce(sum(`total_price`), 0) from bargains where C_ID = ? && `sell_or_buy` = 'خرید') as total_buy,
			(select coalesce(sum(`payment_amount`), 0) from installment where C_ID = ? && `trade_type` = 'پرداخت') as payed,
			(select total_buy - payed) as payable,
			   
			(select coalesce(sum(`total_price`), 0) from bargains where C_ID = ? && `sell_or_buy` = 'فروش') as total_sell,
			(select coalesce(sum(`payment_amount`), 0) from installment where C_ID = ? && `trade_type` = 'دریافت') as recieved,
			(select total_sell - recieved) as recievable
	         FROM bargains as b 
					inner join customer as c on (b.C_ID = c.C_ID)
					inner join goods as g on (b.G_ID = g.G_ID && b.Stock_ID = g.Stock_ID)
	        		inner join stock as s on (b.S_ID = s.S_ID)
	      	   where b.C_ID = ? && b.sell_or_buy LIKE ? order by b.trade_date asc");

			$total_bargain->bind_param("iiiiis", $C_ID, $C_ID, $C_ID, $C_ID, $C_ID, $tradeType);
			$C_ID = $this->GetCustomerID();
			$tradeType = "%{$this->GetTradeType()}%";
		}
		else
		{
			$total_bargain = $connection->prepare("SELECT b.sell_or_buy, b.price_in_ton, b.number_of_cars,b.sack, b.weigh_in_Kilo, b.wastage,
			b.total_price,b.trade_date, b.approve, c.name, g.name, s.name,
	                                  
			(select coalesce(sum(`total_price`), 0) from bargains where C_ID = ? && `sell_or_buy` = 'خرید') as total_buy,
			(select coalesce(sum(`payment_amount`), 0) from installment where C_ID = ? && `trade_type` = 'پرداخت') as payed,
			(select total_buy - payed) as payable,
			   
			(select coalesce(sum(`total_price`), 0) from bargains where C_ID = ? && `sell_or_buy` = 'فروش') as total_sell,
			(select coalesce(sum(`payment_amount`), 0) from installment where C_ID = ? && `trade_type` = 'دریافت') as recieved,
			(select total_sell - recieved) as recievable
	         FROM bargains as b 
					inner join customer as c on (b.C_ID = c.C_ID)
					inner join goods as g on (b.G_ID = g.G_ID && b.Stock_ID = g.Stock_ID)
	        		inner join stock as s on (b.S_ID = s.S_ID)
	      	   where b.C_ID = ? order by b.trade_date asc");

			$total_bargain->bind_param("iiiii", $C_ID, $C_ID, $C_ID, $C_ID, $C_ID);
			$C_ID = $this->GetCustomerID();
		}

		$total_bargain->execute();
		$total_bargain->store_result();
		$total_bargain->bind_result($sellOrBuy, $priceInTon, $noOfCars,$sack, $weithInKilo, $wastage, $totalPrice, $tradeDate, $approved,
		$customer_name, $goods_name, $stock_name, $total_buy, $payed, $payable, $total_sell, $recieved, $recievable);
		?>
			<table style="width: 99.8%">
         	<tbody>
				<?php
				while ($total_bargain->fetch()) {
					$this->SetSellOrBuy($sellOrBuy);
					$this->SetPriceInTon($priceInTon);
					$this->SetNumberOfCars($noOfCars);
					$this->SetSack($sack);
					$this->SetWeithInKilo($weithInKilo);
					$this->SetWastage($wastage);
					$this->SetTotalPrice($totalPrice);
					$this->SetTradeDate($tradeDate);
					$this->SetApproved($approved);
					$this->SetCustomerName($customer_name);
					$this->SetGoodsName($goods_name);
					$this->SetStockName($stock_name);
					$this->SetTotalBuy($total_buy);
					$this->SetPayed($payed);
					$this->SetPayable($payable);
					$this->SetTotalSell($total_sell);
					$this->SetReceived($recieved);
					$this->SetReceivable($recievable);
					?>
					<tr>
						<td width="70px"><?php echo $this->GetCustomerName(); ?></td>
						<td width="90px"><?php echo $this->GetGoodsName(); ?></td>
						<td width="90px"><?php echo $this->GetStockName(); ?></td>
						<td width="60px"><?php echo $this->GetPriceInTon(); ?></td>
						<td width="45px"><?php echo $this->GetNumberOfCars(); ?></td>
						<td width="63px"><?php echo $this->GetSack(); ?></td>
						<td width="100px"><?php echo $this->GetWeithInKilo(); ?></td>
						<td width="60px"><?php echo $this->GetWastage(); ?></td>
						<td width="100px"><?php echo $this->GetTotalPrice(); ?></td>
						<td width="90px"><?php echo $this->GetSellOrBuy(); ?></td>
						<td width="80"><?php echo $this->GetTradeDate(); ?></td>
						<td width="80"><?php echo $this->GetApproved(); ?></td>
					</tr>
					<?php
				}
				?>
				</tbody>
				<tfoot>
				<tr>
					<td style="background-color: black" colspan="13"></td>
				</tr>
					<tr>
						<th colspan="2">مجموع خرید</th>
						<td style="background-color: #e1eefb"><?php echo $this->GetTotalBuy(); ?></td>
						<th colspan="2">مبلغ پرداختی</th>
						<td style="background-color: #e1eefb" colspan="2"><?php echo $this->GetPayed(); ?></td>
						<th colspan="2">مبلغ قابل پرداخت</th>
						<td style="background-color: #e1eefb" ><?php echo $this->GetPayable(); ?></td>
						<th rowspan="2">
							<?php
								if($this->GetPayable() > $this->GetReceivable())
									echo "دیون";
								elseif ($this->GetPayable() < $this->GetReceivable())
								{
									echo "طلبات";
								}
							?>
						</th>
						<td rowspan="2" style="text-align: center; vertical-align: middle;background-color: #e1eefb"><?php echo($this->GetReceivable() - $this->GetPayable()); ?></td>
					</tr>
					<tr>
						<th colspan="2">مجموع فروش</th>
						<td style="background-color: #e1eefb"><?php echo $this->GetTotalSell(); ?></td>
						<th colspan="2">مبلغ دریافتی</th>
						<td style="background-color: #e1eefb" colspan="2"><?php echo $this->GetReceived(); ?></td>
						<th colspan="2">مبلغ قابل دریافت</th>
						<td style="background-color: #e1eefb"><?php echo $this->GetReceivable(); ?></td>
					</tr>
				</tfoot>
			</table>
		<?php
	}

	public function oneCustomerInstallments()
	{
		require_once("connect&create.php");

		if ($this->GetTradeType() !== null)
		{
			$installmentList = $connection->prepare("select trade_type, payment_amount, note, payment_date, approve from installment where
				C_ID = ? && trade_type LIKE ? order by payment_date asc");
			$installmentList->bind_param("is", $C_ID, $tradeType);
			$C_ID = $this->GetCustomerID();
			$tradeType = "%{$this->GetTradeType()}%";
		}
		else
		{
			$installmentList = $connection->prepare("select trade_type, payment_amount, note, payment_date, approve from installment
			where C_ID = ? order by payment_date asc");
			$installmentList->bind_param("i", $C_ID);
			$C_ID = $this->GetCustomerID();
		}

		$installmentList->execute();
		$installmentList->store_result();
		$installmentList->bind_result($sellOrBuy, $payment_amount, $note, $payment_date, $approved);
		$i = 1;
		?>
		<table style="width: 99.8%">
		<tbody>
		<?php
		while ($installmentList->fetch()) {
			$this->SetSellOrBuy($sellOrBuy);
			$this->SetPaymentAmount($payment_amount);
			$this->SetNote($note);
			$this->SetPaymentDate($payment_date);
			$this->SetApproved($approved);
			?>
				<tr>
					<td width="66px"><?php echo $i; $i++ ?></td>
					<td width="140px"><?php echo $this->GetSellOrBuy(); ?></td>
					<td width="111px"><?php echo $this->GetPaymentAmount(); ?></td>
					<td width="248px"><?php echo $this->GetNote(); ?></td>
					<td width="101px"><?php echo $this->GetPaymentDate(); ?></td>
					<td width="100px"><?php echo $this->GetApproved(); ?></td>
				</tr>
			<?php
		}
		?>
		</tbody>
		</table>
		<?php
	}
 
	/*public function DisplayInstallments()
	{
		require_once ("connect&create.php");

		$display = $connection->prepare("select c.name, g.name, i.payment_amount, i.note, i.payment_date from bargains as b
														inner join customer as c on (b.C_ID = c.C_ID)
														inner join goods as g on (b.G_ID = g.G_ID  && b.Stock_ID = g.Stock_ID)
														inner join installment as i on (b.B_ID = i.B_ID)");
		$display->execute();
		$display->store_result();
		$display->bind_result($customer_name, $goods_name, $payed_amount, $note, $payment_date);
		?>
		<table width="99.5%">
      <tbody>
      <?php
		while ($display->fetch()) {
			$this->SetCustomerName($customer_name);
			$this->SetGoodsName($goods_name);
			$this->SetPayedAmount($payed_amount);
			$this->SetNote($note);
			$this->SetPaymentDate($payment_date);
			?>
			<tr>
            <td width="20%"><?php echo $this->GetCustomerName(); ?></td>
            <td width="20%"><?php echo $this->GetGoodsName(); ?></td>
            <td width="20%"><?php echo $this->GetPayedAmount(); ?></td>
            <td width="20%"><?php echo $this->GetNote(); ?></td>
            <td width="20%"><?php echo $this->GetPaymentDate(); ?></td>
         </tr>
			<?php
		}
		?>
		</tbody>
		</table>
		<?php
		$display->free_result();
	}*/
}