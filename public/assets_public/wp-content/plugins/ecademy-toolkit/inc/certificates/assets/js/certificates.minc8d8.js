!function(e){let t,n,i,o,a,c,r,s,l,d;window.LP_Certificate=function(t,n){let i,o,a,c,l,d=this,f={width:0,height:0,templateWidth:0,templateHeight:0,ratio:1},u=e(t),p=null;let h="certificate";let m=0,g=0;function _(){if(++g===m){const t=n.template,i=new Image,d={};if(void 0!==localize_lp_cer_js){new RegExp("^"+localize_lp_cer_js.base_url).test(t)||(i.crossOrigin="Anonymous",d.crossOrigin="Anonymous")}i.onload=function(){f={width:this.width,height:this.height},fabric.Image.fromURL(i.src,function(t){p.backgroundImage=t,p.setHeight(f.height),p.setWidth(f.width),p.setZoom(f.ratio),p.calcOffset(),p.renderAll(),function(){const t={format:"png",multiplier:1/p.getZoom(),quality:1},n=p.toDataURL(t),i=e('<img class="certificate-result" />').insertBefore("#"+u[0].id);l=e(".certificate-result"),i.attr("src",n),setTimeout(function(){i.width()>o&&l.css("width","100%")},100)}(),s.length&&function(){const t={action:"lpCertCreateImage",data64:l.attr("src"),name_image:n.key_cer};e.ajax({url:localize_lp_cer_js.url_ajax,data:t,method:"post",dataType:"json",beforeSend(){a.append('<li class="fa fa-spinner">Loading share social...</li>')},success(t){1==t.code&&(e.each(r,function(n){const i=e(this).attr("href")+t.url_cert;e(this).attr("href",i)}),r.show())},complete(){a.find(".fa-spinner").remove()},error(e){console.log(e)}})}(),a.length&&(c=a.find(".download")),e(document).triggerHandler("learn-press/certificates/loaded")},d)},i.src=t}}i=e(window).height(),o=e(window).width(),a=e(".certificate-actions"),p||(p=u.find("canvas"),(p=new fabric.Canvas(p.get(0))).selection=!1,e.each(n.layers,function(e){m++}),e.each(n.layers,function(t,n){n.type&&e.isPlainObject(n)&&function(t){t.text=function(e){const t=document.createElement("div");return t.innerHTML=e,0===t.childNodes.length?"":t.childNodes[0].nodeValue}(t.text)||"";const n=e.extend({fontSize:24,left:0,top:0,lineHeight:1,originX:"center",originY:"center",fontFamily:"Helvetica",fieldType:"custom",qr_size:40},t);t.text;let i=null;try{const e=/^(https?|s?ftp):\/\//i.test(t.text);if("verified-link"==t.fieldType&&e){const e=new Image;n.type="image",n.height=n.qr_size,n.width=n.qr_size,e.crossOrigin="Anonymous",e.onload=function(){i=new fabric.Image(e,n),p.add(i),_()},e.src=t.text}else i=new fabric.Text("",n),p.add(i),_()}catch(e){console.log(e)}}(n)})),e(document).on("click",'[data-cert="'+u.attr("id")+'"]',function(t){t.preventDefault(),function(){if(c.length){const t=c.data("type-download");switch(void 0!==n.name&&(h=n.name),t){case"pdf":!function(){const t=function(e,t,n){let i,o,a;t>=n?(i=new jsPDF("l","mm",[t,n]),o=i.internal.pageSize.getWidth(),a=n*o/t):(i=new jsPDF("p","mm",[t,n]),o=i.internal.pageSize.getWidth(),a=i.internal.pageSize.getHeight()),i.addImage(e,"png",0,0,o,a),i.save(h+".pdf")};if((l=e(".certificate-result")).length){const e=l.attr("src");!function(e,t){const n=new Image;n.onError=function(){alert('Cannot load image: "'+e+'"')},n.onload=function(){t(n,n.width,n.height)},n.src=e}(e,t)}}();break;case"image":default:!function(){const e={format:"png",multiplier:1/p.getZoom()},t=function(e){const t=atob(e.split(",")[1]),n=e.split(",")[0].split(":")[1].split(";")[0],i=new ArrayBuffer(t.length),o=new Uint8Array(i);for(let e=0;e<t.length;e++)o[e]=t.charCodeAt(e);return new Blob([i],{type:n})}(p.toDataURL()),n=new FormData;h+=".png",n.append("files",t,h),downloadjs(p.toDataURL(e),h)}()}}}()}),d.$canvas=p},e(document).ready(function(){if(t=e("html, body"),n=e(".lp-data-config-cer"),i=e("input[name=f_auto_show_cer_popup_first]"),o=e('form[name="certificate-form-button"]'),a=e("#certificate-popup"),c=e(".single-certificate-content"),r=e(".social-cert"),s=e("input[name=need_upload_cert_img_to_server]"),l=e("form[name=form-lp-cert-add-to-cart-woo]"),d=e("form[name=form-lp-cert-purchase]"),r.hide(),i.length||o.css("display","inline-block"),n.length)try{e.each(n,function(t){const n=JSON.parse(e(this).val())||{};e(this).val("");const i="#"+e(this).closest("div").attr("id");LP_Certificate(i,n)})}catch(e){console.log(e)}!function(){if(a.length){function n(){a.fadeOut(function(){t.css("overflow","auto")})}function c(){t.css("overflow","hidden"),a.fadeIn()}e(document).on("learn-press/certificates/loaded",function(){a.addClass("ready").hide(),t.on("keyup",function(e){27===e.keyCode&&n()}).on("click",".close-popup",function(e){n(),e.preventDefault()}),o.on("submit",function(e){e.preventDefault(),c()}),i.length&&c()})}}(),l.length&&l.on("submit",function(t){t.preventDefault(),$el_form_lp_cert_add_to_cart_woo=e(this);const n=e(this).find(".btn-add-cert-to-cart-woo");let i=e(this).serialize();i+="&action=lp_cert_add_to_cart_woo",e.ajax({url:localize_lp_cer_js.url_ajax,data:i,method:"post",beforeSend(){n.append('<span class="fa fa-spinner"></span>')},success(e){1===e.code?null!=e.redirect_to?window.location.replace(e.redirect_to):($el_form_lp_cert_add_to_cart_woo.closest(".wrapper-lp-cert-add-to-cart-woo").append(e.button_view_cart),$el_form_lp_cert_add_to_cart_woo.remove()):alert(e.message)},error(e){console.log(e)},complete(){n.find("span").remove()}})}),d.length&&function(){const t=d.find(".btn-purchase-certificate");d.on("submit",function(n){n.preventDefault();const i=e(this);let o=e(this).serializeArray(),a={};e.each(o,function(e,t){a[t.name]=t.value}),i.find(".lp-enroll-notice").remove(),wp.apiFetch({path:"/lp/v1/certificate/purchase",method:"POST",data:a}).then(e=>{const{status:n,message:o,data:a}=e;i.append('<div class="lp-enroll-notice '+n+'">'+o+"</div>"),void 0!==n&&"success"===n&&(t.hide(),a.redirect&&setTimeout(function(){window.location.href=a.redirect},800))}).catch(e=>{}).then(()=>{})})}()})}(jQuery);