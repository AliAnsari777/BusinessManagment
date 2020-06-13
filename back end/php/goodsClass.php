<?php 
	/**
	* 
	*/
	class Goods
	{
		private $goodsID, $name, $stockSupply;

		public function SetGoodsID($goodsID)
		{
			$this->goodsID = $goodsID;
		}
		public function GetGoodsID()
		{
			return $this->goodsID;
		}

		public function SetName($name)
		{
			$this->name = $name;
		}
		public function GetName()
		{
			return $this->name;
		}

		public function SetStockSupply($stockSupply)
		{
			$this->stockSupply = $stockSupply;
		}
		public function GetStockSupply()
		{
			return $this->stockSupply;
		}

		public function NewGoods()
		{
			require_once "connect&create.php";

			$newGoods = $connection->prepare("insert into goods (Stock_ID, name, stock_supply) values (0, ?, 0)");
			$newGoods->bind_param("s", $name);

			$name = $this->GetName();

			$newGoods->execute();
			$newGoods->free_result();
		}

		public function DisplayGoods()
		{
			require_once ("connect&create.php");
			$i = 1;
			$list = $connection->prepare("select G_ID, name from goods group by name");
			$list->execute();
			$list->store_result();
			$list->bind_result($G_ID, $name);
			while ($list->fetch()) {
				$this->SetName($name);
				$this->SetGoodsID($G_ID);
				?>
					<tr class="design">
						<td style="width: 13%" class="data"><?php echo $i; ?></td>
						<td style="width: 50%" class="data"><?php echo $this->GetName(); ?></td>
						<td style="width: 60%; text-align:center" class="data" >
							<a style="font-family: tahoma" href="edit_goods.php?id=<?php echo $this->GetGoodsID(); ?>">ویرایش</a>	&nbsp;&nbsp;&nbsp;&nbsp;
							<a  style="font-family: tahoma"href="confirm_delete_goods.php?id=<?php echo $this->GetGoodsID(); ?>&name=<?php echo $this->GetName();?>">حذف</a>
						</td>
					</tr>
				<?php
				$i++;
			}
		}

		public function EditGoods($id)
		{
			require_once ("connect&create.php");

			$edit = $connection->prepare("select name from goods where G_ID = ? group by name");
			$edit->bind_param("i", $G_ID);
			$G_ID = $id;
			$edit->execute();
			$edit->store_result();
			$edit->bind_result($name);
			?>
			<form action="../back end/php/updateGoods.php" method="post">
				<table>
			<?php
				while ($edit->fetch()) {
					$this->SetName($name);
					?>
					<tr>
						<td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">نام جنس</td>
						<td><input style="text-indent: 10px; font-size: 16px; font-weight: bold" id="name" name="name" type="text" size="15"
						 value="<?php echo $this->GetName();?>"></td>
						<td><input hidden="true" id="id" name="id" value="<?php echo $G_ID; ?>"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
		               		<button style="height: 40px; width: 90px; font-size: 18px;" id="update" type="submit">ایجاد تغییر</button>
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
			$edit->free_result();
		}

		public function UpdateGoods()
		{
			require_once ("connect&create.php");

			$update = $connection->prepare("update goods set name = ? where G_ID = ?");
			$update->bind_param("si", $name, $G_ID);

			$name = $this->GetName();
			$G_ID = $this->GetGoodsID();

			$update->execute();
			$update->free_result();
		}

		public function DeleteGoods()
		{
			require_once("connect&create.php");

			$delete = $connection->prepare("delete from goods where G_ID = ?");
			$delete->bind_param("i", $G_ID);

			$G_ID = $this->GetGoodsID();
			$delete->execute();
			$delete->free_result();
		}

		public function CheckGoods()
		{
			require("connect&create.php");

			$check = $connection->prepare("select G_ID from goods where Stock_ID = 0 && name = ?");
			$check->bind_param("s", $name);
			$name = $this->GetName();
			$check->execute();
			$check->store_result();
			$check->bind_result($goodsID);
			while ($check->fetch()) {
				$this->SetGoodsID($goodsID);
			}
			echo $this->GetGoodsID();
			$check->free_result();
		}
	}
?>