jQuery('#sidebar').theiaStickySidebar({
  additionalMarginTop: 80
});
function addtocart(id)
{
  $("body").css({ opacity:0.1});
  $.get( "addtocart.php?itemid="+id)
  .done(function(data) {
    $("#detailedcart").load('detailedcart.php?mode='+method);
    alertify.success(data);
    $("body").css({ opacity:1});
  })
  .fail(function() {
    $("body").css({ opacity:1});
    alert( "Failed to add to cart. Please try again." );
  });

}

function removeitem(itemid, rm)
{
  $("body").css({ opacity:0.2});
  $.get("removefromcart.php?itemid="+itemid+"&remove="+rm)
  .done(function(data){
    if(data == 1){
      $("#ritem").attr("disabled",true);
    }
    else{
      alertify.success(data);
      $("#detailedcart").load('detailedcart.php?mode='+method);
    }
    $("body").css({ opacity:1});
    
  }).fail(function(){
    $("body").css({ opacity:1});
    alertify.success(data);
  });
  if(rm==1){
    window.location.reload();
  }
}

$(document).ready(function(){
  $("#detailedcart").load('detailedcart.php?mode='+method);
});


function goToOrder(){
  $("body").css({ opacity:0.1});
  var i = 1;
  var formvars = $('#order-form').serializeArray();
  $('#cartdetail > tr').each(function(tr){
    // console.log($(this).text().trim().replace(/\s+/g, ''));
    formvars.push({name:'items[]', value:$(this).text().trim().replace(/\s+/g, '')});
  });
  // console.log($.param(formvars));
  $.post('order.php', $.param(formvars), function(data){
    
    console.log(data);
    if(data.length > 0){
        var obj = JSON.parse(data);
        if(obj.success==1)
        {
        //   window.open('cart.php?orderid='+obj.orderid, '_self');
            window.location.assign("cart.php?mode="+method);
        }
        else{
          alertify.alert('Server Busy','Please try again.');
        }
    }
    
  })
  .fail(function() {
    $("body").css({ opacity:1});
    alert( "Failed to add to cart. Please try again." );
  });
}