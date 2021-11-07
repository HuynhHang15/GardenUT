<?php 
session_start();
/**
 * 
 */
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
		
	}

	public function getCustomers(){
		$query = $this->con->query("SELECT `user_id`, `username`, `phone` FROM `user_info`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'Không có dữ liệu khách hàng'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.id_order, o.sonha, o.xa, o.huyen, o.tinh, o.ngaydat, u.username, o.tongsl  FROM orders o JOIN user_info u ON o.user_id = u.user_id");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
	public function getOrderDetails($post = null){
		extract($post);
		if (!empty($id_orderToDetail)){
			$query = $this->con->query("SELECT  o.id_order, o.soluong, s.tensp ,s.hinhanh FROM order_details o JOIN sanpham s ON o.id_sanpham = s.id_sanpham WHERE o.id_order = '$id_orderToDetail'");
			$ar = [];
			if (@$query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$ar[] = $row;
					
				}
				return ['status'=> 202, 'message'=> $ar];
			}

		}
		else {
			return ['status'=> 303, 'message'=> 'no order details yet'];}
	}


}


/*$c = new Customers();
echo "<pre>";
print_r($c->getCustomers());
exit();*/

if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}


if (isset($_POST['GET_ORDER_DETAILS'])) {
	if (!empty($_POST['id_orderToDetails'])) {
		$c = new Customers();
		echo json_encode($c->getOrderDetails($_POST));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'huhu']);
		exit();
	}
}


?>