<?php

class Costs
{
	private $costID, $note, $cost, $date, $B_ID, $costType, $afgPrice, $exchangeRate, $usdPrice,$customerName, $goodsName, $tradeDate ,
	$C_ID, $totalCost, $I_ID;

	public function SetCostID($costID)
	{
		$this->costID = $costID;
	}
	public function GetCostID()
	{
		return $this->costID;
	}

	public function SetNote($note)
	{
		$this->note = $note;
	}
	public function GetNote()
	{
		return $this->note;
	}

	public function SetCost($cost)
	{
		$this->cost = $cost;
	}
	public function GetCost()
	{
		return $this->cost;
	}

	public function SetDate($date)
	{
		$this->date = $date;
	}
	public function GetDate()
	{
		return $this->date;
	}

	public function SetB_ID($B_ID)
	{
		$this->B_ID = $B_ID;
	}
	public function GetB_ID()
	{
		return $this->B_ID;
	}

	public function SetCostType($costType)
	{
		$this->costType = $costType;
	}
	public function GetCostType()
	{
		return $this->costType;
	}

	public function SetAfgPrice($afgPrice)
	{
		$this->afgPrice = $afgPrice;
	}
	public function GetAfgPrice()
	{
		return $this->afgPrice;
	}

	public function SetExchangeRate($exchangeRate)
	{
		$this->exchangeRate = $exchangeRate;
	}
	public function GetExchangeRate()
	{
		return $this->exchangeRate;
	}

	public function SetUsdPrice($usdPrice)
	{
		$this->usdPrice = $usdPrice;
	}
	public function GetUsdPrice()
	{
		return $this->usdPrice;
	}

	public function SetCustomerName($customerName)
	{
		$this->customerName = $customerName;
	}
	public function GetCustomerName()
	{
		return $this->customerName;
	}

	public function SetGoodsName($goodsName)
	{
		$this->goodsName = $goodsName;
	}
	public function GetGoodsName()
	{
		return $this->goodsName;
	}

	public function SetTradeDate($tradeDate)
	{
		$this->tradeDate = $tradeDate;
	}
	public function GetTradeDate()
	{
		return $this->tradeDate;
	}

	public function SetC_ID($C_ID)
	{
		$this->C_ID = $C_ID;
	}
	public function GetC_ID()
	{
		return $this->C_ID;
	}

	public function SetTotalCost($totalCost)
	{
		$this->totalCost = $totalCost;
	}
	public function GetTotalCost()
	{
		return $this->totalCost;
	}

	public function SetI_ID($I_ID)
	{
		$this->I_ID = $I_ID;
	}
	public function GetI_ID()
	{
		return $this->I_ID;
	}
	/**************************************************************************/
	public function NewGeneralCost()
	{
		require_once("connect&create.php");

		$newCost = $connection->prepare("insert into general_cost (note, afg, exchange_rate, usd, date) values (?, ?, ?, ?, ?)");
		$newCost->bind_param("siiis", $note, $afgPrice, $exchangeRate, $usdPrice, $date);
		$note = $this->GetNote();
		$afgPrice = $this->GetAfgPrice();
		$exchangeRate = $this->GetExchangeRate();
		$usdPrice = $this->GetUsdPrice();
		$date = $this->GetDate();
		$newCost->execute();
		$newCost->free_result();
	}

