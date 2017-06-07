jQuery('#sidebar').theiaStickySidebar({
  additionalMarginTop: 80
});
alertify.set('notifier','position', 'bottom-right');
$('#cat_nav a[href^="#"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 70
  }, 900, 'swing', function () {
    window.location.hash = target;
  });
});

function addtocart(id)
{
  $("body").css({ opacity:0.1});
  $.get( "addtocart.php?itemid="+id)
  .done(function(data) {
    $("#detailedcart").load('detailedcart.php');
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
    if(data != 1){
      alertify.success(data);
      $("#detailedcart").load('detailedcart.php');
    }
    else{
      $("#ritem").attr("disabled",true);
    }
    $("body").css({ opacity:1});
    
  }).fail(function(){
    $("body").css({ opacity:1});
    alertify.success(data);
  });
}

function goToOrder(){

  var radioValue = $("input[name='mode']:checked"). val();
  if(radioValue){
    window.open('cart.php?mode='+radioValue, '_self');
  }
  else{
    alertify.alert('Dining Method','You must choose a method to continue.')
  }
}

$(document).ready(function(){
  $("#detailedcart").load('detailedcart.php');
});