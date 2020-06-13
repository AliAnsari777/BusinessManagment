<?php 
	/**
	* 
	*/
	class Stocks
	{
		private $stockID, $stockName, $staffName, $firstTel, $secondTel, $startDate, $goodsName, $stockSupply;

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

		public function SetStaffName($staffName)
		{
			$this->staffName = $staffName;
		}
		public function GetStaffName()
		{
			return $this->staffName;
		}

		public function SetFirstTel($firstTel)
		{
			$this->firstTel = $firstTel;
		}
		public function GetFirstTel()
		{
			return $this->firstTel;
		}

		public function SetSecondTel($secondTel)
		{
			$this->secondTel = $secondTel;
		}
		public function GetSecondTel()
		{
			return $this->secondTel;
		}

		public function SetStartDate($startDate)
		{
			$this->startDate = $startDate;
		}
		public function GetStartDate()
		{
			return $this->startDate;
		}

		public function SetGoodsName($goodsName)
		{
			$this->goodsName = $goodsName;
		}
		public function GetGoodsName()
		{
			return $this->goodsName;
		}

		public function SetStockSupply($stockSupply)
		{
			$this->stockSupply = $stockSupply;
		}
		public function GetStockSuplly()
		{
			return $this->stockSupply;
		}


		public function NewStock()
		{
			require_once "connect&create.php";

			$newStock = $connection->prepare("insert into stock (name, staff_name, first_tel, second_tel, start_date) values (?, ?, ?, ?, ?)");
			$newStock->bind_param("sssss", $stockName, $staffName, $firstTel, $secondTel, $startDate);

			$stockName = $this->GetStockName();
			$staffName = $this->GetStaffName();
			$firstTel = $this->GetFirstTel();
			$secondTel = $this->GetSecondTel();
			$startDate = $this->GetStartDate();
			echo $stockName . $staffName . $firstTel . $secondTel . $startDate;
			$newStock->execute();
			$newStock->free_result();
		}

		public function DisplayStockSupply()
		{
			require_once ("connect&create.php");
			$i=1;
			$supply = $connection->prepare("SELECT g.name, g.stock_supply, s.name FROM `goods` as g 
											inner join stock as s on (s.S_ID = g.Stock_ID)
											WHERE g.stock_ID != 0  && g.stock_supply != 0 order by g.name");
			$supply->execute();
			$supply->store_result();
			$supply->bind_result($goodsName, $stockSupply, $stockName);
			?>
			<div style="width: 160%">
				<table style="width: 100%">
					<thead>
						<tr>
							<th width="3%">ردیف</th>
							<th width="20%">نام گدام</th>
							<th width="20%">نام جنس</th>
							<th width="20%">موجودی در گدام</th>
						</tr>
					</thead>
				</table>
			</div>
			<div style=" height: 390px; width: 160%; overflow-y: auto;">
				<table style="width: 99%">
					<tbody>
						<?php
						while ($supply->fetch()) {
							$this->SetGoodsName($goodsName);
							$this->SetStockSupply($stockSupply);
							$this->SetStockName($stockName);
							?>
								<tr>
									<td width="7.5%"><?php echo $i; $i++ ?></td>
									<td width="20%"><?php echo $this->GetStockName(); ?></td>
									<td width="20%"><?php echo $this->GetGoodsName(); ?></td>
									<td width="20%"><?php echo $this->GetStockSuplly(); ?></td>
								</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<?php
		}

		public function DisplayStocks()
		{
			require ("connect&create.php");
			$i = 1;
			$list = $connection->prepare("select * from stock");
			$list->execute();
			$list->store_result();
			$list->bind_result($stockID, $stockName, $staffName, $firstTel, $secondTel, $startDate);
			while ($list->fetch()) {
				$this->SetStockID($stockID);
				$this->SetStockName($stockName);
				$this->SetStaffName($staffName);
				$this->SetFirstTel($firstTel);
				$this->SetSecondTel($secondTel);
				$this->SetStartDate($startDate);
				?>
					<tr class="design">
						<td style="width: 4%" class="data"><?php echo $i; ?></td>
						<td style="width: 7%" class="data"><?php echo $this->GetStockName(); ?></td>
						<td style="width: 8%" class="data"><?php echo $this->GetStaffName(); ?></td>
						<td style="width: 4%" class="data"><?php echo $this->GetFirstTel(); ?></td>
						<td style="width: 7.5%" class="data"><?php echo $this->GetSecondTel(); ?></td>
						<td style="width: 8%" class="data"><?php echo $this->GetStartDate(); ?></td>
						<td style="width: 13.5%; text-align:center" class="data">
							<a style="font-family: tahoma"  href="edit_stock.php?id=<?php echo $this->GetStockID();?>&name=<?php echo 
            				$this->GetStockName();?>">ویرایش</a>&nbsp;&nbsp;&nbsp;&nbsp;
            				<a style="font-family: tahoma" href="confirm_delete_stock.php?id=<?php echo $this->GetStockID();?>&name=<?php echo 
            				$this->GetStockName();?>">حذف</a>
						</td>
					</tr>
				<?php
				$i++;
			}
		}

		public function EditStock($id)
		{
			require ("connect&create.php");
		
			$edit = $connection->prepare("select * from stock WHERE S_ID = ?");
			$edit->bind_param("i", $S_ID);
			$S_ID = $id;
			$edit->execute();
			$edit->store_result();
			$edit->bind_result($stockID, $stockName, $staffName, $firstTel, $secondTel, $startDate);
			?>
			<form action="../back end/php/updateStock.php" method="post">
				<table>
			<?php
			while ($edit->fetch()) {
				$this->SetStockID($stockID);
				$this->SetStockName($stockName);
				$this->SetStaffName($staffName);
				$this->SetFirstTel($firstTel);
				$this->SetSecondTel($secondTel);
				$this->SetStartDate($startDate);
				?>
					<tr>
						<th>نام گدام</th>
						<td><input class="in" id="stock_name" name="stock_name" type="text" size="18" value="<?php echo $this->GetStockName(); ?>"></td>
					</tr>
					<tr>
						<th>نام مسئول گدام</th>
						<td><input class="in" id="staff_name" name="staff_name" type="text" size="18" value="<?php echo $this->GetStaffName(); ?>"></td>
					</tr>
					<tr>
						<th>نمبر تماس 1</th>
						<td><input class="in" id="firstTel" name="first_tel" type="text" size="18" value="<?php echo $this->GetFirstTel(); ?>"></td>
					</tr>
					<tr>
						<th>نمبر تماس 2</th>
						<td><input class="in" id="second_tel" name="second_tel" type="text" size="18" value="<?php echo $this->GetSecondTel(); ?>"></td>
					</tr>
					<tr>
						<th>تاریخ شروع کار</th>
						<td><input class="in" id="start_date" name="start_date" type="text" size="18" value="<?php echo $this->GetStartDate(); ?>"></td>
						<td><input id="id" name="id" hidden="true" value="<?php echo $this->GetStockID(); ?>"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
                  	<button style="height: 40px; width: 90px; font-size: 18px;" id="update_stock" type="submit">ایجاد تغییر</button>
                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	<button style="height: 40px; width: 90px; font-size: 18px;" id="cancel" type="button">انصراف</button>
	              	</td>
					</tr>
				<?php
			}
		?>
			</table>
		</form>
	<?php
		}

		public function UpdateStock()
		{
			require ("connect&create.php");

			$update = $connection->prepare("update stock set name = ?, staff_name = ?, first_tel = ?, second_tel = ?, start_date = ?
				WHERE S_ID = ?");
			$update->bind_param("sssssi", $stockName, $staffName, $firstTel, $secondTel, $startDate, $S_ID);
			$stockName = $this->GetStockName();
			$staffName = $this->GetStaffName();
			$firstTel = $this->GetFirstTel();
			$secondTel = $this->GetSecondTel();
			$startDate = $this->GetStartDate();
			$S_ID = $this->GetStockID();

			$update->execute();
			$update->free_result();
		}

		public function DeleteStock()
		{
			require_once("connect&create.php");

			$delete = $connection->prepare("delete from stock where S_ID = ?");
			$delete->bind_param("i", $S_ID);

			$S_ID = $this->GetStockID();
			$delete->execute();
			$delete->free_result();
		}

		public function CheckStock()
		{
			require("connect&create.php");

			$check = $connection->prepare("select S_ID from stock where name = ?");
			$check->bind_param("s", $name);
			$name = $this->GetStockName();
			$check->execute();
			$check->store_result();
			$check->bind_result($stockID);
			while ($check->fetch()) {
				$this->SetStockID($stockID);
			}
			echo $this->GetStockID();
			$check->free_result();
		}
	}
?>