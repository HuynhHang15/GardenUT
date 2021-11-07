$(document).ready(function(){

	getCustomers();
	getCustomerOrders();
	

	function getCustomers(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.username+'</td>'+
									          '<td>'+value.phone+'</td>'+
									        //   '<td>'+value.address+'</td>'+
									       '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){
						
						customerOrderHTML +='<tr>'+
								              '<td>'+value.id_order+'</td>'+
								              '<td>'+ value.username +'</td>'+
								              '<td>'+value.sonha+', '+value.xa+', '+value.huyen+', '+value.tinh+'</td>'+
								              '<td>'+ value.ngaydat +'</td>'+
								              '<td>'+ value.tongsl +'</td>'+
											  '<td><a class="btn btn-sm btn-info details" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span>Chi tiết</a>&nbsp;'+
								            '</tr>';
					});
						

					$("#customer_order_list").html(customerOrderHTML);
				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}

	function getOrderDetails(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_ORDER_DETAILS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var orderDetailsHTML = "";

					$.each(resp.message, function(index, value){

						orderDetailsHTML +='<tr>'+
								              '<td>'+value.id_order+'</td>'+
								              '<td>'+ value.tensp +'</td>'+
								              '<td><img width="60" height="60" src="../assets/image/sanpham/'+value.hinhanh+'"></td>'+
								              '<td>'+ value.soluong +'</td>'+
								            '</tr>';

					});

					$("#order-details").html(orderDetailsHTML);

				}else if(resp.status == 303){
					$("#order-details").html(resp.message);
				}

			}
		})
	}

	$(document.body).on('click', '.details', function(){
		var order = $.parseJSON($.trim($(this).children("span").html()));
		$("input[name='id_orderToDetails']").val(order.id_order);
		$("#product_details").modal('show');
		getOrderDetails();
	});


});