	public function DisplayGeneralCost()
	{
		require("connect&create.php");

		$displayCost = $connection->prepare("select * from general_cost");
		$displayCost->execute();
		$displayCost->store_result();
		$displayCost->bind_result($costID, $note, $afgPrice, $exchangeRate, $usdPrice, $date);
		?>
		<tbody>
		<?php
		$i = 1;
		while ($displayCost->fetch()) {
			$this->SetCostID($costID);
			$this->SetNote($note);
			$this->SetAfgPrice($afgPrice);
			$this->SetExchangeRate($exchangeRate);
			$this->SetUsdPrice($usdPrice);
			$this->SetDate($date);
			?>
			<tr class="design">
				<td class="installment_td" style="text-align:center"><?php echo $i; $i++ ?></td>
				<td class="installment_td"><?php echo $this->GetNote(); ?></td>
				<td class="installment_td"><?php echo $this->GetAfgPrice(); ?></td>
				<td class="installment_td"><?php echo $this->GetExchangeRate(); ?></td>
				<td class="installment_td"><?php echo $this->GetUsdPrice(); ?></td>
				<td class="installment_td"><?php echo $this->GetDate(); ?></td>
				<td class="installment_td" style="text-align:center">
					<a style="font-family: tahoma" href="edit_generalCost.php?id=<?php echo $this->GetCostID(); ?>">ویرایش</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-family: tahoma" href="confirm_delete_generalCost.php?id=<?php echo $this->GetCostID(); ?>">حذف</a>
				</td>
			</tr>

			<?php
		}
		?>
		</tbody>
		<?php
		$displayCost->free_result();
	}

	public function EditGeneralCost($id)
	{
		require_once("connect&create.php");

		$editCost = $connection->prepare("select * from general_cost where cost_ID = ?");
		$editCost->bind_param("i", $costID);
		$costID = $id;
		$editCost->execute();
		$editCost->store_result();
		$editCost->bind_result($costID, $note, $afgPrice, $exchangeRate, $usdPrice, $date);

		while ($editCost->fetch()) {
			$this->SetCostID($costID);
			$this->SetNote($note);
			$this->SetAfgPrice($afgPrice);
			$this->SetExchangeRate($exchangeRate);
			$this->SetUsdPrice($usdPrice);
			$this->SetDate($date);
		?>
		<form id="general_cost" action="../back end/php/updateGeneralCost.php" method="post">
			<table>
				<input hidden="" id="id" name="id" type="text" size="21" value="<?php echo $this->GetCostID(); ?>">
				<tr>
					<th>تفصیلات</th>
					<td><textarea type="text" id="note" name="note" rows="3" cols="25"><?php echo $this->GetNote(); ?></textarea></td>
				</tr>
				<tr>
					<th>مبلغ به افغانی</th>
					<td><input  id="afg" name="afg" type="text" size="21" value="<?php echo $this->GetAfgPrice(); ?>"></td>
				</tr>
				<tr>
					<th>نرخ تبادله به دالر</th>
					<td><input  id="exchange_rate" name="exchange_rate" type="text"size="21" value="<?php echo $this->GetExchangeRate();?>"></td>
				</tr>
				<tr>
					<th>مبلغ به دالر</th>
					<td><input  id="usd" name="usd" type="text" size="21" value="<?php echo $this->GetUsdPrice(); ?>"></td>
				</tr>
				<tr>
					<th>تاریخ</th>
					<td><input  id="date" name="date" type="text" size="21" value="<?php echo $this->GetDate(); ?>"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
	                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="generalCreate" type="submit">ایجاد تغییر</button>
	                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="cancel2" type="button">انصراف</button>
              		</td>
				</tr>
			</table>
		</form>
		<?php
		}
		$editCost->free_result();
	}

	public function UpdateGeneralCost()
	{
		require_once("connect&create.php");

		$updateCost = $connection->prepare("update general_cost set note = ?, afg = ?, exchange_rate = ?, usd = ?,date = ? where cost_ID = ?");
		$updateCost->bind_param("siiisi", $note, $afgPrice, $exchangeRate, $usdPrice, $date, $costID);
		$note = $this->GetNote();
		$afgPrice = $this->GetAfgPrice();
		$exchangeRate = $this->GetExchangeRate();
		$usdPrice = $this->GetUsdPrice();
		$date = $this->GetDate();
		$costID = $this->GetCostID();
		$updateCost->execute();
		$updateCost->free_result();
	}

