!function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=215)}({215:function(t,e){jQuery(function(t){var e=t(location).attr("pathname").split("/").pop(),n="edit-tags.php"===e?"slug":"post_name",r=t(".wrap").children().eq(0),i=0,o=[];function u(e){o.includes(e)||(o.push(e),t(e).insertAfter(r))}function a(){t.post(ajaxurl,{action:"yoast_get_notifications",version:2},(function(t){""!==t&&(i=0,JSON.parse(t).map(u)),i<20&&""===t&&(i++,setTimeout(a,500))}))}function c(){var e,r=t("tr.inline-editor");return e=function(t){return 0===t.length||""===t?"":t.attr("id").replace("edit-","")}(r),t("#inline_"+e).find("."+n).html()!==r.find("input[name="+n+"]").val()}["edit.php","edit-tags.php"].includes(e)&&(t("#inline-edit input").on("keydown",(function(t){13===t.which&&c()&&a()})),t(".button-primary").on("click",(function(e){"save-order"!==t(e.target).attr("id")&&c()&&a()}))),"edit-tags.php"===e&&t(document).on("ajaxComplete",(function(t,e,n){n.data.indexOf("action=delete-tag")>-1&&a()}))}(jQuery))}});