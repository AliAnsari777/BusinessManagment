<?php
	/**
	* this class contain all functions and attributes for selling and buying goods
	*/
	class Trade
	{
		private $bargainsID, $customerID, $customerName, $goodsID, $goodsName, $stockID, $stockName, $priceInTon, $noOfCars, $sack, $buyID,
		$weithInKilo, $wastage, $totalPrice, $paymentAmount, $reminderAmount, $installment, $sellOrBuy, $tradeDate,$autoList,$profit,
		$identifier, $publicID, $searchValue, $totalBuy, $payable, $payed, $totalSell, $receivable, $received, $bank, $stockSupply, $S_ID,
		$code, $result, $editID, $checkID, $priceInTon4check, $weithInKilo4check, $reminderWeigh, $cost; 

		public function SetBargainsID($bargainsID)
		{
			$this->bargainsID = $bargainsID;
		}
		public function GetBargainsID()
		{
			return $this->bargainsID;
		}

		public function SetCustomerID($customerID)
		{
			$this->customerID = $customerID;
		}
		public function GetCustomerID()
		{
			return $this->customerID;
		}

		public function SetCustomerName($customerName)
		{
			$this->customerName = $customerName;
		}
		public function GetCustomerName()
		{
			return $this->customerName;
		}

		public function SetGoodsID($goodsID)
		{
			$this->goodsID = $goodsID;
		}
		public function GetGoodsID()
		{
			return $this->goodsID;
		}

		public function SetGoodsName($goodsName)
		{
			$this->goodsName = $goodsName;
		}
		public function GetGoodsName()
		{
			return $this->goodsName;
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

		public function SetBuyID($buyID)
		{
			$this->buyID = $buyID;
		}
		public function GetBuyID()
		{
			return $this->buyID;
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

		public function SetPaymentAmount($paymentAmount)
		{
			$this->paymentAmount = $paymentAmount;
		}
		public function GetPaymentAmount()
		{
			return $this->paymentAmount;
		}

		public function SetReminderAmount($reminderAmount)
		{
			$this->reminderAmount = $reminderAmount;
		}
		public function GetReminderAmount()
		{
			return $this->reminderAmount;
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

		// AutoList functions are used to set and get name field in customer, goods and stock tables in three different functions for
		// using in drop down lists.
		public function SetAutoList($autoList)
		{
			$this->autoList = $autoList;
		}
		public function GetAutoList()
		{
			return $this->autoList;
		}

		public function SetProfit($profit)
		{
			$this->profit = $profit;
		}
		public function GetProfit()
		{
			return $this->profit;
		}

		// publicID store ID of each table customer, goods and stock in three different functions that make drop down lists for each of them.
		public function SetPublicID($publicID)
		{
			$this->publicID = $publicID;
		}
		public function GetPublicID()
		{
			return $this->publicID;
		}		

		public function SetSearchValue($searchValue)
		{
			$this->searchValue = $searchValue;
		}
		public function GetSearchValue()
		{
			return $this->searchValue;
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

		public function SetBank($bank)
		{
			$this->bank = $bank;
		}
		public function GetBank()
		{
			return $this->bank;
		}

		public function SetStockSupply($stockSupply)
		{
			$this->stockSupply = $stockSupply;
		}
		public function GetStockSupply()
		{
			return $this->stockSupply;
		}

		public function SetS_ID($S_ID)
		{
			$this->S_ID = $S_ID;
		}
		public function GetS_ID()
		{
			return $this->S_ID;
		}

		public function SetCode($code)
		{
			$this->code = $code;
		}
		public function GetCode()
		{
			return $this->code;
		}

		public function SetResult($result)
		{
			$this->result = $result;
		}
		public function GetResult()
		{
			return $this->result;
		}

		public function SetEditID($editID)
		{
			$this->editID = $editID;
		}
		public function GetEditID()
		{
			return $this->editID;
		}

		public function SetCheckID($checkID)
		{
			$this->checkID = $checkID;
		}
		public function GetCheckID()
		{
			return $this->checkID;
		}

		public function SetPriceInTon4check($priceInTon4check)
		{
			$this->priceInTon4check = $priceInTon4check;
		}
		public function GetPriceInTon4check()
		{
			return $this->priceInTon4check;
		}

		public function SetWeithInKilo4check($weithInKilo4check)
		{
			$this->weithInKilo4check = $weithInKilo4check;
		}
		public function GetWeithInKilo4check()
		{
			return $this->weithInKilo4check;
		}

		public function SetReminderWeigh($reminderWeigh)
		{
			$this->reminderWeigh = $reminderWeigh;
		}
		public function GetReminderWeigh()
		{
			return $this->reminderWeigh;
		}

		public function SetCost($cost)
		{
			$this->cost = $cost;
		}
		public function GetCost()
		{
			return $this->cost;
		}
		// this function isn't use any more after changeing auto complete lists to drop down lists.
		// The identifier function identify in which text box user is typeing so it will define which table should search for matched case.
		/*public function SetIdentifier($identifier)
		{
			$this->identifier = $identifier;
		}
		public function GetIdentifier()
		{
			return $this->identifier;
		}*/
/********************************************************************/
		public function DisplayTrades()
		{
			require("connect&create.php");

			$display = $connection->prepare("SELECT b.B_ID, b.G_ID, b.Stock_ID, b.sell_or_buy, b.price_in_ton, b.number_of_cars, b.sack,
				b.weigh_in_Kilo, b.reminder_weigh, b.wastage, b.total_price,b.trade_date, b.profit, b.buy_ID,c.C_ID, c.name, g.name, s.name
				FROM bargains as b 
				inner join customer as c on (b.C_ID = c.C_ID)
				inner join goods as g on (b.G_ID = g.G_ID  && b.Stock_ID = g.Stock_ID)
           		inner join stock as s on (b.S_ID = s.S_ID)
           		order by b.trade_date desc");

			$display->execute();
			$display->store_result();
			$display->bind_result($bargainsID, $goodsID, $stockID, $sellOrBuy, $priceInTon, $noOfCars, $sack, $weithInKilo, $reminderWeigh,
			$wastage, $totalPrice, $tradeDate, $profit, $buyID,$customerID, $customerName, $goodsName, $stockName);
			?>
			
         	<tbody>
				<?php
				$i = 1;
				while ($display->fetch()) {
					$this->SetBargainsID($bargainsID);
					$this->SetGoodsID($goodsID);
					$this->SetStockID($stockID);
					$this->SetSellOrBuy($sellOrBuy);
					$this->SetPriceInTon($priceInTon);
					$this->SetNumberOfCars($noOfCars);
					$this->SetSack($sack);
					$this->SetWeithInKilo($weithInKilo);
					$this->SetReminderWeigh($reminderWeigh);
					$this->SetWastage($wastage);
					$this->SetTotalPrice($totalPrice);
					$this->SetTradeDate($tradeDate);
					$this->SetProfit($profit);
					$this->SetBuyID($buyID);
					$this->SetCustomerName($customerName);
					$this->SetCustomerID($customerID);
					$this->SetGoodsName($goodsName);
					$this->SetStockName($stockName);
					?>
					<tr>				
						<td width="20px"><?php echo $i; $i++?></td>	
						<td width="64px"><?php echo $this->GetCustomerName(); ?></td>
						<td width="85px"><?php echo $this->GetGoodsName(); ?></td>
						<td width="80px"><?php echo $this->GetStockName(); ?></td>
						<td width="67px"><?php echo $this->GetPriceInTon(); ?></td>
						<td width="40px"><?php echo $this->GetNumberOfCars(); ?></td>
						<td width="48px"><?php echo $this->GetSack(); ?></td>
						<td width="50px"><?php echo $this->GetWeithInKilo(); ?></td>
						<td width="70px"><?php echo $this->GetReminderWeigh(); ?></td>
						<td width="45px"><?php echo $this->GetWastage(); ?></td>
						<td width="70px"><?php echo $this->GetTotalPrice(); ?></td>
						<td width="60px"><?php echo $this->GetSellOrBuy(); ?></td>
						<td width="81px"><?php echo $this->GetTradeDate(); ?></td>
						<td width="40px"><?php echo $this->GetProfit(); ?></td>
						<td width="40px">
							<?php 
								if($this->GetSellOrBuy() == 'خرید')
						 		{
						 			echo $this->GetBargainsID(); 
						 		}
						 		else
						 		{
						 			echo $this->GetBuyID();
						 		}
						 	?>
						 </td>
						<td width="135px" style="text-align: center;">
	                	&nbsp;&nbsp;&nbsp;&nbsp;<a style=" font-family: tahoma; font-size: 13px" class="check4edit" id="<?php echo $this->GetBargainsID() . " " . 0 . " " . $this->GetSellOrBuy();?>"
	                	 href="edit_sell&buy.php?id=<?php echo $this->GetBargainsID();?>">ویرایش</a>&nbsp;&nbsp;&nbsp;&nbsp;
	                	 
	                	<a style=" font-family: tahoma; font-size: 13px" class="check4edit" id="<?php echo $this->GetBargainsID() . " " . $this->GetCustomerID() . " " . $this->GetSellOrBuy();?>"
	                	href="confirm_delete_trade.php?id=<?php echo $this->GetBargainsID();?>&name=<?php echo $this->GetCustomerName();?>&G_ID=<?php echo $this->GetGoodsID();?>&S_ID=<?php echo $this->GetStockID();?>&buy_ID=<?php echo $this->GetBuyID();?>
	                	">حذف</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                	<a style=" font-family: tahoma; font-size: 13px" href="cost.php?id=<?php echo $this->GetBargainsID();?>&goods=<?php echo $this->GetGoodsName(); ?>&customer=<?php echo $this->GetCustomerName(); ?>&Tdate=<?php echo $this->GetTradeDate(); ?>&C_ID=<?php echo $this->GetCustomerID(); ?>">ثبت مصرف</a>
						</td>
					</tr>
					<?php
				}
				?>
				</tbody>
			<?php
		}

		// this function first checks the goods table and if selected goods in a specific stock wasn't in table, first add that goods
		// in the goods table, after that insert the trade record in bargains table and at last insert the same information in installment
		// table as a first installment of that trade.
		// it is because goods table act as parent to bargains table and we must first add the new goods in goods table to be able to use 
		// it in bargains table.
		public function NewTrade()
		{
			require_once("connect&create.php");

			
			$customerID = $this->GetCustomerID();
			$goodsID = $this->GetGoodsID();
			$stockID = $this->GetStockID();
			$sellOrBuy = $this->GetSellOrBuy();
			$priceInTon = $this->GetPriceInTon();
			$noOfCars = $this->GetNumberOfCars();
			$sack = $this->GetSack();
			$weigh_in_Kilo = $this->GetWeithInKilo();
			$reminderWeigh = $this->GetWeithInKilo();
			$wastage = $this->GetWastage();
			$total_price = $this->GetTotalPrice();
			$payment_amount = $this->GetPaymentAmount();
			$reminder_amount = $this->GetReminderAmount();
			$installment = $this->GetInstallment();
			$tradeDate = $this->GetTradeDate();
			$buyID = $this->GetBuyID();
			$profit = $this->GetProfit();

			// this part check goods table to see the selected goods in the sell or buy trade is in stock or not,
			// if the selected goods wasn't in stock it means it is first time we buy that and program will add a new
			// record in goods table which define the amount of that goods in a selected stock in sell or buy trade.
			// if the selected goods was in stock program will update goods table in stock_supply field and add the
			// total weigh to it if the trade is buy or subtracte total weigh of trade from stock_supply if trade is sell.
			$newTrade = $connection->prepare("select name, stock_supply from goods where G_ID = ? && Stock_ID = ?");
			$newTrade->bind_param("ii", $goodsID, $stockID);
			$newTrade->execute();
			$newTrade->store_result();
			$newTrade->bind_result($goodsName, $stockSupply);

			while ($newTrade->fetch()) {
				$this->SetGoodsName($goodsName);
				$this->SetStockSupply($stockSupply);
			}
			
			if($this->GetGoodsName() == "")
			{
				$newTrade = $connection->prepare("select name from goods where G_ID = ? && Stock_ID = 0");
				$newTrade->bind_param("i", $goodsID);
				$newTrade->execute();
				$newTrade->store_result();
				$newTrade->bind_result($goodsName);

				while ($newTrade->fetch()) {
					$this->SetGoodsName($goodsName);
				}

				$newTrade = $connection->prepare("insert into goods (G_ID, Stock_ID, name, stock_supply) values (?, ?, ?, ?)");
				$newTrade->bind_param("iisi", $goodsID, $stockID, $goodsName, $stockSupply);
				$goodsName = $this->GetGoodsName();
				$stockSupply = $weigh_in_Kilo;
				$newTrade->execute();
				$newTrade->free_result();
			}
			else
			{
				$newTrade = $connection->prepare("update goods set stock_supply = ? where G_ID = ? && Stock_ID = ? ");
				$newTrade->bind_param("iii", $result, $goodsID, $stockID);
				$result = $this->GetStockSupply();

				if($sellOrBuy == "خرید")
				{
					$result += $weigh_in_Kilo;
				}
				elseif ($sellOrBuy == "فروش")
				{
					$result = $result - $weigh_in_Kilo ;
				}
				$newTrade->execute();
				$newTrade->free_result();
			}

			if ($sellOrBuy == "فروش")
				$reminderWeigh = 0;

			// this part add the new trade in the bargains table
			$newTrade = $connection->prepare("insert into bargains (`C_ID`, `G_ID`, Stock_ID, `S_ID`, `sell_or_buy`, `price_in_ton`, `number_of_cars`, sack, `weigh_in_Kilo`, reminder_weigh, `wastage`, `total_price`, `payment_amount`, `reminder_amount`, `trade_date`, buy_ID, profit) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$newTrade->bind_param("iiiisiiiiiiiiisii", $customerID, $goodsID, $stockID, $stockID, $sellOrBuy, $priceInTon, $noOfCars, 
			$sack, $weigh_in_Kilo, $reminderWeigh, $wastage, $total_price, $payment_amount, $reminder_amount, $tradeDate, $buyID, $profit);

			$newTrade->execute();
			$newTrade->free_result();

			if ($sellOrBuy == "فروش") 
			{
				$newTrade = $connection->prepare("select reminder_weigh from bargains where sell_or_buy = 'خرید' && B_ID = ?");
				$newTrade->bind_param("i", $buyID);
				$newTrade->execute();
				$newTrade->store_result();
				$newTrade->bind_result($reminderWeigh);
				while ($newTrade->fetch()) {
					$this->SetReminderWeigh($reminderWeigh);
				}
				$finalKilo = $this->GetReminderWeigh();

				$newTrade = $connection->prepare("update bargains set reminder_weigh = ? where sell_or_buy = 'خرید' && B_ID = ?");
				$newTrade->bind_param("ii", $weithInKilo, $buyID);
				$weithInKilo = $finalKilo - $weigh_in_Kilo;
				$newTrade->execute();
			}

			if ($payment_amount > 0)
			{	
				// this part insert the first installment of our treade into the installments table.
				$newTrade = $connection->prepare("insert into installment (C_ID,trade_type,payment_amount,note,payment_date) values (?,?,?,?,?)");
				$newTrade->bind_param("isiss", $customerID, $type, $payment_amount, $goodsNote, $tradeDate);
				$goodsName = $this->GetGoodsName();
				$goodsNote = "قسط اول (پرداخت از معامله آرد " . $goodsName . ")";
				if ($sellOrBuy == "خرید") {
					$type = "پرداخت";
				}
				else
				{
					$type = "دریافت";
				}
				$newTrade->execute();
				$newTrade->free_result();
			}	
		}

		public function EditTrade($tid)
		{
			require_once("connect&create.php");

			$edit = $connection->prepare("SELECT b.C_ID, b.G_ID, b.S_ID, b.sell_or_buy, b.price_in_ton, b.number_of_cars, b.sack, 
				b.weigh_in_Kilo, b.wastage, b.total_price, b.trade_date, b.buy_ID, c.name, g.name, s.name
				FROM bargains as b 
			 	inner join customer as c on (b.C_ID = c.C_ID)
				inner join goods as g on (b.G_ID = g.G_ID  && b.Stock_ID = g.Stock_ID)
            inner join stock as s on (b.S_ID = s.S_ID)
			 WHERE B_ID = ?");
			$edit->bind_param("i", $id);
			$id = $tid;
			$this->SetBargainsID($tid);

			$edit->execute();
			$edit->store_result();
			$edit->bind_result($customerID, $goodsID, $stockID,$sellOrBuy, $priceInTon, $noOfCars, $sack, $weithInKilo,
			$wastage, $totalPrice, $tradeDate,$buyID, $customerName, $goodsName, $stockName);

			while ($edit->fetch()) {
					$this->SetCustomerID($customerID);
					$this->SetGoodsID($goodsID);
					$this->SetStockID($stockID);
					$this->SetSellOrBuy($sellOrBuy);
					$this->SetPriceInTon($priceInTon);
					$this->SetNumberOfCars($noOfCars);
					$this->SetSack($sack);
					$this->SetWeithInKilo($weithInKilo);
					$this->SetWastage($wastage);
					$this->SetTotalPrice($totalPrice);
					$this->SetTradeDate($tradeDate);
					$this->SetBuyID($buyID);
					$this->SetCustomerName($customerName);
					$this->SetGoodsName($goodsName);
					$this->SetStockName($stockName);
					$_SESSION['oldG_ID'] = $this->GetGoodsID();
					$_SESSION['oldS_ID'] = $this->GetStockID();
				}

				$edit = $connection->prepare("select price_in_ton, reminder_weigh from bargains where B_ID = ?");
				$edit->bind_param("i", $buyID);
				$buyID = $this->GetBuyID();
				$edit->execute();
				$edit->store_result();
				$edit->bind_result($priceInTon4check, $weithInKilo4check);
				while ($edit->fetch()) {
					$this->SetPriceInTon4check($priceInTon4check);
					$this->SetWeithInKilo4check($weithInKilo4check);
				}
			?>

         	<form action="../back end/php/updateSell&buy.php" method="post">
            <table>
               <tr style="height: 44px">
                  <th>نام معامله دار</th>
                  <td>

                     <select id="autoCustomer" name="autoCustomer">
                     	<option selected="" value="<?php echo $this->GetCustomerID(); ?>"><?php echo $this->GetCustomerName(); ?></option>
                        <?php
                           $this->CustomerList();
                        ?>
                     </select>
                  </td>

                  <th>تفصیلات</th>
                  <td>
                  	<input readonly="" type="text" size="18" value="<?php echo $this->GetGoodsName(); ?>">
                  </td>

                  <th>گدام</th>
                  <td>
                     <select id="editStockID" name="stockID">
                     	<option selected="" value="<?php echo $this->GetStockID(); ?>"><?php echo $this->GetStockName(); ?></option>          
                     </select>
                  </td>

                  <th>تاریخ</th>
                  <td>
                     <input type="text" id="tradeDate" name="tradeDate" size="18" value="<?php echo $this->GetTradeDate(); ?>">
                  </td>
               </tr>
               <tr>
                  <th>تعداد موتر</th>
                  <td><input type="text" id="noOfCars" name="noOfCars" size="18" value="<?php echo $this->GetNumberOfCars(); ?>"></td>

                  <th>تعداد بوجی</th>
                  <td><input type="text" class="sack" id="sack" name="sack" size="18" value="<?php echo $this->GetSack(); ?>"></td>
                  
                  <th>مجموع به کیلو</th>
                  <td><input type="text" class="kilo" id="weithInKilo" name="weithInKilo" size="18" 
                  value="<?php echo $this->GetWeithInKilo(); ?>"></td>
                  
                  <th>کسرات</th>
                  <td><input type="text" class="sack" id="wastage" name="wastage" size="18" 
                  value="<?php echo $this->GetWastage(); ?>"></td>
               </tr>
               <tr>
                  <th>قیمت فی تن</th>
                  <td><input type="text" class="sack" id="priceInTon" name="priceInTon" size="18" 
                  value="<?php echo $this->GetPriceInTon(); ?>"></td>

                  <th>مجموع مبلغ معامله</th>
                  <td><input type="text" id="totalPrice" name="totalPrice" readonly="" size="18" 
                  value="<?php echo $this->GetTotalPrice() ; ?>"></td>

                  <th></th>
                  <td></td>

                  <th></th>
                  <td></td>
               </tr>
               <tr>  
                  <th><input type="text" hidden=""  id="buy_id" name="buy_id" value="<?php echo $this->GetBuyID(); ?>"></th>
                  <td><input type="text" hidden=""  id="buyOrSell" name="buyOrSell" 
                  value="<?php echo $this->GetSellOrBuy(); ?>"></td>

                  <th><input type="text" hidden="" id="editGoodsID" name="goodsID" value="<?php echo $this->GetGoodsID(); ?>"</th>
                  <td><input type="text" hidden="" id="profit" name="profit" value="<?php echo $this->GetPriceInTon4check(); ?>"></td>

                  <th></th>
                  <td><input type="text" hidden="" id="tradeID" name="tradeID" 
                  value="<?php echo $this->GetBargainsID(); ?>"></td>

                  <th></th>
                  <td><input type="text" hidden="" id="weithInKilo4check" value="<?php echo $this->GetWeithInKilo4check() + $this->GetWeithInKilo(); ?>"></td>
               </tr>
               <tr>
                  <td colspan="8" style="text-align: center;">
                     <button style="height: 40px; width: 80px; font-size: 18px;" id="newTrade" type="submit">ایجاد تغییر</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <button style="height: 40px; width: 80px; font-size: 18px;" id="cancel" type="button">انصراف</button>
                  </td>
               </tr>
            </table>
         </form>                  
			<?php

		}

		// this function update bargains table and two other tables that have link with it(goods and installment).
		public function UpdateTrade()
		{
			require_once ("connect&create.php");

			// in update process first system will save new data to bargains table
			$update = $connection->prepare("UPDATE `bargains` SET `C_ID`= ?,`G_ID`= ?,`Stock_ID`= ?,`S_ID`= ?, `price_in_ton`= ?,
				`number_of_cars`= ?,`sack`= ?,`weigh_in_Kilo`= ?, reminder_weigh = ?, `wastage`= ?,`total_price`= ?,
				`trade_date`= ?,`profit`= ? WHERE B_ID = ? ");

			$update->bind_param("iiiiiiiiiiisii", $customerID, $goodsID, $stockID, $stockID, $priceInTon, $noOfCars, $sack, $weithInKilo,
			$reminderWeigh, $wastage, $totalPrice, $tradeDate, $profit, $bargainsID);

			$customerID = $this->GetCustomerID();
			$goodsID = $this->GetGoodsID();
			$stockID = $this->GetStockID();
			$priceInTon = $this->GetPriceInTon();
			$noOfCars = $this->GetNumberOfCars();
			$sack = $this->GetSack();
			$weithInKilo = $this->GetWeithInKilo();
			$reminderWeigh = $weithInKilo;
			$wastage = $this->GetWastage();
			$totalPrice = $this->GetTotalPrice();
			$tradeDate = $this->GetTradeDate();
			$profit = $this->GetProfit();
			$bargainsID = $this->GetBargainsID();
			$buyID = $this->GetBuyID();
			$sellOrBuy = $this->GetSellOrBuy();

			if($sellOrBuy == "فروش")
				$reminderWeigh = 0;

			$update->execute();
			$update->free_result();

			// if user change the weigh_in_kilo textbox in sell trade, system must recalculate the reminder_weigh;
			// the first sql statment will recalculate the reminder_weigh and in other sql statment its result will
			// use to update the reminder_weigh in bargains table, so after editing a trade we would have an update record for this field
			$update = $connection->prepare("select
											(select weigh_in_Kilo from bargains where B_ID = ?) as buyKilo,
											(select coalesce(sum(`weigh_in_Kilo`),0) from bargains where buy_ID = ?) as sellKilo,
											(select buyKilo - sellKilo) as result");
			$update->bind_param("ii", $buyID, $buyID);
			$update->execute();
			$update->store_result();
			$update->bind_result($buy, $sell, $reminderWeigh);
			while ($update->fetch()) {
				$this->SetReminderWeigh($reminderWeigh);
			}

			$update = $connection->prepare("update bargains set reminder_weigh = ? where B_ID = ?");
			$update->bind_param("ii", $reminderWeigh, $buyID);
			$reminderWeigh = $this->GetReminderWeigh();
			$update->execute();
			$update->free_result();

			// after saving data in bargains table system will recalculate the goods amount in bargains table to update the stock_supply filed
			// of goods table with new information.
			$update = $connection->prepare("select 
								(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'خرید' && G_ID = ? && stock_ID = ?) as buy,
								(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'فروش' && G_ID = ? && stock_ID = ?) as sell,
								(select buy - sell) as result
								");
			$update->bind_param("iiii", $goodsID, $stockID, $goodsID, $stockID);
			$update->execute();
			$update->store_result();
			$update->bind_result($buy, $sell, $result);
			while ($update->fetch()) {
				$this->SetResult($result);
			}

			// when the above query calculate total reminder amount of edited goods it will be use in this part to update stock_supply of goods table
			$update = $connection->prepare("update goods set stock_supply = ? where G_ID = ? && Stock_ID = ?");
			$update->bind_param("iii", $stockSupply, $goodsID, $stockID);
			$stockSupply = $this->GetResult();
			$update->execute();
			$update->free_result();

			// if user change the type of goods and bring some new changes to it and save it, information of old goods will remain
			// so when the edit form is load on the page system save the bargains and stock id of loaded information in two sessions,
			// and in here system will check them with edited data and if they were different system will recalculate total reminder amount
			// of old goods and save the result in stock_supply of goods table 
			if ($_SESSION['oldG_ID'] !== $goodsID || $_SESSION['oldS_ID'] !== $stockID)
			{
				$update = $connection->prepare("select 
					(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'خرید' && G_ID = ? && stock_ID = ?) as buy,
					(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'فروش' && G_ID = ? && stock_ID = ?) as sell,
					(select buy - sell) as result
					");
				$update->bind_param("iiii", $goodsID, $stockID, $goodsID, $stockID);
				$goodsID = $_SESSION['oldG_ID'];
				$stockID = $_SESSION['oldS_ID'];
				$update->execute();
				$update->store_result();
				$update->bind_result($buy, $sell, $result);
				while ($update->fetch()) {
					$this->SetResult($result);
				}

				$update = $connection->prepare("update goods set stock_supply = ? where G_ID = ? && Stock_ID = ?");
				$update->bind_param("iii", $stockSupply, $goodsID, $stockID);
				$stockSupply = $this->GetResult();

				$update->execute();
				$update->free_result();
			}
		}

		public function DeleteTrade()
		{
			require_once("connect&create.php");

			$delete = $connection->prepare("delete from bargains where B_ID = ?");
			$delete->bind_param("i", $bargainsID);

			$bargainsID = $this->GetBargainsID();
			$delete->execute();
			$delete->free_result();

			$delete = $connection->prepare("select
											(select weigh_in_Kilo from bargains where B_ID = ?) as buyKilo,
											(select coalesce(sum(`weigh_in_Kilo`),0) from bargains where buy_ID = ?) as sellKilo,
											(select buyKilo - sellKilo) as result");
			$delete->bind_param("ii", $buyID, $buyID);
			$buyID = $this->GetBuyID();
			$delete->execute();
			$delete->store_result();
			$delete->bind_result($buy, $sell, $reminderWeigh);
			while ($delete->fetch()) {
				$a = $buy;
				$b = $sell;
				$this->SetReminderWeigh($reminderWeigh);
			}

			$delete = $connection->prepare("update bargains set reminder_weigh = ? where B_ID = ?");
			$delete->bind_param("ii", $reminderWeigh, $buyID);
			$reminderWeigh = $this->GetReminderWeigh();
			$delete->execute();
			$delete->free_result();

			$delete = $connection->prepare("select 
					(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'خرید' && G_ID = ? && stock_ID = ?) as buy,
					(select coalesce(sum(weigh_in_Kilo),0) from bargains where sell_or_buy = 'فروش' && G_ID = ? && stock_ID = ?) as sell,
					(select buy - sell) as result
					");
			$delete->bind_param("iiii", $goodsID, $stockID, $goodsID, $stockID);
			$goodsID = $this->GetGoodsID();
			$stockID = $this->GetStockID();
			$delete->execute();
			$delete->store_result();
			$delete->bind_result($buy, $sell, $result);
			while ($delete->fetch()) {
				$this->SetResult($result);
			}

			// when the above query calculate total reminder amount of deleted goods it will be use in this part to update stock_supply of goods table
			$delete = $connection->prepare("update goods set stock_supply = ? where G_ID = ? && Stock_ID = ?");
			$delete->bind_param("iii", $stockSupply, $goodsID, $stockID);
			$stockSupply = $this->GetResult();
			$delete->execute();
			$delete->free_result();
		}

		public function CheckBeforEdit()
		{
			require("connect&create.php");

			$check = $connection->prepare("select
										(select sack from bargains where buy_ID = ? group by buy_ID) as 4edite,
										                
										(select
										case when count(C_ID) > 0  then 
						 
										(select case when count(C_ID) != 1 then null else C_ID end
										from bargains where C_ID = ?  &&  sell_or_buy = ?)
						 
										 else null end 
										from installment where C_ID = ?  &&  trade_type = ?) as 4delete");

			$check->bind_param("iisis", $B_ID,$C_ID,$sellOrBuy,$C_ID,$tradeType);
			$B_ID = $this->GetEditID();
			$C_ID = $this->GetCustomerID($C_ID);
			$sellOrBuy = $this->GetSellOrBuy($sellOrBuy);
			$tradeType = $this->GetCustomerName($tradeType);

			$check->execute();
			$check->store_result();
			$check->bind_result($checkID, $publicID);
			while ($check->fetch()) {
				$this->SetCheckID($checkID);
				$this->SetPublicID($publicID);
			}
			echo $this->GetCheckID();
			echo $this->GetPublicID();
			$check->free_result();
		}

		public function CustomerList()
		{
			require("connect&create.php");

			$list = $connection->prepare("select C_ID, name from customer order by name asc");
			$list->execute();
			$list->store_result();
			$list->bind_result($publicID, $autoList);
			while ($list->fetch()) {
				$this->SetPublicID($publicID);
				$this->SetAutoList($autoList);
				?>
				<option value= "<?php echo $this->GetPublicID(); ?>"><?php echo $this->GetAutoList(); ?></option>
				<?php
			}

			$list->free_result();
		}

		public function GoodsList()
		{
			require ("connect&create.php");

			$list2 = $connection->prepare("select G_ID, name from goods where Stock_ID = 0 order by name asc");
			$list2->execute();
			$list2->store_result();
			$list2->bind_result($publicID, $autoList);
			while ($list2->fetch()) {
				$this->SetPublicID($publicID);
				$this->SetAutoList($autoList);
				?>
				<option value= "<?php echo $this->GetPublicID(); ?>"><?php echo $this->GetAutoList(); ?></option>
				<?php
			}

			$list2->free_result();
		}

		public function GoodsList4edit()
		{
			require ("connect&create.php");

			$list2 = $connection->prepare("SELECT s.name, s.S_ID from stock as s inner join goods as g on (s.S_ID = g.Stock_ID) 
				where G_ID = ?");
			$list2->bind_param("i", $goodsID);
			$goodsID = $this->GetGoodsID();
			$list2->execute();
			$list2->store_result();
			$list2->bind_result($stockName, $stockID);
			while ($list2->fetch()) {
				$this->SetStockName($stockName);
				$this->SetStockID($stockID);
				?>
				<option value= "<?php echo $this->GetStockID(); ?>"><?php echo $this->GetStockName(); ?></option>
				<?php
			}

			$list2->free_result();
		}

		public function StockList()
		{
			require ("connect&create.php");

			$list = $connection->prepare("select S_ID, name from stock order by name asc");
			$list->execute();
			$list->store_result();
			$list->bind_result($publicID, $autoList);
			while ($list->fetch()) {
				$this->SetPublicID($publicID);
				$this->SetAutoList($autoList);
				?>
				<option value= "<?php echo $this->GetPublicID(); ?>"><?php echo $this->GetAutoList(); ?></option>
				<?php
			}

			$list->free_result();
		}

		public function BudgetStatus(){
			require ("connect&create.php");
			require_once("jalaliDate.php");
	      $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
	      $jDate = $jalaliDate->date("Y/m/d");
			$budget = $connection->prepare("select

    		(select coalesce(sum(`total_price`), 0) from bargains where `sell_or_buy` = 'خرید') as total_buy,
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'پرداخت') as payed,
		   	(select total_buy -  payed) as payable,
		    
		   	(select coalesce(sum(`total_price`), 0) from bargains where `sell_or_buy` = 'فروش') as total_sell,
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'دریافت') as received,
		   	(select total_sell -  received) as receivable,

		   	(select coalesce(sum(income), 0) - coalesce(sum(outgo), 0) FROM `bank`) + 
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'دریافت') -
		   	(select coalesce(sum(payment_amount), 0) from installment where trade_type = 'پرداخت') - 
		   	(select coalesce(sum(usd),0) from general_cost) as bank,
		   	(select coalesce(sum(profit), 0) FROM `bargains` where trade_date = ?) as dailyProfit");

			$budget->bind_param("s", $trade_date);
			$trade_date = $jDate;
		   $budget->execute();
			$budget->store_result();
			$budget->bind_result($totalBuy, $payed, $payable, $totalSell, $received, $receivable, $bank, $profit);

			while ($budget->fetch())
			{
				$this->SetTotalBuy($totalBuy);
				$this->SetPayable($payable);
				$this->SetPayed($payed);
				$this->SetTotalSell($totalSell);
				$this->SetReceivable($receivable);
				$this->SetReceived($received);
				$this->SetBank($bank);
				$this->SetProfit($profit);
				?>
				<table>
				<tr>
					<th>مجموع خرید</th>
					<td width="10%" style="background-color: #e1eefb"><?php echo $this->GetTotalBuy(); ?></td>

					<th>مبلغ پرداختی</th>
					<td width="10%" style="background-color: #e1eefb"><?php echo $this->GetPayed(); ?></td>

					<th>قابل پرداخت</th>
					<td width="10%" style="background-color: #e1eefb"><?php echo $this->GetPayable(); ?></td>

					<th>موجودی بانک</th>
					<td width="10%" style="background-color: #e1eefb"><?php echo $this->GetBank(); ?></td>
				</tr>
				<tr>
					<th>مجموع فروش</th>
					<td style="background-color: #e1eefb"><?php echo $this->GetTotalSell(); ?></td>

					<th>مبلغ دریافتی</th>
					<td style="background-color: #e1eefb"><?php echo $this->GetReceived(); ?></td>

					<th>قابل دریافت</th>
					<td style="background-color: #e1eefb"><?php echo $this->GetReceivable(); ?></td>
					<th>مفاد امروز</th>
					<td style="background-color: #e1eefb"><?php echo $this->GetProfit() ?></td>
				</tr>
				</table>
				<?php
			}
			$budget->free_result();
		}

		public function List4Sell()
		{
			require ("connect&create.php");

			$list = $connection->prepare("SELECT b.B_ID, b.price_in_ton, b.reminder_weigh, b.trade_date, 
				c.name, g.G_ID, g.name, g.stock_supply, s.S_ID, s.name 
			FROM `bargains` as b 
				inner join customer as c on (b.C_ID = c.C_ID)
				inner join goods as g on (b.G_ID = g.G_ID  && b.S_ID = g.Stock_ID)
				inner join stock as s on (b.S_ID = s.S_ID)
				WHERE sell_or_buy = 'خرید'&& b.reminder_weigh != 0");
			
			$list->execute();
			$list->store_result();
			$list->bind_result($bargainsID, $priceInTon, $reminderWeigh, $tradeDate, $customerName, $goodsID, 
				$goodsName, $stockSupply, $stockID, $stockName);
			?>
				<tbody>
			<?php
			while ($list->fetch()) {
				$this->SetBargainsID($bargainsID);
				$this->SetPriceInTon($priceInTon);
				$this->SetReminderWeigh($reminderWeigh);
				$this->SetTradeDate($tradeDate);
				$this->SetCustomerName($customerName);
				$this->SetGoodsID($goodsID);
				$this->SetGoodsName($goodsName);
				$this->SetStockSupply($stockSupply);
				$this->SetStockID($stockID);
				$this->SetStockName($stockName);
				?>
				<tr class="design">
					<td width="12%"; class="body"><?php echo $this->GetCustomerName(); ?></td>
					<td width="11%"; class="body"><?php echo $this->GetGoodsName();  ?></td>
					<td width="17%"; class="body"><?php echo $this->GetPriceInTon(); ?></td>
					<td width="17%"; class="body"><?php echo $this->GetStockName(); ?></td>
					<td width="16%"; class="body"><?php echo $this->GetReminderWeigh(); ?></td>
					<td width="16%"; class="body"><?php echo $this->GetStockSupply();  ?></td>
					<td width="15%"; class="body"><?php echo $this->GetTradeDate(); ?></td>
					<td hidden="" class="body"><?php echo $this->GetBargainsID(); ?></td>
					<td hidden="" class="body"><?php echo $this->GetGoodsID(); ?></td>
					<td hidden="" class="body"><?php echo $this->GetStockID(); ?></td>
				</tr>
				<?php
			}
			?>
				</tbody>
			<?php
			$list->free_result();
		}

		public function DisplayProfit()		
		{
			require ("connect&create.php");
			$i = 1;
			if($this->GetCode() == 1)
			{
				$calculateProfit = $connection->prepare("select b.trade_date, b.profit,  coalesce(g.usd,0)  
							from (select trade_date, sum(profit) as profit from bargains group by year(trade_date), month(trade_date)) as b
							left join (select date, sum(usd) as usd from general_cost group by year(date), month(date)) as g on 
							month(b.trade_date) = month(g.date) &&  year(b.trade_date) =  year(g.date)

							union
							select g.date, 0, sum(g.usd) from 
							bargains as b
							right join general_cost as g on month(b.trade_date) =  month(g.date) &&  year(b.trade_date) =  year(g.date)
							where b.trade_date is null 
							group by year(g.date), month(g.date) ORDER BY `trade_date` DESC");
			}
			else
			{
				$calculateProfit=$connection->prepare("select b.trade_date, b.profit,  coalesce(g.usd,0)  
							from (select trade_date, sum(profit) as profit from bargains group by trade_date) as b 
							left join (select date, sum(usd) as usd from general_cost group by date) as g on b.trade_date =  g.date
							union
							select g.date, 0, sum(g.usd) from 
							bargains as b
							right join general_cost as g on b.trade_date =  g.date
							where b.trade_date is null 
							group by g.date ORDER BY `trade_date` DESC");
			}

			$calculateProfit->execute();
			$calculateProfit->store_result();
			$calculateProfit->bind_result($tradeDate, $profit, $cost);
			?>
			<table>
				<tbody>
			<?php
			while ($calculateProfit->fetch()) {
				$this->SetTradeDate($tradeDate);
				$this->SetProfit($profit);
				$this->SetCost($cost);
				?>
					<tr>
						<td width="4%"><?php echo $i ?></td>
						<td class="dateing" width="11%"><?php echo $this->GetTradeDate(); ?></td>
						<td width="11.5%"><?php echo $this->GetCost(); ?></td>
						<td width="10%"><?php echo $this->GetProfit(); ?></td>
						<td width="11%"><?php echo $this->GetProfit() - $this->GetCost(); ?></td>
					</tr>		
				<?php
				$i++;
			}
			?>
				</tbody>
			</table>
			<?php
			$calculateProfit->free_result();
		}

		public function Print4Sell()
		{
			require ("connect&create.php");

			$display = $connection->prepare("select c.name,       
										       (bs.total_price - ir.payment_amount) + (ip.payment_amount - bb.total_price) as result
												from customer as c
												inner join
												(
												    select C_ID, sum(total_price) as total_price
												    from bargains
												    where sell_or_buy = 'خرید'
												    group by C_ID
												) as bb on c.C_ID = bb.C_ID

												inner join
												(
												    select C_ID, sum(payment_amount) as payment_amount
												    from installment
												    where trade_type = 'پرداخت'
												    group by C_ID
												) as ip on c.C_ID = ip.C_ID

												inner join
												(
												    select C_ID, sum(total_price) as total_price
												    from bargains
												    where sell_or_buy = 'فروش'
												    group by C_ID
												) as bs on c.C_ID = bs.C_ID

												inner join
												(
												    select C_ID, sum(payment_amount) as payment_amount
												    from installment
												    where trade_type = 'دریافت'
												    group by C_ID
												) as ir on c.C_ID = ir.C_ID
												 order by c.name
									");
			$display->execute();
			$display->store_result();
			$display->bind_result($customerName, $reminderAmount);
			?>
			<table>
				<h1>لیست قرض داران</h1>
                <thead>
                    <tr>
                       <th width="15px">ردیف</th>
                       <th width="130px">نام معامله دار</th>
                       <th width="130px">مبلغ قرضداری</th>
                       <th width="130px">مبلغ پرداختی</th>
                    </tr>
                 </thead>
                 <tbody>
				<?php
				$i = 1;
				while ($display->fetch()) {
					$this->SetCustomerName($customerName);
					$this->SetReminderAmount($reminderAmount);
					if($this->GetReminderAmount() < 0)
					{
					?>
					<tr>
						<td width="15px"><?php echo $i ?></td>
						<td width="130px"><?php echo $this->GetCustomerName(); ?></td>
						<td width="130px"><?php echo $this->GetReminderAmount(); ?></td>
						<td width="130px"></td>
					</tr>
					<?php
					$i++;
					}
				}
				?>
				</tbody>
			</table>
			<?php
		}

		public function Print4Buy()
		{
			require ("connect&create.php");

			$display = $connection->prepare("select c.name,       
										       (bs.total_price - ir.payment_amount) + (ip.payment_amount - bb.total_price) as result
												from customer as c
												inner join
												(
												    select C_ID, sum(total_price) as total_price
												    from bargains
												    where sell_or_buy = 'خرید'
												    group by C_ID
												) as bb on c.C_ID = bb.C_ID

												inner join
												(
												    select C_ID, sum(payment_amount) as payment_amount
												    from installment
												    where trade_type = 'پرداخت'
												    group by C_ID
												) as ip on c.C_ID = ip.C_ID

												inner join
												(
												    select C_ID, sum(total_price) as total_price
												    from bargains
												    where sell_or_buy = 'فروش'
												    group by C_ID
												) as bs on c.C_ID = bs.C_ID

												inner join
												(
												    select C_ID, sum(payment_amount) as payment_amount
												    from installment
												    where trade_type = 'دریافت'
												    group by C_ID
												) as ir on c.C_ID = ir.C_ID
												 order by c.name
									");
			$display->execute();
			$display->store_result();
			$display->bind_result($customerName, $reminderAmount);
			?>
			<table>
				<h1>لیست طلب کاران</h1>
                <thead>
                    <tr>
                       <th width="15px">ردیف</th>
                       <th width="130px">نام معامله دار</th>
                       <th width="130px">مبلغ طلب</th>
                       <th width="130px">مبلغ پرداختی</th>
                    </tr>
                 </thead>
                 <tbody>
				<?php
				$i = 1;
				while ($display->fetch()) {
					$this->SetCustomerName($customerName);
					$this->SetReminderAmount($reminderAmount);
					if($this->GetReminderAmount() > 0)
					{
					?>
					<tr>
						<td width="15px"><?php echo $i ?></td>
						<td width="130px"><?php echo $this->GetCustomerName(); ?></td>
						<td width="130px"><?php echo $this->GetReminderAmount(); ?></td>
						<td width="130px"></td>
					</tr>
					<?php
					$i++;
					}
				}
				?>
				</tbody>
			</table>
			<?php
		}
		/*public function AutoList()
		{
			require_once("connect&create.php");

			if($this->GetIdentifier() == 1)
			{
				$list = $connection->prepare("select C_ID, name from customer where name LIKE ?");
				$list->bind_param("s", $customerName);
				$customerName = "%{$this->GetCustomerName()}%";
			}
			else if($this->GetIdentifier() == 2)
			{
				$list = $connection->prepare("select G_ID, name from goods where name LIKE ?");
				$list->bind_param("s", $goodsName);
				$goodsName = "%{$this->GetGoodsName()}%";
			}
			else if($this->GetIdentifier() == 3)
			{
				$list = $connection->prepare("select S_ID, name from stock where name LIKE ?");
				$list->bind_param("s", $stockName);
				$stockName = "%{$this->GetStockName()}%";
			}

			$list->execute();
			$list->store_result();
			$list->bind_result($publicID, $autoList);

			while ($list->fetch()) {
				$this->SetPublicID($publicID);
				$this->SetAutoList($autoList);
				?>
				<option value= "<?php echo $this->GetPublicID(); ?>"><?php echo $this->GetAutoList(); ?></option>
				<?php
			}

			$list->free_result();
		}*/

	}
?>