!function(a){var b={init:function(){var b=a(document);b.on("click",".event-load-booking-form",this.load_form_register),b.on("submit","form.event_register:not(.active)",this.book_event_form),this.sanitize_form_field(),b.on("submit","#event-lightbox .event-auth-form",this.ajax_login)},load_form_register:function(c){c.preventDefault();var d=a(this),e=d.attr("data-event");return a.ajax({url:WPEMS.ajaxurl,type:"POST",dataType:"html",async:!1,data:{event_id:e,nonce:WPEMS.register_button,action:"load_form_register"},beforeSend:function(){d.append('<i class="event-icon-spinner2 spinner"></i>')}}).always(function(){d.find(".event-icon-spinner2").remove()}).done(function(a){b.lightbox(a)}).fail(function(){}),!1},book_event_form:function(c){c.preventDefault();var d=a(this),e=d.serializeArray(),f=d.find('button[type="submit"]'),g=d.find(".tp-event-notice");return a.ajax({url:WPEMS.ajaxurl,type:"POST",data:e,dataType:"json",beforeSend:function(){g.slideUp().remove(),f.addClass("event-register-loading"),d.addClass("active")}}).done(function(c){return f.removeClass("event-register-loading"),"undefined"==typeof c.status?void b.set_message(d,WPEMS.something_wrong):(c.status===!0&&"undefined"!=typeof c.url&&""!==c.url&&(window.location.href=c.url),c.status===!0&&""==c.url&&"undefined"!=typeof c.event&&(a.magnificPopup.close(),a(".woocommerce-message").hide(),setTimeout(function(){a(".entry-register, .event_register_foot").append('<div class="woocommerce-message">'+WPEMS.woo_cart_url+"<p>“"+c.event+"”"+WPEMS.add_to_cart+"</p></div>")},100)),"undefined"!=typeof c.message?void b.set_message(d,c.message):void 0)}).fail(function(){f.removeClass("event-register-loading"),b.set_message(d,WPEMS.something_wrong)}).always(function(){d.removeClass("active")}),!1},set_message:function(a,b){var c='<div class="tp-event-notice error">';c+='<div class="event_auth_register_message_error">'+b+"</div>",c+="</div>",a.find(".event_register_foot").append(c)},sanitize_form_field:function(){for(var b=a(".form-row.form-required"),c=0;c<b.length;c++){var d=a(b[c]),e=d.find("input");e.on("blur",function(b){b.preventDefault();var c=a(this),d=c.parents(".form-row:first");d.hasClass("form-required")&&(""==c.val()?d.removeClass("validated").addClass("has-error"):d.removeClass("has-error").addClass("validated"))})}},lightbox:function(c){var d=[];d.push('<div id="event-lightbox">'),d.push(c),d.push("</div>"),a.magnificPopup.open({items:{type:"inline",src:a(d.join(""))},mainClass:"event-lightbox-wrap",callbacks:{open:function(){var c=a("#event-lightbox");c.addClass("event-fade");var d=setTimeout(function(){c.addClass("event-in"),clearTimeout(d),b.sanitize_form_field()},100)},close:function(){var b=a("#event-lightbox");b.remove()}}})},ajax_login:function(b){b.preventDefault();var c=a(this),d=c.find("#wp-submit"),e=a("#event-lightbox"),f=c.serializeArray();return a.ajax({url:WPEMS.ajaxurl,type:"POST",data:f,async:!1,beforeSend:function(){e.find(".tp-event-notice").slideUp().remove(),d.addClass("event-register-loading")}}).always(function(){d.find(".event-icon-spinner2").remove()}).done(function(a){"undefined"!=typeof a.notices&&c.before(a.notices),"undefined"!=typeof a.status&&a.status===!0&&("undefined"!=typeof a.redirect&&a.redirect?window.location.href=a.redirect:window.location.reload())}).fail(function(a,b,d){var e='<ul class="tp-event-notice error">';e+="<li>"+a+"</li>",e+="</ul>",c.before(res.notices)}),!1}};a(document).ready(function(){b.init();for(var c=a(".tp_event_counter"),d=0;d<c.length;d++){var e=a(c[d]).attr("data-time");e=new Date(e);var f=new Date(e-60*WPEMS.gmt_offset*60*1e3);a(c[d]).countdown({labels:WPEMS.l18n.labels,labels1:WPEMS.l18n.label1,until:f,serverSync:WPEMS.current_time})}for(var g=a(".tp_event_owl_carousel"),d=0;d<g.length;d++){var h=a(g[d]).attr("data-countdown"),i={navigation:!0,slideSpeed:300,paginationSpeed:400,singleItem:!0};"undefined"!=typeof h&&(h=JSON.parse(h),a.extend(i,h),a.each(i,function(a,b){"true"===b?i[a]=!0:"false"===b&&(i[a]=!1)})),"undefined"==typeof i.slide||i.slide===!0?a(g[d]).owlCarousel(i):a(g[d]).removeClass("owl-carousel")}})}(jQuery);