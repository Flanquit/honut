jQuery(function(){
    
    jQuery('body').addClass('loaded');
    
    jQuery(document).ready(function(){
        jQuery('.field input, .field-client-area input').each(function(index, item){
            if(jQuery(item).val().trim() !== '' && jQuery(item).val() !== 'Apply'){
                jQuery(item).addClass('input-active');
                jQuery(item).parent('.field, .field-client-area').find('label').addClass('label-active');
            }
        });
        jQuery('.country_select').each(function(index, item){
            if(jQuery(item).val() !== ''){
                var type = jQuery(item).attr('id').split('_');
                var cc = jQuery(item).val();
                update_country_state_zip_shipping(cc, type[0]);
            }
        });
        jQuery('.wc_payment_method').each(function(){
            if(jQuery(this).find('input').prop('checked')){
                jQuery('.'+jQuery(this).find('input').data('desc-class')).css('display', 'block');
            }
        });
        if(jQuery('#ship-to-different-address-checkbox').prop('checked')){
            jQuery('.billing_fields_title').html('Billing Information');
        }
    });
    
    jQuery(document).on('click', '.add_to_cart_button', function(e){
        e.preventDefault();
    });
    
    jQuery('.slide-container').slick({
    fade: true,
    dots: false,
    infinite: true,
    arrows: false,
    asNavFor: '.slide-images',
    autoplay: true,
    autoplaySpeed: 5000
  });
  jQuery('.slide-images').slick({
    fade: true,
    dots: false,
    infinite: true,
    arrows: false,
    asNavFor: '.slide-container'
  });
  
  jQuery('.tpreview_holder').slick({
    speed: 750,
    fade: true,
    cssEase: 'ease',
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });
  jQuery('.announce_holder').slick({
    speed: 750,
    fade: true,
    cssEase: 'ease',
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000
  });

  jQuery('#is1').slick({
    fade: true,
    dots: false,
    infinite: true,
    arrows: false
  });
  jQuery('#is2').slick({
    fade: true,
    dots: false,
    infinite: true,
    arrows: false
  });
  jQuery('#is3').slick({
    fade: true,
    dots: false,
    infinite: true,
    arrows: false
  });
    
  jQuery('#hero .arrow.left').click(function(){
    jQuery('.slide-container').slick('slickPrev');
  });
  jQuery('#hero .arrow.right').click(function(){
    jQuery('.slide-container').slick('slickNext');
  });

  jQuery('#ings .arrow.left').click(function(){
    jQuery('#ings #is1').slick('slickPrev');
  });
  jQuery('#ings .arrow.right').click(function(){
    jQuery('#ings #is1').slick('slickNext');
  });

  jQuery('[data-faq]').click(function(){
    var target = jQuery('#' + jQuery(this).data('faq'));
    jQuery('html,body').animate({scrollTop: target.offset().top - 100}, 500);
  });

  jQuery('.slide-control span').click(function(){
    var id = $(this).data('id');
    jQuery('.slide-container').slick('slickGoTo', id);
  });

  jQuery('#ings .column ul li').click(function(){
    var id = jQuery(this).data('slide');
    jQuery('#ings #is1').slick('slickGoTo', id);
    jQuery('#ings #is2').slick('slickGoTo', id);
    jQuery('#ings #is3').slick('slickGoTo', id);
  });

  jQuery('#ings #is1').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    jQuery('#ings .column ul li').removeClass('active');
    jQuery('#ings .column ul li:nth-child('+(++nextSlide)+')').addClass('active');
  });

  jQuery('.slide-container').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    jQuery('.slide-control').removeClass('active-0 active-1 active-2').addClass('active-'+nextSlide);
  });
  
  // HOW IT WORKS SLIDE

  var active = 1;
  var scroll = 0;
  var $target = jQuery('#slide');
  jQuery('.change-slide.next').click(function(){
    if(scroll == 11)
      scroll = 0;
    else
      ++scroll;
    if(active == 3)
      active = 1;
    else
      ++active;
    
    rotateRight();
      
    $target
      .removeClass('left right r-left r-right active-1 active-2 active-3 scroll-0 scroll-1 scroll-2 scroll-3 scroll-4 scroll-5 scroll-6 scroll-7 scroll-8 scroll-9 scroll-10 scroll-11')
      .addClass('right r-right active-' + active);
  })

  jQuery('.change-slide.prev').click(function () {
    if (scroll == 0)
      scroll = 11;
    else
      --scroll;
    if (active == 1)
      active = 3;
    else
      --active;

    rotateLeft();
    
    $target
      .removeClass('left right r-left r-right active-1 active-2 active-3 scroll-0 scroll-1 scroll-2 scroll-3 scroll-4 scroll-5 scroll-6 scroll-7 scroll-8 scroll-9 scroll-10 scroll-11')
      .addClass('left r-left active-' + active);
  })

  rotateRight();
  rotateLeft();

  function rotateRight(){
    var s = 0;
    var intr = setInterval(function(){
      if(s == 11){
        s = 0;
        clearInterval(intr);
      } else {
        ++s;
      }
      $target
        .removeClass('scroll-0 scroll-1 scroll-2 scroll-3 scroll-4 scroll-5 scroll-6 scroll-7 scroll-8 scroll-9 scroll-10 scroll-11')
        .addClass('scroll-' + s);
    }, 50)
  }

  function rotateLeft() {
    var s = 12;
    var intr = setInterval(function () {
      if (s == 0) {
        clearInterval(intr);
      } else {
        --s;
      }
      $target
        .removeClass('scroll-0 scroll-1 scroll-2 scroll-3 scroll-4 scroll-5 scroll-6 scroll-7 scroll-8 scroll-9 scroll-10 scroll-11')
        .addClass('scroll-' + s);
    }, 50)
  }
  
  var controller = new ScrollMagic.Controller();
  var showArray = [];
  var isHiw4 = false;

  setTimeout(function() {

    jQuery('.show-me').each(function(i,v){

      var $self = jQuery(this);
      var id = '#' + $self.attr('id');

     
      showArray[i] = new ScrollMagic.Scene({
        triggerElement: id,
        duration: $self.outerHeight()
        //offset: 0
      })
      .addTo(controller);

      showArray[i].on('enter',function(){
        $self.addClass('show');
        isHiw4 = false;
        if($self.hasClass('black-nav')){
          jQuery('header').addClass('black-nav');
          jQuery('.client-nav').addClass('black-nav');
      } else {
          jQuery('header').removeClass('black-nav');
          jQuery('.client-nav').removeClass('black-nav');
      }    
        if(id == '#ings')
          jQuery('#fixed-list').css('opacity', '1');
        if(id == '#buy' || id == '#hero')
          jQuery('#fixed-list').css('opacity', '0');
        if(id == '#hiw4'){
          isHiw4 = true;
          rotateImage();          
        }  
      });
      showArray[i].on('leave',function(){
        //$self.removeClass('show');
      });

    });

  }, 2000);

  setTimeout(function() {
    if(window.innerWidth > 1000)
      parallax();
  }, 1000);
  function parallax(){
    jQuery(window).scroll(function() {
      jQuery('[data-speed]').each(function() {
          var $scroll = jQuery(this);
          var yPos    = -((jQuery(window).scrollTop() - $scroll.closest('.parallax').offset().top) / $scroll.data('speed'));
          var top     = yPos + 'px';
          TweenLite.to($scroll, 1, {'top': top, ease: "Circ.easeOut"});
        });
      });
    }

  rotateImage();
  function rotateImage(){
    if(isHiw4){
      jQuery(window).scroll(function () {
        var st = (jQuery(window).scrollTop() + 350) - jQuery('#hiw4').offset().top;
        var height = jQuery('#hiw4').outerHeight();
        var s = parseInt(st * 12 / height);
        if(s >= 0 && s < 12)
          jQuery('#hiw4').removeClass('scroll-0 scroll-1 scroll-2 scroll-3 scroll-4 scroll-5 scroll-6 scroll-7 scroll-8 scroll-9 scroll-10 scroll-11').addClass('scroll-' + s);
      });
    }
  }


  jQuery('.arrow-up').click(function(){
    jQuery('html,body').animate({scrollTop: 0}, 700);
  });

  jQuery('.follow, .hero-bottom').click(function(){
    jQuery('html,body').animate({scrollTop: window.innerHeight + 175}, 700);
  });
  jQuery('.toggle-nav').click(function(){
    jQuery(this).toggleClass('active');
    jQuery('.toggle-cart').toggleClass('active');
    jQuery('.client-nav-wrapper').toggleClass('hide');

    jQuery('.header-logo').find('img').attr('src', jQuery('.header-logo').find('img').attr('src').replace('red', 'white'));

    if(jQuery('#menu').hasClass('active')){
        jQuery('#menu').toggleClass('active');
        jQuery('.header-logo').find('img').attr('src', jQuery('.header-logo').find('img').attr('src').replace('white', 'red'));
    }else if(jQuery('#cart-content').hasClass('active')){
        jQuery('#cart-content').toggleClass('active');
        jQuery('.header-logo').find('img').attr('src', jQuery('.header-logo').find('img').attr('src').replace('white', 'red'));
    }else{
        jQuery('#menu').toggleClass('active');
    }
    });
    jQuery('.toggle-cart').click(function(){
        jQuery(this).addClass('active');
        jQuery('.toggle-nav').addClass('active');
        jQuery('.client-nav-wrapper').addClass('hide');
        jQuery('#cart-content').addClass('active');
        jQuery('.header-logo').find('img').attr('src', jQuery('.header-logo').find('img').attr('src').replace('red', 'white'));
    });
    jQuery(document).on('click', '.continue-shopping span', function(){
        jQuery('#cart-content').toggleClass('active');
        jQuery('.toggle-cart').toggleClass('active');
        jQuery('.toggle-nav').toggleClass('active');
        jQuery('.header-logo').find('img').attr('src', jQuery('.header-logo').find('img').attr('src').replace('white', 'red'));
    });
    jQuery(document).on('mouseenter', '.remove', function(){
        jQuery(this).addClass('rhover');
        jQuery(this).find('span').toggleClass('rshover');
      }).on('mouseleave', '.remove', function(){
        jQuery(this).find('span').toggleClass('rshover');
      });
    jQuery(document).on('click', '.wc_payment_method', function(){
        jQuery(this).find('input').prop('checked', true);
        jQuery('.wc_payment_method').each(function(){
            if(jQuery(this).find('input').prop('checked')){
                jQuery('.'+jQuery(this).find('input').data('desc-class')).css('display', 'block');
            } else {
                jQuery('.'+jQuery(this).find('input').data('desc-class')).css('display', 'none');
            }
        });
    });
    jQuery(document).on('click', '.remove', function(){
        jQuery.ajax({
            url: jQuery(this).data('url'),
            type: 'get',
            success:function(data){
                var page_reload = jQuery(data);
                
                jQuery('.cart-body').html(page_reload.find('.cart-body'));
                jQuery('#mini-cart').html(page_reload.find('#mini-cart'));
                if(window.location.pathname === '../checkout/index.html'){
                    jQuery('.woocommerce-checkout-review-order-table').html(page_reload.find('.woocommerce-checkout-review-order-table').html());
                }
                
                jQuery('.flash-cart').removeClass('error');
                jQuery('.flash-cart').html('Product Removed From Cart.');
            },
            error:function(error){
                jQuery('.flash-cart').addClass('error');
                jQuery('.flash-cart').html('Error! Please try again later.');
                console.error(error);
            }
        });
        
    });
    jQuery(document).on("click", ".cart-quantity .cart-minus", function(){
        var current = parseInt(jQuery(this).closest('.cart-quantity').find('.item-quantity').html())-1;
        if(current > 0){
            jQuery(this).closest('.cart-quantity').find('.item-quantity').html(current);
            jQuery(this).closest('.cart-quantity').find('input').val(current);
            update_cart_qty(jQuery(this).closest('.cart-quantity').find('.item-quantity'));
        }
    });
    jQuery(document).on("click", ".cart-quantity .cart-plus", function(){
        var current = parseInt(jQuery(this).closest('.cart-quantity').find('.item-quantity').html())+1;
        if(current < 11){
            jQuery(this).closest('.cart-quantity').find('.item-quantity').html(current);
            jQuery(this).closest('.cart-quantity').find('input').val(current);
            update_cart_qty(jQuery(this).closest('.cart-quantity').find('.item-quantity'));
        }
    });
    jQuery(document).on("click", ".add_to_cart_shop", function(){
        jQuery(this).html('Going To Checkout... <i class="fa fa-circle-o-notch fa-spin"></i>');
        //setTimeout(function(){ window.location.href='checkout/'; }, 1000);   
    });
    function update_cart_qty (e){
        
        var item_qty = e.closest('.cart-quantity').find('input').val();
        var item_key = e.closest('.cart-quantity').find('input').data('item-key');
        var current_url = window.location.pathname;
        jQuery.ajax({
            url: ajax_obj.ajaxurl,
            type: 'post',
            data:{
                action: 'update_cart_qty',
                security: ajax_obj.ajax_nonce,
                item_key: item_key,
                item_qty: item_qty,
                current_url: current_url
            },
            success:function(success){
                var data = jQuery.parseJSON(success);
                if(data['result'] === 'success'){
                    jQuery('#mini-cart').html(data['minicart_content']);
                    jQuery('#cart-content').html(data['cart_content']);
                    if(current_url === '../checkout/index.html'){
                        jQuery('.woocommerce-checkout-review-order-table').html(data['order_review_content']);
                    }
                    jQuery('.flash-cart').removeClass('error');
                    jQuery('.flash-cart').html('Product Quantity Updated');
                } else {
                    console.error(data['result']);
                    jQuery('.flash-cart').addClass('error');
                    jQuery('.flash-cart').html('Error! Please try again later.');
                }
            },
            error:function(error){
                console.error(error);
                jQuery('.flash-cart').addClass('error');
                jQuery('.flash-cart').html('Error! Please try again later.');
            }
        });
    }
    jQuery(document).on('change', '.country_select', function(){
        var type = jQuery(this).attr('id').split('_');
        update_country_state_zip_shipping(jQuery(this).val(), type[0]);
    });
    jQuery(document).on('click', '.shipping_method', function(){
       if(jQuery(this).prop('checked', true)){
           var shipping_method = jQuery(this).attr('value');
           var data_index = jQuery(this).data('index');
           jQuery.ajax({
            type:'post',
            url: ajax_obj.ajaxurl,
            data:{
                action: 'set_shipping_method',
                security: ajax_obj.ajax_nonce,
                shipping_method: shipping_method,
                data_index: data_index
            },
            success:function(success){
                var data = jQuery.parseJSON(success);
                if(data['response'] === 'success'){
                   var page_reload = jQuery(data['checkout_page_content']);
                   jQuery('.woocommerce-checkout-review-order-table').html(page_reload.find('.woocommerce-checkout-review-order-table').html());
                   jQuery('.trial-offer-notification').html(data['trial_notification']);
                   jQuery('.trial-offer-notification').fadeIn();
                } else {
                   console.error(data['response']); 
                }
            },
            error:function(error){
                console.error(error);
            }
            });
       } 
    });
    jQuery(document).on('change', '#createaccount', function(){
       if(jQuery(this).prop('checked')){ 
           jQuery('#account_password_field').toggleClass('field-hidden');
           jQuery('.show_password').css('display', 'block');
       } else {
           jQuery('#account_password_field').toggleClass('field-hidden');
           jQuery('.show_password').css('display', 'none');
       }
    });
    jQuery(document).on('click', '.show_password', function(){
        if(!jQuery(this).hasClass('show_password_active')){
            jQuery(this).toggleClass('show_password_active');
            jQuery(this).find('i').attr('class', 'fa fa-eye');
            jQuery(this).parent('.create-account').find('input').attr('type', 'text');
        } else {
            jQuery(this).toggleClass('show_password_active');
            jQuery(this).find('i').attr('class', 'fa fa-eye-slash');
            jQuery(this).parent('.create-account').find('input').attr('type', 'password');
        }
    });
    jQuery(document).on('input', '.field input, .field-client-area input', function(){
        if(jQuery(this).val().length > 0 && !jQuery(this).hasClass('input-active')){
            jQuery(this).addClass('input-active');
            jQuery(this).parent('p').find('label').addClass('label-active');
        } else if(jQuery(this).val().length === 0 && jQuery(this).hasClass('input-active')) {
            jQuery(this).removeClass('input-active');
            jQuery(this).parent('p').find('label').removeClass('label-active');
        }
    });
    jQuery(document).on('input', '#coupon_code', function(){
        if(jQuery(this).val().length > 0){
            jQuery('.btn-coupon').addClass('btn_active');
        } else {
            jQuery('.btn-coupon').removeClass('btn_active');
        }
    });
    jQuery(document).on('click', '.btn-coupon', function(){
        var coupon_code = jQuery('#coupon_code').val();
        if(coupon_code.length > 0){
            jQuery.ajax({
            type:'post',    
            url: ajax_obj.ajaxurl,
            data:{
                action: 'apply_coupon',
                security: ajax_obj.ajax_nonce,
                coupon_code: coupon_code
            },
            success:function(success){
                var data = jQuery.parseJSON(success);
                if(data['result'] === 'success'){
                    var page_reload = jQuery(data['page_reload']);
                    jQuery('.woocommerce-checkout-review-order-table').html(page_reload.find('.woocommerce-checkout-review-order-table').html());
                    jQuery('#cart-content').html(data['cart_content']);
                } else {
                    console.error(data['result']);
                }
            },
            error:function(error){
                console.error(error);
            }
            });
        }
        return false;
    });
    jQuery(document).on('click', '.checkout-remove-coupon', function(){
        jQuery.ajax({
        type:'post',    
        url: ajax_obj.ajaxurl,
        data:{
            action: 'remove_coupon',
            security: ajax_obj.ajax_nonce,
            coupon_code: jQuery(this).data('coupon-code')
        },
        success:function(success){
            var data = jQuery.parseJSON(success);
            if(data['result'] === 'success'){
                var page_reload = jQuery(data['page_reload']);
                jQuery('.woocommerce-checkout-review-order-table').html(page_reload.find('.woocommerce-checkout-review-order-table').html());
                jQuery('#cart-content').html(data['cart_content']);
            } else {
                console.error(data['result']);
            }
        },
        error:function(error){
            console.error(error);
        }
        });
        return false;
    });
    jQuery(document).on('focusin', '.field input, .field-select select, .field-client-area input', function(){
        if(!jQuery(this).hasClass('field_input_focus')){
            if(!jQuery(this).hasClass('btn-coupon')){
                jQuery(this).addClass('field_input_focus');
            }
        }
    }).on('focusout', '.field input, .field-select select, .field-client-area input', function(){
        var data = [jQuery(this).attr('id'), jQuery(this).val()]; 
        if(validate_input_data(false, data)){
            jQuery(this).removeClass('field_input_focus');
            jQuery(this).removeClass('field_input_focus_red');
        } else {
            jQuery(this).addClass('field_input_focus_red');
        }
    });
    jQuery(document).on('click', '#place_order', function(){
        jQuery('.input-validation-errors').html(''); 
        var validation_pass = true;
        
        jQuery(this).toggleClass('submit-inactive');
        
        jQuery('.field input, .field-select select').each(function(){
            var target_id = jQuery(this).attr('id');
            var target_data = jQuery(this).val();
            if(target_id !== 'account_password' && target_id !== 'coupon_code' && target_id !== 'btn-coupon' && target_id.indexOf('company') < 0 && target_id.indexOf('address_2') < 0 && !jQuery(this).parent('p').hasClass('field-hidden')){
                if(jQuery('#ship-to-different-address-checkbox').prop('checked')){
                   if(!validate_input_data(false, [target_id, target_data])){insert_validation_errors(true, target_id, target_data); validation_pass = false;}
                } else if (target_id.indexOf('shipping') < 0){
                   if(!validate_input_data(false, [target_id, target_data])){insert_validation_errors(false, target_id, target_data); validation_pass = false;}
                }
            } else if (target_id === 'account_password' && jQuery('#createaccount').prop('checked')){
                if(!validate_input_data(false, [target_id, target_data])){
                    insert_validation_errors(true, target_id, target_data); validation_pass = false;
                } else {
                    if(validate_input_data(false, ["billing_email", jQuery('#billing_email').val()])){
                     if(!check_user_exists(jQuery('#billing_email').val())){
                         jQuery('.input-validation-errors').append('<div class="col-12" style="display:none;" data-field-id="'+target_id+'"><i class="fa fa-exclamation" aria-hidden="true"></i>A Client with this E-mail Address already exists</div>');
                     }
                    }
                }
            }
        });
        if(!validation_pass){
            jQuery('.input-validation-errors div').each(function(i, item){
                setTimeout(function(){
                    jQuery(item).fadeIn();
                    if(!jQuery('#'+jQuery(item).data('field-id')).hasClass('field_input_focus_red')){
                        jQuery('#'+jQuery(item).data('field-id')).addClass('field_input_focus_red');
                    }
                }, i*25);
            });
            jQuery(this).toggleClass('submit-inactive');
            return false;
        }
        
    });
    function check_user_exists(email){
        jQuery.ajax({
        type:'post',    
        url: ajax_obj.ajaxurl,
        data:{
            action: 'check_user_exists',
            security: ajax_obj.ajax_nonce,
            email: email
        },
        success:function(success){
            var data = jQuery.parseJSON(success);
            if(data['result'] !== 'success'){
                console.error(data['result']);
            } else if(data['user'] === 'not_found') {
                return true;
            } else {
                return false;
            }
        },
        error:function(error){
            console.error(error);
        }
        });
    }
    function insert_validation_errors(ship_diff, id, data){
        if(id === 'billing_email'){
            var field_name = 'E-mail address';
            
        } else {
            var name_split = id.split('_');
            var field_name = '';
            var i;
            for (i=0; i<name_split.length; ++i){
                if(!ship_diff && i === 0){
                    field_name = 'Billing/Shipping';
                } else {
                    if(name_split[i].length > 1){
                        field_name = field_name+' '+cap_word(name_split[i]);
                    }
                }
            }
        }
        if (data.length === 0){
            var error = ' cannot be empty';
        } else {
            var error = ' is not valid';
        }
        jQuery('.input-validation-errors').append('<div class="col-12" style="display:none;" data-field-id="'+id+'"><i class="fa fa-exclamation" aria-hidden="true"></i>'+(field_name+error).trim()+'</div>');
    }
    function cap_word(i){
        return i.substr(0,1).toUpperCase()+i.substr(1);
    }
    function validate_input_data(store, data){
      
        if(data[0] === 'billing_email'){
              var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              if(regex.test(data[1])){
                  if(store){store_input_data(data);}
                  return true;
              } else {
                  return false;
              }

        } else if(data[0] === 'billing_phone'){
              var regex = /^[0-9-+\(\)\s]+$/;
              if(regex.test(data[1])){
                  if(store){store_input_data(data);}
                  return true;
              } else {
                  return false;
              }
        } else if(data[0] === 'billing_company' || data[0] === 'shipping_company' || data[0] === 'billing_address_2' || data[0] === 'shipping_address_2'){
              if(data[1].trim().length !== 0){
                  if(store){store_input_data(data);}
              }
              return true;
        } else if (data[0] === 'billing_state' || data[0] === 'billing_postcode' || data[0] === 'shipping_state' || data[0] === 'shipping_postcode'){
            if(data[1].trim().length === 0 && jQuery('#'+data[0]).parent('p').hasClass('field-hidden')){
                return true;
            } else if (data[1].trim().length === 0 && !jQuery('#'+data[0]).parent('p').hasClass('field-hidden')){
                return false;
            } else {
                if(store){store_input_data(data);}
                return true;
            }
        } else if (data[0] === 'account_password'){
            if(data[1].trim().length === 0){
                return false;
            } else {
                return true;
            }
        } else if (data[0] === 'coupon_code' || data[0] === 'btn-coupon'){
            return true;
        } else {
            if(data[1].trim().length === 0){
              return false;
            } else {
              if(store && data[0] !== 'billing_country' && data[0] !== 'shipping_country'){
                  store_input_data(data);
              }
              return true;
            }
        }
    }
    function store_input_data(data){
        jQuery.ajax({
          type:'post',    
          url: ajax_obj.ajaxurl,
          data:{
              action: 'store_input_data',
              security: ajax_obj.ajax_nonce,
              data_id: data[0],
              data: data[1]
          },
          success:function(success){
              var data = jQuery.parseJSON(success);
              if(data['response'] !== 'success'){
                  console.error(data['response']);
              }
          },
          error:function(error){
              console.error(error);
          }
          });
    }
    jQuery(document).on('change', '#ship-to-different-address-checkbox', function(){
        if(jQuery(this).prop('checked')){ 
            jQuery('.shipping_address').css('display', 'block');
            jQuery('.billing_fields_title').html('Billing information');
            var target = 'true';
        } else {
            jQuery('.shipping_address').css('display', 'none');
            jQuery('.billing_fields_title').html('Billing & Shipping information');
            var target = 'false';
        }
        jQuery.ajax({
             type:'post',    
             url: ajax_obj.ajaxurl,
             data:{
                 action: 'ship_different_session_update',
                 security: ajax_obj.ajax_nonce,
                 target: target
             }
         });
     });
     function update_country_state_zip_shipping(cc, type){
     if(type === 'billing' && jQuery('#ship-to-different-address-checkbox').prop('checked')){ 
         var update_shipping = false;
     } else {
         var update_shipping = true;
     }
     jQuery.ajax({
         type:'post',    
         url: ajax_obj.ajaxurl,
         data:{
             action: 'get_country_data',
             security: ajax_obj.ajax_nonce,
             country_code: cc,
             update_shipping: update_shipping,
             information_type: type
         },
         success:function(success){
             var data = jQuery.parseJSON(success);
             if(data['response'] === 'success'){
                 if(data['country_states'] === false && data['country_zip'] === false){
                     //Country Filed
                     jQuery('#'+type+'_country_field').attr('class', 'form-row field-select form-group single-country');
                     //State Filed
                     jQuery('#'+type+'_state_field').attr('class', 'form-row field-select field-hidden field-center form-group');
                     //Postcode Filed
                     jQuery('#'+type+'_postcode_field').attr('class', 'form-row field field-50 field-hidden field-right form-group');
                 } else if (data['country_states'] === false && data['country_zip'] !== false){
                     //Country Filed
                     jQuery('#'+type+'_country_field').attr('class', 'form-row field-select field-50 field-left form-group single-country');
                     //State Filed
                     jQuery('#'+type+'_state_field').attr('class', 'form-row field-select field-hidden field-center form-group');
                     //Postcode Filed
                     jQuery('#'+type+'_postcode_field').attr('class', 'form-row field field-50 field-right form-group');
                 } else if (data['country_states'] !== false && data['country_zip'] === false){
                     render_states(data['country_states'], type, data[type+'_state']);
                     //Country Filed
                     jQuery('#'+type+'_country_field').attr('class', 'form-row field-select field-50 field-left form-group single-country');
                     //State Filed
                     jQuery('#'+type+'_state_field').attr('class', 'form-row field-select field-50 field-right form-group');
                     //Postcode Filed
                     jQuery('#'+type+'_postcode_field').attr('class', 'form-row field field-50 field-right form-group');
                 } else {
                     render_states(data['country_states'], type, data[type+'_state']);
                     //Country Filed
                     jQuery('#'+type+'_country_field').attr('class', 'form-row field-select field-37 field-left form-group single-country');
                     //State Filed
                     jQuery('#'+type+'_state_field').attr('class', 'form-row field-select field-37 field-center form-group');
                     //Postcode Filed
                     jQuery('#'+type+'_postcode_field').attr('class', 'form-row field field-25 field-right form-group');
                 }
                 if(update_shipping){
                     var page_reload = jQuery(data['page_reload']);
                     jQuery('.shipping_methods_box').html(page_reload.find('.shipping_methods_box').html());
                     jQuery('.woocommerce-checkout-review-order-table').html(page_reload.find('.woocommerce-checkout-review-order-table').html());
                 }
             } else {
                console.error(data['response']); 
             }
         },
         error:function(error){
             console.error(error);
         }
     });
   }
   function render_states(e, type, stored_state){
       var html_states = '<select name="'+type+'_state" id="'+type+'_state" class="" data-placeholder="" tabindex="-1" aria-hidden="true"><option value="">Select an option…</option>';
       for (var i in e){
           if(e){
             if(stored_state === i){ var selected = 'selected';} else { var selected = '';}
             var html_states = html_states+'<option value="'+i+'" '+selected+'>'+e[i]+'</option>';
           }
      }
      var html_states = html_states+'</select>';
      jQuery('#'+type+'_state').remove();
      jQuery('#'+type+'_state_field').append(html_states);
   }
});

