/*! This file is auto-generated */
!function(l){var a=l(document),r=wp.i18n.__;window.postboxes={handle_click:function(){var e,o=l(this),s=o.closest(".postbox"),t=s.attr("id");"dashboard_browser_nag"!==t&&(s.toggleClass("closed"),e=!s.hasClass("closed"),(o.hasClass("handlediv")?o:o.closest(".postbox").find("button.handlediv")).attr("aria-expanded",e),"press-this"!==postboxes.page&&postboxes.save_state(postboxes.page),t&&(s.hasClass("closed")||"function"!=typeof postboxes.pbshow?s.hasClass("closed")&&"function"==typeof postboxes.pbhide&&postboxes.pbhide(t):postboxes.pbshow(t)),a.trigger("postbox-toggled",s))},handleOrder:function(){var e=l(this),o=e.closest(".postbox"),s=o.attr("id"),t=o.closest(".meta-box-sortables").find(".postbox:visible"),a=t.length,t=t.index(o);if("dashboard_browser_nag"!==s)if("true"===e.attr("aria-disabled"))s=e.hasClass("handle-order-higher")?r("The box is on the first position"):r("The box is on the last position"),wp.a11y.speak(s);else{if(e.hasClass("handle-order-higher")){if(0===t)return void postboxes.handleOrderBetweenSortables("previous",e,o);o.prevAll(".postbox:visible").eq(0).before(o),e.trigger("focus"),postboxes.updateOrderButtonsProperties(),postboxes.save_order(postboxes.page)}e.hasClass("handle-order-lower")&&(t+1===a?postboxes.handleOrderBetweenSortables("next",e,o):(o.nextAll(".postbox:visible").eq(0).after(o),e.trigger("focus"),postboxes.updateOrderButtonsProperties(),postboxes.save_order(postboxes.page)))}},handleOrderBetweenSortables:function(e,o,s){var t=o.closest(".meta-box-sortables").attr("id"),a=[];l(".meta-box-sortables:visible").each(function(){a.push(l(this).attr("id"))}),1!==a.length&&(t=l.inArray(t,a),s=s.detach(),"previous"===e&&l(s).appendTo("#"+a[t-1]),"next"===e&&l(s).prependTo("#"+a[t+1]),postboxes._mark_area(),o.focus(),postboxes.updateOrderButtonsProperties(),postboxes.save_order(postboxes.page))},updateOrderButtonsProperties:function(){var e=l(".meta-box-sortables:visible:first").attr("id"),o=l(".meta-box-sortables:visible:last").attr("id"),s=l(".postbox:visible:first"),t=l(".postbox:visible:last"),a=s.attr("id"),r=t.attr("id"),i=s.closest(".meta-box-sortables").attr("id"),t=t.closest(".meta-box-sortables").attr("id"),n=l(".handle-order-higher"),d=l(".handle-order-lower");n.attr("aria-disabled","false").removeClass("hidden"),d.attr("aria-disabled","false").removeClass("hidden"),e===o&&a===r&&(n.addClass("hidden"),d.addClass("hidden")),e===i&&l(s).find(".handle-order-higher").attr("aria-disabled","true"),o===t&&l(".postbox:visible .handle-order-lower").last().attr("aria-disabled","true")},add_postbox_toggles:function(t,e){var o=l(".postbox .hndle, .postbox .handlediv"),s=l(".postbox .handle-order-higher, .postbox .handle-order-lower");this.page=t,this.init(t,e),o.on("click.postboxes",this.handle_click),s.on("click.postboxes",this.handleOrder),l(".postbox .hndle a").on("click",function(e){e.stopPropagation()}),l(".postbox a.dismiss").on("click.postboxes",function(e){var o=l(this).parents(".postbox").attr("id")+"-hide";e.preventDefault(),l("#"+o).prop("checked",!1).triggerHandler("click")}),l(".hide-postbox-tog").on("click.postboxes",function(){var e=l(this),o=e.val(),s=l("#"+o);e.prop("checked")?(s.show(),"function"==typeof postboxes.pbshow&&postboxes.pbshow(o)):(s.hide(),"function"==typeof postboxes.pbhide&&postboxes.pbhide(o)),postboxes.save_state(t),postboxes._mark_area(),a.trigger("postbox-toggled",s)}),l('.columns-prefs input[type="radio"]').on("click.postboxes",function(){var e=parseInt(l(this).val(),10);e&&(postboxes._pb_edit(e),postboxes.save_order(t))})},init:function(o,e){var s=l(document.body).hasClass("mobile"),t=l(".postbox .handlediv");l.extend(this,e||{}),l(".meta-box-sortables").sortable({placeholder:"sortable-placeholder",connectWith:".meta-box-sortables",items:".postbox",handle:".hndle",cursor:"move",delay:s?200:0,distance:2,tolerance:"pointer",forcePlaceholderSize:!0,helper:function(e,o){return o.clone().find(":input").attr("name",function(e,o){return"sort_"+parseInt(1e5*Math.random(),10).toString()+"_"+o}).end()},opacity:.65,start:function(){l("body").addClass("is-dragging-metaboxes"),l(".meta-box-sortables").sortable("refreshPositions")},stop:function(){var e=l(this);l("body").removeClass("is-dragging-metaboxes"),e.find("#dashboard_browser_nag").is(":visible")&&"dashboard_browser_nag"!=this.firstChild.id?e.sortable("cancel"):(postboxes.updateOrderButtonsProperties(),postboxes.save_order(o))},receive:function(e,o){"dashboard_browser_nag"==o.item[0].id&&l(o.sender).sortable("cancel"),postboxes._mark_area(),a.trigger("postbox-moved",o.item)}}),s&&(l(document.body).on("orientationchange.postboxes",function(){postboxes._pb_change()}),this._pb_change()),this._mark_area(),this.updateOrderButtonsProperties(),a.on("postbox-toggled",this.updateOrderButtonsProperties),t.each(function(){var e=l(this);e.attr("aria-expanded",!e.closest(".postbox").hasClass("closed"))})},save_state:function(e){var o,s;"nav-menus"!==e&&(o=l(".postbox").filter(".closed").map(function(){return this.id}).get().join(","),s=l(".postbox").filter(":hidden").map(function(){return this.id}).get().join(","),l.post(ajaxurl,{action:"closed-postboxes",closed:o,hidden:s,closedpostboxesnonce:jQuery("#closedpostboxesnonce").val(),page:e}))},save_order:function(e){var o=l(".columns-prefs input:checked").val()||0,s={action:"meta-box-order",_ajax_nonce:l("#meta-box-order-nonce").val(),page_columns:o,page:e};l(".meta-box-sortables").each(function(){s["order["+this.id.split("-")[0]+"]"]=l(this).sortable("toArray").join(",")}),l.post(ajaxurl,s,function(e){e.success&&wp.a11y.speak(r("The boxes order has been saved."))})},_mark_area:function(){var o=l("div.postbox:visible").length,e=l("#dashboard-widgets .meta-box-sortables:visible, #post-body .meta-box-sortables:visible"),s=!0;e.each(function(){var e=l(this);1==o||e.children(".postbox:visible").length?(e.removeClass("empty-container"),s=!1):e.addClass("empty-container")}),postboxes.updateEmptySortablesText(e,s)},updateEmptySortablesText:function(e,o){var s=l("#dashboard-widgets").length,t=r(o?"Add boxes from the Screen Options menu":"Drag boxes here");s&&e.each(function(){l(this).hasClass("empty-container")&&l(this).attr("data-emptyString",t)})},_pb_edit:function(e){var o=l(".metabox-holder").get(0);o&&(o.className=o.className.replace(/columns-\d+/,"columns-"+e)),l(document).trigger("postboxes-columnchange")},_pb_change:function(){var e=l('label.columns-prefs-1 input[type="radio"]');switch(window.orientation){case 90:case-90:e.length&&e.is(":checked")||this._pb_edit(2);break;case 0:case 180:l("#poststuff").length?this._pb_edit(1):e.length&&e.is(":checked")||this._pb_edit(2)}},pbshow:!1,pbhide:!1}}(jQuery);