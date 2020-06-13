<?php 
	/**
	* this class contain all properties and functions to adding a new customer and manage it.
	*/
	class Customers
	{
		private $customerID, $name, $lastName, $firstTel, $secondTel, $addr, $jDate, $searchValue, $approveDate, $approveResult;

		public function SetCustomerID($customerID)
		{
			$this->customerID = $customerID;
		}
		public function GetCustomerID()
		{
			return $this->customerID;
		}

		public function SetName($name)
		{
			$this->name = $name;
		}
		public function GetName()
		{
			return $this->name;
		}

		public function SetLastName($lastName)
		{
			$this->lastName = $lastName;
		}
		public function GetLastName()
		{
			return $this->lastName;
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

		public function SetAddr($addr)
		{
			$this->addr = $addr;
		}
		public function GetAddr()
		{
			return $this->addr;
		}

		public function SetjDate($jDate)
		{
			$this->jDate = $jDate;
		}
		public function GetjDate()
		{
			return $this->jDate;
		}

		public function SetSearchValue($searchValue)
		{
			$this->searchValue = $searchValue;
		}
		public function GetSearchValue()
		{
			return $this->searchValue;
		}

		public function SetApproveDate($approveDate)
		{
			$this->approveDate = $approveDate;
		}
		public function GetApproveDate()
		{
			return $this->approveDate;
		}

		public function SetApproveResult($approveResult)
		{
			$this->approveResult = $approveResult;
		}
		public function GetApproveResult()
		{
			return $this->approveResult;
		}

		public function NewCustomer()
		{
			require_once("connect&create.php");
			require_once("jalaliDate.php");

			$jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
			$jDate = $jalaliDate->date("Y/m/d");

			$newCustomer = $connection->prepare("INSERT INTO customer (name, last_name, first_tel, second_tel, address, start_date,
			approve_date) VALUES (?, ?, ?, ?, ?, '$jDate', '$jDate')");
			$newCustomer->bind_param("sssss", $name, $lastName, $firstTel, $secondTel, $addr);
			$name = $this->GetName();
			$lastName = $this->GetLastName();
			$firstTel = $this->GetFirstTel();
			$secondTel = $this->GetSecondTel();
			$addr = $this->GetAddr();

			$newCustomer->execute();
			$newCustomer->free_result();

		}

		public function DisplayCustomer()
		{
			require_once("connect&create.php");

			$display = $connection->prepare("select * from customer");
			$display->execute();
			$display->store_result();
			$display->bind_result($customerID, $name, $lastName, $firstTel, $secondTel, $addr, $jDate, $approveDate, $approveResult);
			?>
			
         	<tbody>
				<?php
					$i = 1;
					while ($display->fetch()) {
						$this->SetCustomerID($customerID);
						$this->SetName($name);
						$this->SetLastName($lastName);
						$this->SetFirstTel($firstTel);
						$this->SetSecondTel($secondTel);
						$this->SetAddr($addr);
						$this->SetjDate($jDate);
						$this->SetApproveDate($approveDate);
						$this->SetApproveResult($approveResult);
				?>
	        		<tr>
	        			<td width="45px" style="text-align:center"><?php echo $i; $i++; ?></td>
		               	<td width="90px"><?php echo $this->GetName(); ?></td>
		               	<td width="90px"><?php echo $this->GetLastName(); ?></td>
		               	<td width="98px"><?php echo $this->GetFirstTel(); ?></td>
		               	<td width="98px"><?php echo $this->GetSecondTel(); ?></td>
		               	<td width="145px"><?php echo $this->GetAddr(); ?></td>
		               	<td width="110px" style="text-align:center"><?php echo $this->GetjDate(); ?></td>
		               	<td width="110px" style="text-align:center"><?php echo $this->GetApproveDate(); ?></td>
		               	<td width="113px" style="text-align:center"><?php echo $this->GetApproveResult(); ?></td>
		               	<td  style="text-align:center">
		                	<a style="font-family: tahoma" href="edit_customer.php?id=<?php echo $this->GetCustomerID();?>&name=<?php echo $this->GetName();?>&lastName=<?php echo $this->GetLastName();?>">ویرایش</a>&nbsp;&nbsp;&nbsp;&nbsp;
		                	<a style="font-family: tahoma" class="check4delete" id="<?php echo $this->GetCustomerID();?>" href="confirm_delete_customer.php?id=<?php echo $this->GetCustomerID();?>&name=<?php echo $this->GetName();?>&lastName=<?php echo $this->GetLastName();?>">حذف</a>
		               	</td>
	            	</tr>
        		<?php
        			}
        		?>
        		</tbody>
        	
        	<?php
        	$display->free_result();
		}

		public function EditCustomer($cid)
		{
			require_once("connect&create.php");

			$edit = $connection->prepare("select * from customer where C_ID = ?");
			$edit->bind_param("i", $id);
			$id = $cid;

			$edit->execute();
			$edit->store_result();
			$edit->bind_result($customerID, $name, $lastName, $firstTel, $secondTel, $addr, $jDate, $approveDate, $approveResult);

			while ($edit->fetch()) {
				$this->SetCustomerID($customerID);
				$this->SetName($name);
				$this->SetLastName($lastName);
				$this->SetFirstTel($firstTel);
				$this->SetSecondTel($secondTel);
				$this->SetAddr($addr);
				$this->SetjDate($jDate);
				$this->SetApproveDate($approveDate);
				$this->SetApproveResult($approveResult);
			?>
			<form action="../back end/php/updateCustomer.php" method="post">
				<table>
					<tr>
						<th>آی دی</th>
						<td><input readonly id="id" name="id" type="text" size="21" value="<?php echo $this->GetCustomerID(); ?>"></td>
					</tr>
					<tr>
						<th>نام</th>
						<td><input id="customer_name" name="customer_name" type="text" size="21" value="<?php echo $this->GetName(); ?>"></td>
					</tr>
					<tr>
						<th>تخلص</th>
						<td><input id="last_name" name="last_name" type="text" size="21" value="<?php echo $this->GetLastName(); ?>"></td>
					</tr>
					<tr>
						<th>نمبر تماس 1</th>
						<td><input id="first_tel" name="first_tel" type="text" size="21" value="<?php echo $this->GetFirstTel(); ?>"></td>
					</tr>
					<tr>
						<th>نمبر تماس 2</th>
						<td><input id="second_tel" name="second_tel" type="text" size="21" value="<?php echo $this->GetSecondTel(); ?>"></td>
					</tr>
					<tr>
						<th>آدرس</th>
						<td><input id="address" name="address" type="text" size="21" value="<?php echo $this->GetAddr(); ?>"></td>
					</tr>
					<tr>
						<th>تاریخ ایجاد حساب</th>
						<td><input id="create_date" name="create_date" type="text" size="21" value="<?php echo $this->GetjDate(); ?>"></td>
					</tr>
					<tr>
						<th>تاریخ اخرین حسابی</th>
						<td><input id="approve_date" name="approve_date" type="text" size="21" value="<?php echo $this->GetApproveDate(); ?>"></td>
					</tr>
					<tr>
						<th>نتیجه حسابی</th>
						<td><input id="approve_result" name="approve_result" readonly="" type="text" size="21" 
						value="<?php echo $this->GetApproveResult(); ?>"></td>
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


		public function UpdateCustomer()
		{
			require_once("connect&create.php");

			$update = $connection->prepare("update customer set name=?, last_name=?, first_tel=?, second_tel=?, address=?, start_date=?,
			approve_date = ?, approve_result = ? where C_ID = ?");
			$update->bind_param("sssssssii", $name, $lastName, $firstTel, $secondTel, $addr, $jDate, $approveDate, $approveResult,$customerID);

			$name = $this->GetName();
			$lastName = $this->GetLastName();
			$firstTel = $this->GetFirstTel();
			$secondTel = $this->GetSecondTel();
			$addr = $this->GetAddr();
			$jDate = $this->GetjDate();
			$approveDate = $this->GetApproveDate();
			$approveResult = $this->GetApproveResult();
			$customerID = $this->GetCustomerID();

			$update->execute();
			$update->free_result();

			$update = $connection->prepare("update installment set  approve = case
												when payment_date <= ? then 'حسابی شده'
											    when payment_date > ? then '' end
											    where C_ID = ?");
			$update->bind_param("ssi", $approveDate, $approveDate, $customerID);
			$update->execute();
			$update->free_result();

			$update = $connection->prepare("update bargains set  approve = case
												when trade_date <= ? then 'حسابی شده'
											    when trade_date > ? then '' end
											    where C_ID = ?");
			$update->bind_param("ssi", $approveDate, $approveDate, $customerID);
			$update->execute();
			$update->free_result();
		}

		public function CheckCustomer4Delete()
		{
			require_once("connect&create.php");
			$check = $connection->prepare("select B_ID from bargains where C_ID = ?");
			$check->bind_param("i", $customerID);
			$customerID = $this->GetCustomerID();
			$check->execute();
			$check->store_result();
			$check->bind_result($name);
			while ($check->fetch()) {
				$this->SetName($name);
			}
			echo $this->GetName();
			$check->free_result();
		}

		public function DeleteCustomer()
		{
			require_once("connect&create.php");

			$delete = $connection->prepare("delete from customer where C_ID = ?");
			$delete->bind_param("i", $customerID);

			$customerID = $this->GetCustomerID();
			$delete->execute();
			$delete->free_result();
		}

		public function CheckCustomer()
		{
			require("connect&create.php");

			$check = $connection->prepare("select C_ID from customer where name = ?");
			$check->bind_param("s", $name);
			$name = $this->GetName();
			$check->execute();
			$check->store_result();
			$check->bind_result($customerID);
			while ($check->fetch()) {
				$this->SetCustomerID($customerID);
			}
			echo $this->GetCustomerID();
			$check->free_result();
		}

		public function ApproveResult()
		{
			require("connect&create.php");

			$approve = $connection->prepare("SELECT 

			(select sum(payment_amount) from installment where C_ID = ? && trade_type = 'پرداخت' && payment_date <= ?) -
			(select sum(total_price) from bargains where C_ID = ? && sell_or_buy = 'خرید' && trade_date <= ?) as resultOFBuy,

			(select sum(total_price) from bargains where C_ID = ? && sell_or_buy = 'فروش' && trade_date <= ?) -
			(select sum(payment_amount) from installment where C_ID = ? && trade_type = 'دریافت' && payment_date <= ?) as resultOfSell,
			(select resultOFBuy + resultOfSell) as result");

			$approve->bind_param("isisisis", $C_ID, $approveDate, $C_ID, $approveDate, $C_ID, $approveDate, $C_ID, $approveDate);
			$C_ID = $this->GetCustomerID();
			$approveDate = $this->GetApproveDate();
			$approve->execute();
			$approve->store_result();
			$approve->bind_result($totalInstallment, $totalBargains, $approveResult);
			while ($approve->fetch()) {
				$this->SetApproveResult($approveResult);
			}

			echo $this->GetApproveResult();
			$approve->free_result();
		}
	}
?>