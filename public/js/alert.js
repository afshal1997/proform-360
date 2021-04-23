function alert_danger(data){
	var alert ='<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-ban"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_warning(data){
	var alert ='<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-exclamation-triangle"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_info(data){
	var alert ='<div class="alert alert-info alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-info-circle"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_success(data){
	var alert ='<div class="alert  alert-success dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-check"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function showCartMessage(data) {
    swal({
        title: "Thankyou!",
        text: `<span style="color: red">${data}</span> has been added to your cart.`,
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Continue Shopping",
        confirmButtonText: "Go to Cart",
        closeOnConfirm: false,
        html: true
    }, function () {
        window.location.href = baseUrl+"/cart";
    })
}

function js_success(data) {
	swal("Thankyou!", data , "success");
}

function js_update(data){
	swal("Updated Successfully!", data ,"success");
}

function js_error(data){
	swal("warning!", data ,"error");
}

function js_delete(data){
	swal("Deleted Successfully!", data ,"success");
}

function js_login(data){
	swal("Login Successfully!", data ,"success");
}