	public function DeleteGeneralCost()
	{
		require_once("connect&create.php");

		$deleteCost = $connection->prepare("delete from general_cost where cost_ID = ?");
		$deleteCost->bind_param("i", $costID);
		$costID = $this->GetCostID();
		$deleteCost->execute();
		$deleteCost->free_result();
	}

/****************************************************************/
	public function NewSpecificCost()
	{
		require_once("connect&create.php");

		$newCost = $connection->prepare("INSERT INTO specific_cost (B_ID, cost_type, afg, exchange_rate, usd, `date`) values (?,?,?,?,?,?)");
		$newCost->bind_param("isiiis", $B_ID, $costType, $afgPrice, $exchangeRate, $usdPrice, $date);
		$B_ID = $this->GetB_ID();
		$C_ID = $this->GetC_ID();
		$goodsName = $this->GetGoodsName();
		$tradeDate = $this->GetTradeDate();
		$customerName = $this->GetCustomerName();
		$costType = $this->GetCostType();
		$afgPrice = $this->GetAfgPrice();
		$exchangeRate = $this->GetExchangeRate();
		$usdPrice = $this->GetUsdPrice();
		$date = $this->GetDate();
		$totalCost = $this->GetTotalCost();

		$newCost->execute();
		$newCost->free_result();

		$search = "مصارف معامله " . $goodsName . " با " . $customerName . " در " . $tradeDate;
		$newCost = $connection->prepare("select I_ID from installment where B_ID = ?");
		$newCost->bind_param("i", $B_ID);
		$newCost->execute();
		$newCost->store_result();
		$newCost->bind_result($I_ID);
		while ($newCost->fetch()) {
			$this->SetI_ID($I_ID);
		}
		echo "this is i id : " . $this->GetI_ID();
		echo "this is b id : " . $B_ID;
		if ($this->GetI_ID() == "") {
			$newCost = $connection->prepare("insert into installment (C_ID, B_ID, trade_type, payment_amount, note, payment_date)
											 values (?, ?, 'پرداخت', ?, ?, ?)");
			$newCost->bind_param("iiiss", $C_ID, $B_ID, $totalCost, $search, $date);
			$newCost->execute();
			$newCost->free_result();
		}
		else
		{
			$newCost = $connection->prepare("update installment set payment_amount = ?, payment_date = ? where I_ID = ?");
			$newCost->bind_param("isi", $totalCost, $date, $I_ID);
			$I_ID = $this->GetI_ID();
			$newCost->execute();
			$newCost->free_result();
		}
	}

	public function DisplaySpecificCost($id)
	{
		require("connect&create.php");
		$i = 1;
		$displayCost = $connection->prepare("SELECT s.*, b.trade_date, c.C_ID, c.name, g.name
											FROM `specific_cost` as s
											inner join bargains as b on (b.B_ID = s.B_ID)
											inner join customer as c on (c.C_ID = b.C_ID)
											inner join goods as g on (g.G_ID = b.G_ID && b.Stock_ID = g.Stock_ID)
											where s.B_ID = ?");
		$displayCost->bind_param("i", $B_ID);
		$B_ID = $id;
		$displayCost->execute();
		$displayCost->store_result();
		$displayCost->bind_result($costID, $B_ID, $costType, $afgPrice, $exchangeRate, $usdPrice, $date, $tradeDate, $C_ID, $customerName,
		 $goodsName);
		?>
		<tbody>
		<?php
		while ($displayCost->fetch()) {
			$this->SetCostID($costID);
			$this->SetB_ID($B_ID);
			$this->SetCostType($costType);
			$this->SetAfgPrice($afgPrice);
			$this->SetExchangeRate($exchangeRate);
			$this->SetUsdPrice($usdPrice);
			$this->SetDate($date);
			$this->SetTradeDate($tradeDate);
			$this->SetC_ID($C_ID);
			$this->SetCustomerName($customerName);
			$this->SetGoodsName($goodsName);
			?>
			<tr class="design">
				<td class="installment_td" style="text-align:center"><?php echo $i; $i++ ?></td>
				<td class="installment_td" ><?php echo $this->GetGoodsName() . " توسط " .  $this->GetCustomerName() ?></td>
				<td class="installment_td" ><?php echo $this->GetCostType(); ?></td>
				<td class="installment_td" ><?php echo $this->GetAfgPrice(); ?></td>
				<td class="installment_td" ><?php echo $this->GetExchangeRate(); ?></td>
				<td class="installment_td" ><?php echo $this->GetUsdPrice(); ?></td>
				<td class="installment_td" ><?php echo $this->GetDate(); ?></td>
				<td class="installment_td" style="text-align:center">
					<a style="font-family: tahoma; font-size: 14px" href="edit_specificCost.php?id=<?php echo $this->GetCostID(); ?>&cname=<?php echo $this->GetCustomerName() ?>&gname=<?php echo $this->GetGoodsName(); ?>&bid=<?php echo $this->GetB_ID(); ?>&Tdate=<?php echo $this->GetTradeDate(); ?>&C_ID=<?php echo $this->GetC_ID(); ?>">ویرایش</a>
					&nbsp;&nbsp;
					<a style="font-family: tahoma; font-size: 14px" href="confirm_delete_specificCost.php?id=<?php echo $this->GetCostID(); ?>&cname=<?php echo $this->GetCustomerName(); ?>&gname=<?php echo $this->GetGoodsName(); ?>&bid=<?php echo $this->GetB_ID(); ?>&Tdate=<?php echo $this->GetTradeDate(); ?>&C_ID=<?php echo $this->GetC_ID(); ?>">حذف</a>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
		<?php
		$displayCost = $connection->prepare("select coalesce(sum(usd),0) from specific_cost where B_ID = ?");
		$displayCost->bind_param("i", $B_ID);
		$displayCost->execute();
		$displayCost->store_result();
		$displayCost->bind_result($totalCost);
		while ($displayCost->fetch()) {
			$this->SetTotalCost($totalCost);
		}
		?>
		<tfoot>
			<tr>
				<th id="totalC" class="installment_th" colspan="8">
					مجموع مصارف : <?php echo $this->GetTotalCost() ?>
				</th>
			</tr>
		</tfoot>
		<?php
	}

	public function EditSpecificCost($id)
	{
		require ("connect&create.php");

		$editCost = $connection->prepare("SELECT s.*, b.trade_date, c.C_ID, c.name, g.name
											FROM `specific_cost` as s
											inner join bargains as b on (b.B_ID = s.B_ID)
											inner join customer as c on (c.C_ID = b.C_ID)
											inner join goods as g on (g.G_ID = b.G_ID && b.Stock_ID = g.Stock_ID)
											where s.SC_ID = ?");
		$editCost->bind_param("i", $costID);
		$costID = $id;
		$editCost->execute();
		$editCost->store_result();
		$editCost->bind_result($costID, $B_ID, $costType, $afgPrice, $exchangeRate, $usdPrice, $date, $tradeDate, $C_ID, 
			$customerName, $goodsName);

		while ($editCost->fetch()) {
			$this->SetCostID($costID);
			$this->SetB_ID($B_ID);
			$this->SetCostType($costType);
			$this->SetAfgPrice($afgPrice);
			$this->SetExchangeRate($exchangeRate);
			$this->SetUsdPrice($usdPrice);
			$this->SetDate($date);
			$this->SetTradeDate($tradeDate);
			$this->SetC_ID($C_ID);
			$this->SetCustomerName($customerName);
			$this->SetGoodsName($goodsName);
			?>
			<form id="specific_cost" action="../back end/php/updateSpecificCost.php" method="post">
				<table>
					<input hidden="" id="SC_ID" name="SC_ID" type="text" value="<?php echo $this->GetCostID(); ?>">
					<input hidden="" id="B_ID" name="B_ID" type="text" value="<?php echo $this->GetB_ID(); ?>">
					<input hidden="" id="goods" name="goods" type="text" value="<?php echo $this->GetGoodsName(); ?>">
					<input hidden="" id="customer" name="customer" type="text" value="<?php echo $this->GetCustomerName(); ?>">
					<input hidden="" id="Tdate" name="Tdate" type="text" value="<?php echo $this->GetTradeDate(); ?>">
					<input hidden="" id="C_ID" name="C_ID" type="text" value="<?php echo $this->GetC_ID(); ?>">
					<tr>
						<th>معامله</th>
						<td><input readonly="" type="text" id="trade" name="trade" size="21" 
						value="<?php echo $this->GetGoodsName() . " توسط " .  $this->GetCustomerName() ?>"></td>
					</tr>
					<tr>
						<th>تفصیلات</th>
						<td><textarea type="text" id="costType" name="costType" rows="3" cols="25"><?php echo $this->GetCostType(); ?></textarea></td>
					</tr>
					<tr>
						<th>مبلغ به افغانی</th>
						<td><input  id="afgPrice" name="afgPrice" type="text" size="21" value="<?php echo $this->GetAfgPrice(); ?>"></td>
					</tr>
					<tr>
						<th>نرخ تبادله به دالر</th>
						<td><input  id="exchangeRate" name="exchangeRate" type="text" size="21" value="<?php echo $this->GetExchangeRate(); ?>"></td>
					</tr>
					<tr>
						<th>مبلغ به دالر</th>
						<td><input  id="usdPrice" name="usdPrice" type="text" size="21" value="<?php echo $this->GetUsdPrice(); ?>"></td>
					</tr>
					<tr>
						<th>تاریخ</th>
						<td><input  id="specificDate" name="specificDate" type="text" size="21" value="<?php echo $this->GetDate(); ?>"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
		                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="specificCreate" type="submit">ایجاد تغییر</button>
		                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                  	<button style="height: 40px; width: 80px; font-size: 18px;" id="cancel1" type="button">انصراف</button>
	              		</td>
					</tr>
				</table>
			</form>
			<?php
		}
		$editCost->free_result();
	}

	public function UpdateSpecificCost()
	{
		require_once("connect&create.php");

		$updateCost = $connection->prepare("update specific_cost set cost_type = ?, afg = ?, exchange_rate = ?, usd = ?, date = ?
		where SC_ID = ?");
		$updateCost->bind_param("siiisi", $costType, $afgPrice, $exchangeRate, $usdPrice, $date, $costID);

		$costType = $this->GetCostType();
		$afgPrice = $this->GetAfgPrice();
		$exchangeRate = $this->GetExchangeRate();
		$usdPrice = $this->GetUsdPrice();
		$date = $this->GetDate();
		$costID = $this->GetCostID();
		$B_ID = $this->GetB_ID();

		$updateCost->execute();
		$updateCost->free_result();

		$updateCost = $connection->prepare("select coalesce(sum(usd),0) from specific_cost where B_ID = ?");
		$updateCost->bind_param("i", $B_ID);
		$updateCost->execute();
		$updateCost->store_result();
		$updateCost->bind_result($totalCost);
		while ($updateCost->fetch()) {
			$this->SetTotalCost($totalCost);
		}

		$updateCost->free_result();

		$updateCost = $connection->prepare("update installment set payment_amount = ? where B_ID = ?");
		$updateCost->bind_param("ii", $totalCost, $B_ID);
		$totalCost = $this->GetTotalCost();
		$updateCost->execute();
		$updateCost->free_result();

	}

	public function DeleteSpecificCost()
	{
		require_once("connect&create.php");

		$deleteCost = $connection->prepare("delete from specific_cost where SC_ID = ?");
		$deleteCost->bind_param("i", $costID);
		$costID = $this->GetCostID();
		$B_ID = $this->GetB_ID();
		$deleteCost->execute();
		$deleteCost->free_result();

		$deleteCost = $connection->prepare("select coalesce(sum(usd),0) from specific_cost where B_ID = ?");
		$deleteCost->bind_param("i", $B_ID);
		$deleteCost->execute();
		$deleteCost->store_result();
		$deleteCost->bind_result($totalCost);
		while ($deleteCost->fetch()) {
			$this->SetTotalCost($totalCost);
		}

		$deleteCost->free_result();

		$deleteCost = $connection->prepare("update installment set payment_amount = ? where B_ID = ?");
		$deleteCost->bind_param("ii", $totalCost, $B_ID);
		$totalCost = $this->GetTotalCost();
		$deleteCost->execute();
		$deleteCost->free_result();
	}
}

?>