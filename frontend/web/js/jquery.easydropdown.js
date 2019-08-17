!function(e){function t(){this.isField=!0,this.down=!1,this.inFocus=!1,this.disabled=!1,this.cutOff=!1,this.hasLabel=!1,this.keyboardMode=!1,this.nativeTouch=!0,this.wrapperClass="dropdown",this.onChange=null}t.prototype={constructor:t,instances:[],init:function(t,o){var n=this;e.extend(n,o),n.$select=e(t),n.id=t.id,n.options=[],n.$options=n.$select.find("option"),n.isTouch="ontouchend"in document,n.$select.removeClass(n.wrapperClass+" dropdown"),n.$select.is(":disabled")&&(n.disabled=!0),n.$options.length&&(n.$options.each(function(t){var o=e(this);o.is(":selected")&&(n.selected={index:t,title:o.text()},n.focusIndex=t),o.hasClass("label")&&0==t?(n.hasLabel=!0,n.label=o.text(),o.attr("value","")):n.options.push({domNode:o[0],title:o.text(),value:o.val(),selected:o.is(":selected")})}),n.selected||(n.selected={index:0,title:n.$options.eq(0).text()},n.focusIndex=0),n.render())},render:function(){var t=this,o=t.isTouch&&t.nativeTouch?" touch":"",n=t.disabled?" disabled":"";for(t.$container=t.$select.wrap('<div class="'+t.wrapperClass+o+n+'"><span class="old"/></div>').parent().parent(),t.$active=e('<span class="selected">'+t.selected.title+"</span>").appendTo(t.$container),t.$carat=e('<span class="carat"/>').appendTo(t.$container),t.$scrollWrapper=e("<div><ul/></div>").appendTo(t.$container),t.$dropDown=t.$scrollWrapper.find("ul"),t.$form=t.$container.closest("form"),e.each(t.options,function(){var e=this,o=e.selected?' class="active"':"";t.$dropDown.append("<li"+o+">"+e.title+"</li>")}),t.$items=t.$dropDown.find("li"),t.maxHeight=0,t.cutOff&&t.$items.length>t.cutOff&&t.$container.addClass("scrollable"),i=0;i<t.$items.length;i++){var s=t.$items.eq(i);if(t.maxHeight+=s.outerHeight(),t.cutOff==i+1)break}t.isTouch&&t.nativeTouch?t.bindTouchHandlers():t.bindHandlers()},bindTouchHandlers:function(){var t=this;t.$container.on("click.easyDropDown",function(){t.$select.focus()}),t.$select.on({change:function(){var o=e(this).find("option:selected"),n=o.text(),s=o.val();t.$active.text(n),"function"==typeof t.onChange&&t.onChange.call(t.$select[0],{title:n,value:s})},focus:function(){t.$container.addClass("focus")},blur:function(){t.$container.removeClass("focus")}})},bindHandlers:function(){var t=this;t.query="",t.$container.on({"click.easyDropDown":function(){t.down||t.disabled?t.close():t.open()},"mousemove.easyDropDown":function(){t.keyboardMode&&(t.keyboardMode=!1)}}),e("body").on("click.easyDropDown."+t.id,function(o){var n=e(o.target),s=t.wrapperClass.split(" ").join(".");!n.closest("."+s).length&&t.down&&t.close()}),t.$items.on({"click.easyDropDown":function(){var o=e(this).index();t.select(o),t.$select.focus()},"mouseover.easyDropDown":function(){if(!t.keyboardMode){var o=e(this);o.addClass("focus").siblings().removeClass("focus"),t.focusIndex=o.index()}},"mouseout.easyDropDown":function(){t.keyboardMode||e(this).removeClass("focus")}}),t.$select.on({"focus.easyDropDown":function(){t.$container.addClass("focus"),t.inFocus=!0},"blur.easyDropDown":function(){t.$container.removeClass("focus"),t.inFocus=!1},"keydown.easyDropDown":function(e){if(t.inFocus){t.keyboardMode=!0;var o=e.keyCode;if(38!=o&&40!=o&&32!=o||(e.preventDefault(),38==o?(t.focusIndex--,t.focusIndex=t.focusIndex<0?t.$items.length-1:t.focusIndex):40==o&&(t.focusIndex++,t.focusIndex=t.focusIndex>t.$items.length-1?0:t.focusIndex),t.down||t.open(),t.$items.removeClass("focus").eq(t.focusIndex).addClass("focus"),t.cutOff&&t.scrollToView(),t.query=""),t.down)if(9==o||27==o)t.close();else{if(13==o)return e.preventDefault(),t.select(t.focusIndex),t.close(),!1;if(8==o)return e.preventDefault(),t.query=t.query.slice(0,-1),t.search(),clearTimeout(t.resetQuery),!1;if(38!=o&&40!=o){var n=String.fromCharCode(o);t.query+=n,t.search(),clearTimeout(t.resetQuery)}}}},"keyup.easyDropDown":function(){t.resetQuery=setTimeout(function(){t.query=""},1200)}}),t.$dropDown.on("scroll.easyDropDown",function(e){t.$dropDown[0].scrollTop>=t.$dropDown[0].scrollHeight-t.maxHeight?t.$container.addClass("bottom"):t.$container.removeClass("bottom")}),t.$form.length&&t.$form.on("reset.easyDropDown",function(){var e=t.hasLabel?t.label:t.options[0].title;t.$active.text(e)})},unbindHandlers:function(){var t=this;t.$container.add(t.$select).add(t.$items).add(t.$form).add(t.$dropDown).off(".easyDropDown"),e("body").off("."+t.id)},open:function(){var e=this,t=window.scrollY||document.documentElement.scrollTop,o=window.scrollX||document.documentElement.scrollLeft,n=e.notInViewport(t);e.closeAll(),e.$select.focus(),window.scrollTo(o,t+n),e.$container.addClass("open"),e.$scrollWrapper.css("height",e.maxHeight+"px"),e.down=!0},close:function(){var e=this;e.$container.removeClass("open"),e.$scrollWrapper.css("height","0px"),e.focusIndex=e.selected.index,e.query="",e.down=!1},closeAll:function(){var e=this,t=Object.getPrototypeOf(e).instances;for(var o in t){var n=t[o];n.close()}},select:function(e){var t=this;"string"==typeof e&&(e=t.$select.find("option[value="+e+"]").index()-1);var o=t.options[e],n=t.hasLabel?e+1:e;t.$items.removeClass("active").eq(e).addClass("active"),t.$active.text(o.title),t.$select.find("option").removeAttr("selected").eq(n).prop("selected",!0).parent().trigger("change"),t.selected={index:e,title:o.title},t.focusIndex=i,"function"==typeof t.onChange&&t.onChange.call(t.$select[0],{title:o.title,value:o.value})},search:function(){var e=this,t=function(t){e.focusIndex=t,e.$items.removeClass("focus").eq(e.focusIndex).addClass("focus"),e.scrollToView()},o=function(t){return e.options[t].title.toUpperCase()};for(i=0;i<e.options.length;i++){var n=o(i);if(0==n.indexOf(e.query))return void t(i)}for(i=0;i<e.options.length;i++){var n=o(i);if(n.indexOf(e.query)>-1){t(i);break}}},scrollToView:function(){var e=this;if(e.focusIndex>=e.cutOff){var t=e.$items.eq(e.focusIndex),o=t.outerHeight()*(e.focusIndex+1)-e.maxHeight;e.$dropDown.scrollTop(o)}},notInViewport:function(e){var t=this,o={min:e,max:e+(window.innerHeight||document.documentElement.clientHeight)},n=t.$dropDown.offset().top+t.maxHeight;return n>=o.min&&n<=o.max?0:n-o.max+5},destroy:function(){var e=this;e.unbindHandlers(),e.$select.unwrap().siblings().remove(),e.$select.unwrap(),delete Object.getPrototypeOf(e).instances[e.$select[0].id]},disable:function(){var e=this;e.disabled=!0,e.$container.addClass("disabled"),e.$select.attr("disabled",!0),e.down||e.close()},enable:function(){var e=this;e.disabled=!1,e.$container.removeClass("disabled"),e.$select.attr("disabled",!1)}};var o=function(e,o){e.id=e.id?e.id:"EasyDropDown"+n();var s=new t;s.instances[e.id]||(s.instances[e.id]=s,s.init(e,o))},n=function(){return("00000"+(16777216*Math.random()<<0).toString(16)).substr(-6).toUpperCase()};e.fn.easyDropDown=function(){var e,n=arguments,s=[];return e=this.each(function(){if(n&&"string"==typeof n[0]){var e=t.prototype.instances[this.id][n[0]](n[1],n[2]);e&&s.push(e)}else o(this,n[0])}),s.length?s.length>1?s:s[0]:e},e(function(){"function"!=typeof Object.getPrototypeOf&&("object"==typeof"test".__proto__?Object.getPrototypeOf=function(e){return e.__proto__}:Object.getPrototypeOf=function(e){return e.constructor.prototype}),e("select.dropdown").each(function(){var t=e(this).attr("data-settings");settings=t?e.parseJSON(t):{},o(this,settings)})})}(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImpxdWVyeS5lYXN5ZHJvcGRvd24uanMiXSwibmFtZXMiOlsiJCIsIkVhc3lEcm9wRG93biIsInRoaXMiLCJpc0ZpZWxkIiwiZG93biIsImluRm9jdXMiLCJkaXNhYmxlZCIsImN1dE9mZiIsImhhc0xhYmVsIiwia2V5Ym9hcmRNb2RlIiwibmF0aXZlVG91Y2giLCJ3cmFwcGVyQ2xhc3MiLCJvbkNoYW5nZSIsInByb3RvdHlwZSIsImNvbnN0cnVjdG9yIiwiaW5zdGFuY2VzIiwiaW5pdCIsImRvbU5vZGUiLCJzZXR0aW5ncyIsInNlbGYiLCJleHRlbmQiLCIkc2VsZWN0IiwiaWQiLCJvcHRpb25zIiwiJG9wdGlvbnMiLCJmaW5kIiwiaXNUb3VjaCIsImRvY3VtZW50IiwicmVtb3ZlQ2xhc3MiLCJpcyIsImxlbmd0aCIsImVhY2giLCJpIiwiJG9wdGlvbiIsInNlbGVjdGVkIiwiaW5kZXgiLCJ0aXRsZSIsInRleHQiLCJmb2N1c0luZGV4IiwiaGFzQ2xhc3MiLCJsYWJlbCIsImF0dHIiLCJwdXNoIiwidmFsdWUiLCJ2YWwiLCJlcSIsInJlbmRlciIsInRvdWNoQ2xhc3MiLCJkaXNhYmxlZENsYXNzIiwiJGNvbnRhaW5lciIsIndyYXAiLCJwYXJlbnQiLCIkYWN0aXZlIiwiYXBwZW5kVG8iLCIkY2FyYXQiLCIkc2Nyb2xsV3JhcHBlciIsIiRkcm9wRG93biIsIiRmb3JtIiwiY2xvc2VzdCIsIm9wdGlvbiIsImFjdGl2ZSIsImFwcGVuZCIsIiRpdGVtcyIsIm1heEhlaWdodCIsImFkZENsYXNzIiwiJGl0ZW0iLCJvdXRlckhlaWdodCIsImJpbmRUb3VjaEhhbmRsZXJzIiwiYmluZEhhbmRsZXJzIiwib24iLCJmb2N1cyIsImNoYW5nZSIsIiRzZWxlY3RlZCIsImNhbGwiLCJibHVyIiwicXVlcnkiLCJjbGljay5lYXN5RHJvcERvd24iLCJjbG9zZSIsIm9wZW4iLCJtb3VzZW1vdmUuZWFzeURyb3BEb3duIiwiZSIsIiR0YXJnZXQiLCJ0YXJnZXQiLCJjbGFzc05hbWVzIiwic3BsaXQiLCJqb2luIiwic2VsZWN0IiwibW91c2VvdmVyLmVhc3lEcm9wRG93biIsIiR0Iiwic2libGluZ3MiLCJtb3VzZW91dC5lYXN5RHJvcERvd24iLCJmb2N1cy5lYXN5RHJvcERvd24iLCJibHVyLmVhc3lEcm9wRG93biIsImtleWRvd24uZWFzeURyb3BEb3duIiwia2V5Iiwia2V5Q29kZSIsInByZXZlbnREZWZhdWx0Iiwic2Nyb2xsVG9WaWV3Iiwic2xpY2UiLCJzZWFyY2giLCJjbGVhclRpbWVvdXQiLCJyZXNldFF1ZXJ5IiwibGV0dGVyIiwiU3RyaW5nIiwiZnJvbUNoYXJDb2RlIiwia2V5dXAuZWFzeURyb3BEb3duIiwic2V0VGltZW91dCIsInNjcm9sbFRvcCIsInNjcm9sbEhlaWdodCIsInVuYmluZEhhbmRsZXJzIiwiYWRkIiwib2ZmIiwid2luZG93Iiwic2Nyb2xsWSIsImRvY3VtZW50RWxlbWVudCIsInNjcm9sbExlZnQiLCJzY3JvbGxYIiwic2Nyb2xsT2Zmc2V0Iiwibm90SW5WaWV3cG9ydCIsImNsb3NlQWxsIiwic2Nyb2xsVG8iLCJjc3MiLCJPYmplY3QiLCJnZXRQcm90b3R5cGVPZiIsImluc3RhbmNlIiwic2VsZWN0SW5kZXgiLCJyZW1vdmVBdHRyIiwicHJvcCIsInRyaWdnZXIiLCJsb2NrIiwiZ2V0VGl0bGUiLCJ0b1VwcGVyQ2FzZSIsImluZGV4T2YiLCIkZm9jdXNJdGVtIiwic2Nyb2xsIiwicmFuZ2UiLCJtaW4iLCJtYXgiLCJpbm5lckhlaWdodCIsImNsaWVudEhlaWdodCIsIm1lbnVCb3R0b20iLCJvZmZzZXQiLCJ0b3AiLCJkZXN0cm95IiwidW53cmFwIiwicmVtb3ZlIiwiZGlzYWJsZSIsImVuYWJsZSIsImluc3RhbnRpYXRlIiwicmFuZCIsIk1hdGgiLCJyYW5kb20iLCJ0b1N0cmluZyIsInN1YnN0ciIsImZuIiwiZWFzeURyb3BEb3duIiwiZWFjaFJldHVybiIsImFyZ3MiLCJhcmd1bWVudHMiLCJkYXRhUmV0dXJuIiwiZGF0YSIsIl9fcHJvdG9f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Q25CLEdBRUNDLEdBRkdDLEVBQU9DLFVBQ1ZDLElBWUQsT0FUQUgsR0FBYTFKLEtBQUs2QixLQUFLLFdBQ3RCLEdBQUc4SCxHQUEyQixnQkFBWkEsR0FBSyxHQUFnQixDQUN0QyxHQUFJRyxHQUFPL0osRUFBYVksVUFBVUUsVUFBVWIsS0FBS29CLElBQUl1SSxFQUFLLElBQUlBLEVBQUssR0FBSUEsRUFBSyxHQUN6RUcsSUFBS0QsRUFBV3JILEtBQUtzSCxPQUV4QlosR0FBWWxKLEtBQU0ySixFQUFLLE1BSXRCRSxFQUFXakksT0FDTmlJLEVBQVdqSSxPQUFTLEVBQUlpSSxFQUFhQSxFQUFXLEdBRWhESCxHQUlUNUosRUFBRSxXQUNtQyxrQkFBMUIwSCxRQUFPQyxpQkFDZSxnQkFBckIsT0FBT3NDLFVBQ2hCdkMsT0FBT0MsZUFBaUIsU0FBU3VDLEdBQ2hDLE1BQU9BLEdBQU9ELFdBR2Z2QyxPQUFPQyxlQUFpQixTQUFTdUMsR0FDaEMsTUFBT0EsR0FBT3BKLFlBQVlELFlBSzdCYixFQUFFLG1CQUFtQitCLEtBQUssV0FDekIsR0FBSW9JLEdBQU9uSyxFQUFFRSxNQUFNdUMsS0FBSyxnQkFDdkJ2QixVQUFXaUosRUFBT25LLEVBQUVvSyxVQUFVRCxNQUMvQmYsRUFBWWxKLEtBQU1nQixlQUdsQm1KIiwiZmlsZSI6ImpxdWVyeS5lYXN5ZHJvcGRvd24uanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuKiBFQVNZRFJPUERPV04gLSBBIERyb3AtZG93biBCdWlsZGVyIGZvciBTdHlsZWFibGUgSW5wdXRzIGFuZCBNZW51c1xuKiBWZXJzaW9uOiAyLjEuM1xuKiBMaWNlbnNlOiBDcmVhdGl2ZSBDb21tb25zIEF0dHJpYnV0aW9uIDMuMCBVbnBvcnRlZCAtIENDIEJZIDMuMFxuKiBodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9saWNlbnNlcy9ieS8zLjAvXG4qIFRoaXMgc29mdHdhcmUgbWF5IGJlIHVzZWQgZnJlZWx5IG9uIGNvbW1lcmNpYWwgYW5kIG5vbi1jb21tZXJjaWFsIHByb2plY3RzIHdpdGggYXR0cmlidXRpb24gdG8gdGhlIGF1dGhvci9jb3B5cmlnaHQgaG9sZGVyLlxuKiBBdXRob3I6IFBhdHJpY2sgS3Vua2FcbiogQ29weXJpZ2h0IDIwMTMgUGF0cmljayBLdW5rYSwgQWxsIFJpZ2h0cyBSZXNlcnZlZFxuKi9cblxuXG4oZnVuY3Rpb24oJCl7XG5cdFxuXHRmdW5jdGlvbiBFYXN5RHJvcERvd24oKXtcblx0XHR0aGlzLmlzRmllbGQgPSB0cnVlLFxuXHRcdHRoaXMuZG93biA9IGZhbHNlLFxuXHRcdHRoaXMuaW5Gb2N1cyA9IGZhbHNlLFxuXHRcdHRoaXMuZGlzYWJsZWQgPSBmYWxzZSxcblx0XHR0aGlzLmN1dE9mZiA9IGZhbHNlLFxuXHRcdHRoaXMuaGFzTGFiZWwgPSBmYWxzZSxcblx0XHR0aGlzLmtleWJvYXJkTW9kZSA9IGZhbHNlLFxuXHRcdHRoaXMubmF0aXZlVG91Y2ggPSB0cnVlLFxuXHRcdHRoaXMud3JhcHBlckNsYXNzID0gJ2Ryb3Bkb3duJyxcblx0XHR0aGlzLm9uQ2hhbmdlID0gbnVsbDtcblx0fTtcblx0XG5cdEVhc3lEcm9wRG93bi5wcm90b3R5cGUgPSB7XG5cdFx0Y29uc3RydWN0b3I6IEVhc3lEcm9wRG93bixcblx0XHRpbnN0YW5jZXM6IFtdLFxuXHRcdGluaXQ6IGZ1bmN0aW9uKGRvbU5vZGUsIHNldHRpbmdzKXtcblx0XHRcdHZhclx0c2VsZiA9IHRoaXM7XG5cdFx0XHRcblx0XHRcdCQuZXh0ZW5kKHNlbGYsIHNldHRpbmdzKTtcblx0XHRcdHNlbGYuJHNlbGVjdCA9ICQoZG9tTm9kZSk7XG5cdFx0XHRzZWxmLmlkID0gZG9tTm9kZS5pZDtcblx0XHRcdHNlbGYub3B0aW9ucyA9IFtdO1xuXHRcdFx0c2VsZi4kb3B0aW9ucyA9IHNlbGYuJHNlbGVjdC5maW5kKCdvcHRpb24nKTtcblx0XHRcdHNlbGYuaXNUb3VjaCA9ICdvbnRvdWNoZW5kJyBpbiBkb2N1bWVudDtcblx0XHRcdHNlbGYuJHNlbGVjdC5yZW1vdmVDbGFzcyhzZWxmLndyYXBwZXJDbGFzcysnIGRyb3Bkb3duJyk7XG5cdFx0XHRpZihzZWxmLiRzZWxlY3QuaXMoJzpkaXNhYmxlZCcpKXtcblx0XHRcdFx0c2VsZi5kaXNhYmxlZCA9IHRydWU7XG5cdFx0XHR9O1xuXHRcdFx0aWYoc2VsZi4kb3B0aW9ucy5sZW5ndGgpe1xuXHRcdFx0XHRzZWxmLiRvcHRpb25zLmVhY2goZnVuY3Rpb24oaSl7XG5cdFx0XHRcdFx0dmFyICRvcHRpb24gPSAkKHRoaXMpO1xuXHRcdFx0XHRcdGlmKCRvcHRpb24uaXMoJzpzZWxlY3RlZCcpKXtcblx0XHRcdFx0XHRcdHNlbGYuc2VsZWN0ZWQgPSB7XG5cdFx0XHRcdFx0XHRcdGluZGV4OiBpLFxuXHRcdFx0XHRcdFx0XHR0aXRsZTogJG9wdGlvbi50ZXh0KClcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IGk7XG5cdFx0XHRcdFx0fTtcblx0XHRcdFx0XHRpZigkb3B0aW9uLmhhc0NsYXNzKCdsYWJlbCcpICYmIGkgPT0gMCl7XG5cdFx0XHRcdFx0XHRzZWxmLmhhc0xhYmVsID0gdHJ1ZTtcblx0XHRcdFx0XHRcdHNlbGYubGFiZWwgPSAkb3B0aW9uLnRleHQoKTtcblx0XHRcdFx0XHRcdCRvcHRpb24uYXR0cigndmFsdWUnLCcnKTtcblx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0c2VsZi5vcHRpb25zLnB1c2goe1xuXHRcdFx0XHRcdFx0XHRkb21Ob2RlOiAkb3B0aW9uWzBdLFxuXHRcdFx0XHRcdFx0XHR0aXRsZTogJG9wdGlvbi50ZXh0KCksXG5cdFx0XHRcdFx0XHRcdHZhbHVlOiAkb3B0aW9uLnZhbCgpLFxuXHRcdFx0XHRcdFx0XHRzZWxlY3RlZDogJG9wdGlvbi5pcygnOnNlbGVjdGVkJylcblx0XHRcdFx0XHRcdH0pO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH0pO1xuXHRcdFx0XHRpZighc2VsZi5zZWxlY3RlZCl7XG5cdFx0XHRcdFx0c2VsZi5zZWxlY3RlZCA9IHtcblx0XHRcdFx0XHRcdGluZGV4OiAwLFxuXHRcdFx0XHRcdFx0dGl0bGU6IHNlbGYuJG9wdGlvbnMuZXEoMCkudGV4dCgpXG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IDA7XG5cdFx0XHRcdH07XG5cdFx0XHRcdHNlbGYucmVuZGVyKCk7XG5cdFx0XHR9O1xuXHRcdH0sXG5cdFxuXHRcdHJlbmRlcjogZnVuY3Rpb24oKXtcblx0XHRcdHZhclx0c2VsZiA9IHRoaXMsXG5cdFx0XHRcdHRvdWNoQ2xhc3MgPSBzZWxmLmlzVG91Y2ggJiYgc2VsZi5uYXRpdmVUb3VjaCA/ICcgdG91Y2gnIDogJycsXG5cdFx0XHRcdGRpc2FibGVkQ2xhc3MgPSBzZWxmLmRpc2FibGVkID8gJyBkaXNhYmxlZCcgOiAnJztcblx0XHRcdFxuXHRcdFx0c2VsZi4kY29udGFpbmVyID0gc2VsZi4kc2VsZWN0LndyYXAoJzxkaXYgY2xhc3M9XCInK3NlbGYud3JhcHBlckNsYXNzK3RvdWNoQ2xhc3MrZGlzYWJsZWRDbGFzcysnXCI+PHNwYW4gY2xhc3M9XCJvbGRcIi8+PC9kaXY+JykucGFyZW50KCkucGFyZW50KCk7XG5cdFx0XHRzZWxmLiRhY3RpdmUgPSAkKCc8c3BhbiBjbGFzcz1cInNlbGVjdGVkXCI+JytzZWxmLnNlbGVjdGVkLnRpdGxlKyc8L3NwYW4+JykuYXBwZW5kVG8oc2VsZi4kY29udGFpbmVyKTtcblx0XHRcdHNlbGYuJGNhcmF0ID0gJCgnPHNwYW4gY2xhc3M9XCJjYXJhdFwiLz4nKS5hcHBlbmRUbyhzZWxmLiRjb250YWluZXIpO1xuXHRcdFx0c2VsZi4kc2Nyb2xsV3JhcHBlciA9ICQoJzxkaXY+PHVsLz48L2Rpdj4nKS5hcHBlbmRUbyhzZWxmLiRjb250YWluZXIpO1xuXHRcdFx0c2VsZi4kZHJvcERvd24gPSBzZWxmLiRzY3JvbGxXcmFwcGVyLmZpbmQoJ3VsJyk7XG5cdFx0XHRzZWxmLiRmb3JtID0gc2VsZi4kY29udGFpbmVyLmNsb3Nlc3QoJ2Zvcm0nKTtcblx0XHRcdCQuZWFjaChzZWxmLm9wdGlvbnMsIGZ1bmN0aW9uKCl7XG5cdFx0XHRcdHZhclx0b3B0aW9uID0gdGhpcyxcblx0XHRcdFx0XHRhY3RpdmUgPSBvcHRpb24uc2VsZWN0ZWQgPyAnIGNsYXNzPVwiYWN0aXZlXCInOicnO1xuXHRcdFx0XHRzZWxmLiRkcm9wRG93bi5hcHBlbmQoJzxsaScrYWN0aXZlKyc+JytvcHRpb24udGl0bGUrJzwvbGk+Jyk7XG5cdFx0XHR9KTtcblx0XHRcdHNlbGYuJGl0ZW1zID0gc2VsZi4kZHJvcERvd24uZmluZCgnbGknKTtcblx0XHRcdHNlbGYubWF4SGVpZ2h0ID0gMDtcblx0XHRcdGlmKHNlbGYuY3V0T2ZmICYmIHNlbGYuJGl0ZW1zLmxlbmd0aCA+IHNlbGYuY3V0T2ZmKXNlbGYuJGNvbnRhaW5lci5hZGRDbGFzcygnc2Nyb2xsYWJsZScpO1xuXHRcdFx0Zm9yKGkgPSAwOyBpIDwgc2VsZi4kaXRlbXMubGVuZ3RoOyBpKyspe1xuXHRcdFx0XHR2YXIgJGl0ZW0gPSBzZWxmLiRpdGVtcy5lcShpKTtcblx0XHRcdFx0c2VsZi5tYXhIZWlnaHQgKz0gJGl0ZW0ub3V0ZXJIZWlnaHQoKTtcblx0XHRcdFx0aWYoc2VsZi5jdXRPZmYgPT0gaSsxKXtcblx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0fTtcblx0XHRcdH07XG5cblx0XHRcdGlmKHNlbGYuaXNUb3VjaCAmJiBzZWxmLm5hdGl2ZVRvdWNoKXtcblx0XHRcdFx0c2VsZi5iaW5kVG91Y2hIYW5kbGVycygpO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0c2VsZi5iaW5kSGFuZGxlcnMoKTtcblx0XHRcdH07XG5cdFx0fSxcblx0XHRcblx0XHRiaW5kVG91Y2hIYW5kbGVyczogZnVuY3Rpb24oKXtcblx0XHRcdHZhclx0c2VsZiA9IHRoaXM7XG5cdFx0XHRzZWxmLiRjb250YWluZXIub24oJ2NsaWNrLmVhc3lEcm9wRG93bicsZnVuY3Rpb24oKXtcblx0XHRcdFx0c2VsZi4kc2VsZWN0LmZvY3VzKCk7XG5cdFx0XHR9KTtcblx0XHRcdHNlbGYuJHNlbGVjdC5vbih7XG5cdFx0XHRcdGNoYW5nZTogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHR2YXJcdCRzZWxlY3RlZCA9ICQodGhpcykuZmluZCgnb3B0aW9uOnNlbGVjdGVkJyksXG5cdFx0XHRcdFx0XHR0aXRsZSA9ICRzZWxlY3RlZC50ZXh0KCksXG5cdFx0XHRcdFx0XHR2YWx1ZSA9ICRzZWxlY3RlZC52YWwoKTtcblx0XHRcdFx0XHRcdFxuXHRcdFx0XHRcdHNlbGYuJGFjdGl2ZS50ZXh0KHRpdGxlKTtcblx0XHRcdFx0XHRpZih0eXBlb2Ygc2VsZi5vbkNoYW5nZSA9PT0gJ2Z1bmN0aW9uJyl7XG5cdFx0XHRcdFx0XHRzZWxmLm9uQ2hhbmdlLmNhbGwoc2VsZi4kc2VsZWN0WzBdLHtcblx0XHRcdFx0XHRcdFx0dGl0bGU6IHRpdGxlLCBcblx0XHRcdFx0XHRcdFx0dmFsdWU6IHZhbHVlXG5cdFx0XHRcdFx0XHR9KTtcblx0XHRcdFx0XHR9O1xuXHRcdFx0XHR9LFxuXHRcdFx0XHRmb2N1czogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRzZWxmLiRjb250YWluZXIuYWRkQ2xhc3MoJ2ZvY3VzJyk7XG5cdFx0XHRcdH0sXG5cdFx0XHRcdGJsdXI6IGZ1bmN0aW9uKCl7XG5cdFx0XHRcdFx0c2VsZi4kY29udGFpbmVyLnJlbW92ZUNsYXNzKCdmb2N1cycpO1xuXHRcdFx0XHR9XG5cdFx0XHR9KTtcblx0XHR9LFxuXHRcblx0XHRiaW5kSGFuZGxlcnM6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXJcdHNlbGYgPSB0aGlzO1xuXHRcdFx0c2VsZi5xdWVyeSA9ICcnO1xuXHRcdFx0c2VsZi4kY29udGFpbmVyLm9uKHtcblx0XHRcdFx0J2NsaWNrLmVhc3lEcm9wRG93bic6IGZ1bmN0aW9uKCl7XG5cdFx0XHRcdFx0aWYoIXNlbGYuZG93biAmJiAhc2VsZi5kaXNhYmxlZCl7XG5cdFx0XHRcdFx0XHRzZWxmLm9wZW4oKTtcblx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0c2VsZi5jbG9zZSgpO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH0sXG5cdFx0XHRcdCdtb3VzZW1vdmUuZWFzeURyb3BEb3duJzogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRpZihzZWxmLmtleWJvYXJkTW9kZSl7XG5cdFx0XHRcdFx0XHRzZWxmLmtleWJvYXJkTW9kZSA9IGZhbHNlO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH1cblx0XHRcdH0pO1xuXHRcdFx0XG5cdFx0XHQkKCdib2R5Jykub24oJ2NsaWNrLmVhc3lEcm9wRG93bi4nK3NlbGYuaWQsZnVuY3Rpb24oZSl7XG5cdFx0XHRcdHZhciAkdGFyZ2V0ID0gJChlLnRhcmdldCksXG5cdFx0XHRcdFx0Y2xhc3NOYW1lcyA9IHNlbGYud3JhcHBlckNsYXNzLnNwbGl0KCcgJykuam9pbignLicpO1xuXG5cdFx0XHRcdGlmKCEkdGFyZ2V0LmNsb3Nlc3QoJy4nK2NsYXNzTmFtZXMpLmxlbmd0aCAmJiBzZWxmLmRvd24pe1xuXHRcdFx0XHRcdHNlbGYuY2xvc2UoKTtcblx0XHRcdFx0fTtcblx0XHRcdH0pO1xuXG5cdFx0XHRzZWxmLiRpdGVtcy5vbih7XG5cdFx0XHRcdCdjbGljay5lYXN5RHJvcERvd24nOiBmdW5jdGlvbigpe1xuXHRcdFx0XHRcdHZhciBpbmRleCA9ICQodGhpcykuaW5kZXgoKTtcblx0XHRcdFx0XHRzZWxmLnNlbGVjdChpbmRleCk7XG5cdFx0XHRcdFx0c2VsZi4kc2VsZWN0LmZvY3VzKCk7XG5cdFx0XHRcdH0sXG5cdFx0XHRcdCdtb3VzZW92ZXIuZWFzeURyb3BEb3duJzogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRpZighc2VsZi5rZXlib2FyZE1vZGUpe1xuXHRcdFx0XHRcdFx0dmFyICR0ID0gJCh0aGlzKTtcblx0XHRcdFx0XHRcdCR0LmFkZENsYXNzKCdmb2N1cycpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ2ZvY3VzJyk7XG5cdFx0XHRcdFx0XHRzZWxmLmZvY3VzSW5kZXggPSAkdC5pbmRleCgpO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH0sXG5cdFx0XHRcdCdtb3VzZW91dC5lYXN5RHJvcERvd24nOiBmdW5jdGlvbigpe1xuXHRcdFx0XHRcdGlmKCFzZWxmLmtleWJvYXJkTW9kZSl7XG5cdFx0XHRcdFx0XHQkKHRoaXMpLnJlbW92ZUNsYXNzKCdmb2N1cycpO1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH1cblx0XHRcdH0pO1xuXG5cdFx0XHRzZWxmLiRzZWxlY3Qub24oe1xuXHRcdFx0XHQnZm9jdXMuZWFzeURyb3BEb3duJzogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRzZWxmLiRjb250YWluZXIuYWRkQ2xhc3MoJ2ZvY3VzJyk7XG5cdFx0XHRcdFx0c2VsZi5pbkZvY3VzID0gdHJ1ZTtcblx0XHRcdFx0fSxcblx0XHRcdFx0J2JsdXIuZWFzeURyb3BEb3duJzogZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRzZWxmLiRjb250YWluZXIucmVtb3ZlQ2xhc3MoJ2ZvY3VzJyk7XG5cdFx0XHRcdFx0c2VsZi5pbkZvY3VzID0gZmFsc2U7XG5cdFx0XHRcdH0sXG5cdFx0XHRcdCdrZXlkb3duLmVhc3lEcm9wRG93bic6IGZ1bmN0aW9uKGUpe1xuXHRcdFx0XHRcdGlmKHNlbGYuaW5Gb2N1cyl7XG5cdFx0XHRcdFx0XHRzZWxmLmtleWJvYXJkTW9kZSA9IHRydWU7XG5cdFx0XHRcdFx0XHR2YXIga2V5ID0gZS5rZXlDb2RlO1xuXG5cdFx0XHRcdFx0XHRpZihrZXkgPT0gMzggfHwga2V5ID09IDQwIHx8IGtleSA9PSAzMil7XG5cdFx0XHRcdFx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHRcdFx0aWYoa2V5ID09IDM4KXtcblx0XHRcdFx0XHRcdFx0XHRzZWxmLmZvY3VzSW5kZXgtLVxuXHRcdFx0XHRcdFx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IHNlbGYuZm9jdXNJbmRleCA8IDAgPyBzZWxmLiRpdGVtcy5sZW5ndGggLSAxIDogc2VsZi5mb2N1c0luZGV4O1xuXHRcdFx0XHRcdFx0XHR9IGVsc2UgaWYoa2V5ID09IDQwKXtcblx0XHRcdFx0XHRcdFx0XHRzZWxmLmZvY3VzSW5kZXgrK1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IHNlbGYuZm9jdXNJbmRleCA+IHNlbGYuJGl0ZW1zLmxlbmd0aCAtIDEgPyAwIDogc2VsZi5mb2N1c0luZGV4O1xuXHRcdFx0XHRcdFx0XHR9O1xuXHRcdFx0XHRcdFx0XHRpZighc2VsZi5kb3duKXtcblx0XHRcdFx0XHRcdFx0XHRzZWxmLm9wZW4oKTtcblx0XHRcdFx0XHRcdFx0fTtcblx0XHRcdFx0XHRcdFx0c2VsZi4kaXRlbXMucmVtb3ZlQ2xhc3MoJ2ZvY3VzJykuZXEoc2VsZi5mb2N1c0luZGV4KS5hZGRDbGFzcygnZm9jdXMnKTtcblx0XHRcdFx0XHRcdFx0aWYoc2VsZi5jdXRPZmYpe1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuc2Nyb2xsVG9WaWV3KCk7XG5cdFx0XHRcdFx0XHRcdH07XG5cdFx0XHRcdFx0XHRcdHNlbGYucXVlcnkgPSAnJztcblx0XHRcdFx0XHRcdH07XG5cdFx0XHRcdFx0XHRpZihzZWxmLmRvd24pe1xuXHRcdFx0XHRcdFx0XHRpZihrZXkgPT0gOSB8fCBrZXkgPT0gMjcpe1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuY2xvc2UoKTtcblx0XHRcdFx0XHRcdFx0fSBlbHNlIGlmKGtleSA9PSAxMyl7XG5cdFx0XHRcdFx0XHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuc2VsZWN0KHNlbGYuZm9jdXNJbmRleCk7XG5cdFx0XHRcdFx0XHRcdFx0c2VsZi5jbG9zZSgpO1xuXHRcdFx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHRcdFx0fSBlbHNlIGlmKGtleSA9PSA4KXtcblx0XHRcdFx0XHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRcdFx0XHRcdFx0c2VsZi5xdWVyeSA9IHNlbGYucXVlcnkuc2xpY2UoMCwtMSk7XG5cdFx0XHRcdFx0XHRcdFx0c2VsZi5zZWFyY2goKTtcblx0XHRcdFx0XHRcdFx0XHRjbGVhclRpbWVvdXQoc2VsZi5yZXNldFF1ZXJ5KTtcblx0XHRcdFx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0XHRcdH0gZWxzZSBpZihrZXkgIT0gMzggJiYga2V5ICE9IDQwKXtcblx0XHRcdFx0XHRcdFx0XHR2YXIgbGV0dGVyID0gU3RyaW5nLmZyb21DaGFyQ29kZShrZXkpO1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYucXVlcnkgKz0gbGV0dGVyO1xuXHRcdFx0XHRcdFx0XHRcdHNlbGYuc2VhcmNoKCk7XG5cdFx0XHRcdFx0XHRcdFx0Y2xlYXJUaW1lb3V0KHNlbGYucmVzZXRRdWVyeSk7XG5cdFx0XHRcdFx0XHRcdH07XG5cdFx0XHRcdFx0XHR9O1xuXHRcdFx0XHRcdH07XG5cdFx0XHRcdH0sXG5cdFx0XHRcdCdrZXl1cC5lYXN5RHJvcERvd24nOiBmdW5jdGlvbigpe1xuXHRcdFx0XHRcdHNlbGYucmVzZXRRdWVyeSA9IHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcblx0XHRcdFx0XHRcdHNlbGYucXVlcnkgPSAnJztcblx0XHRcdFx0XHR9LDEyMDApO1xuXHRcdFx0XHR9XG5cdFx0XHR9KTtcblx0XHRcdFxuXHRcdFx0c2VsZi4kZHJvcERvd24ub24oJ3Njcm9sbC5lYXN5RHJvcERvd24nLGZ1bmN0aW9uKGUpe1xuXHRcdFx0XHRpZihzZWxmLiRkcm9wRG93blswXS5zY3JvbGxUb3AgPj0gc2VsZi4kZHJvcERvd25bMF0uc2Nyb2xsSGVpZ2h0IC0gc2VsZi5tYXhIZWlnaHQpe1xuXHRcdFx0XHRcdHNlbGYuJGNvbnRhaW5lci5hZGRDbGFzcygnYm90dG9tJyk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2VsZi4kY29udGFpbmVyLnJlbW92ZUNsYXNzKCdib3R0b20nKTtcblx0XHRcdFx0fTtcblx0XHRcdH0pO1xuXHRcdFx0XG5cdFx0XHRpZihzZWxmLiRmb3JtLmxlbmd0aCl7XG5cdFx0XHRcdHNlbGYuJGZvcm0ub24oJ3Jlc2V0LmVhc3lEcm9wRG93bicsIGZ1bmN0aW9uKCl7XG5cdFx0XHRcdFx0dmFyIGFjdGl2ZSA9IHNlbGYuaGFzTGFiZWwgPyBzZWxmLmxhYmVsIDogc2VsZi5vcHRpb25zWzBdLnRpdGxlO1xuXHRcdFx0XHRcdHNlbGYuJGFjdGl2ZS50ZXh0KGFjdGl2ZSk7XG5cdFx0XHRcdH0pO1xuXHRcdFx0fTtcblx0XHR9LFxuXHRcdFxuXHRcdHVuYmluZEhhbmRsZXJzOiBmdW5jdGlvbigpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzO1xuXHRcdFx0XG5cdFx0XHRzZWxmLiRjb250YWluZXJcblx0XHRcdFx0LmFkZChzZWxmLiRzZWxlY3QpXG5cdFx0XHRcdC5hZGQoc2VsZi4kaXRlbXMpXG5cdFx0XHRcdC5hZGQoc2VsZi4kZm9ybSlcblx0XHRcdFx0LmFkZChzZWxmLiRkcm9wRG93bilcblx0XHRcdFx0Lm9mZignLmVhc3lEcm9wRG93bicpO1xuXHRcdFx0JCgnYm9keScpLm9mZignLicrc2VsZi5pZCk7XG5cdFx0fSxcblx0XHRcblx0XHRvcGVuOiBmdW5jdGlvbigpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzLFxuXHRcdFx0XHRzY3JvbGxUb3AgPSB3aW5kb3cuc2Nyb2xsWSB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wLFxuXHRcdFx0XHRzY3JvbGxMZWZ0ID0gd2luZG93LnNjcm9sbFggfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbExlZnQsXG5cdFx0XHRcdHNjcm9sbE9mZnNldCA9IHNlbGYubm90SW5WaWV3cG9ydChzY3JvbGxUb3ApO1xuXG5cdFx0XHRzZWxmLmNsb3NlQWxsKCk7XG5cdFx0XHRzZWxmLiRzZWxlY3QuZm9jdXMoKTtcblx0XHRcdHdpbmRvdy5zY3JvbGxUbyhzY3JvbGxMZWZ0LCBzY3JvbGxUb3Arc2Nyb2xsT2Zmc2V0KTtcblx0XHRcdHNlbGYuJGNvbnRhaW5lci5hZGRDbGFzcygnb3BlbicpO1xuXHRcdFx0c2VsZi4kc2Nyb2xsV3JhcHBlci5jc3MoJ2hlaWdodCcsc2VsZi5tYXhIZWlnaHQrJ3B4Jyk7XG5cdFx0XHRzZWxmLmRvd24gPSB0cnVlO1xuXHRcdH0sXG5cdFx0XG5cdFx0Y2xvc2U6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXM7XG5cdFx0XHRzZWxmLiRjb250YWluZXIucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcblx0XHRcdHNlbGYuJHNjcm9sbFdyYXBwZXIuY3NzKCdoZWlnaHQnLCcwcHgnKTtcblx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IHNlbGYuc2VsZWN0ZWQuaW5kZXg7XG5cdFx0XHRzZWxmLnF1ZXJ5ID0gJyc7XG5cdFx0XHRzZWxmLmRvd24gPSBmYWxzZTtcblx0XHR9LFxuXHRcdFxuXHRcdGNsb3NlQWxsOiBmdW5jdGlvbigpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzLFxuXHRcdFx0XHRpbnN0YW5jZXMgPSBPYmplY3QuZ2V0UHJvdG90eXBlT2Yoc2VsZikuaW5zdGFuY2VzO1xuXHRcdFx0Zm9yKHZhciBrZXkgaW4gaW5zdGFuY2VzKXtcblx0XHRcdFx0dmFyIGluc3RhbmNlID0gaW5zdGFuY2VzW2tleV07XG5cdFx0XHRcdGluc3RhbmNlLmNsb3NlKCk7XG5cdFx0XHR9O1xuXHRcdH0sXG5cdFxuXHRcdHNlbGVjdDogZnVuY3Rpb24oaW5kZXgpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzO1xuXHRcdFx0XG5cdFx0XHRpZih0eXBlb2YgaW5kZXggPT09ICdzdHJpbmcnKXtcblx0XHRcdFx0aW5kZXggPSBzZWxmLiRzZWxlY3QuZmluZCgnb3B0aW9uW3ZhbHVlPScraW5kZXgrJ10nKS5pbmRleCgpIC0gMTtcblx0XHRcdH07XG5cdFx0XHRcblx0XHRcdHZhclx0b3B0aW9uID0gc2VsZi5vcHRpb25zW2luZGV4XSxcblx0XHRcdFx0c2VsZWN0SW5kZXggPSBzZWxmLmhhc0xhYmVsID8gaW5kZXggKyAxIDogaW5kZXg7XG5cdFx0XHRzZWxmLiRpdGVtcy5yZW1vdmVDbGFzcygnYWN0aXZlJykuZXEoaW5kZXgpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0XHRcdHNlbGYuJGFjdGl2ZS50ZXh0KG9wdGlvbi50aXRsZSk7XG5cdFx0XHRzZWxmLiRzZWxlY3Rcblx0XHRcdFx0LmZpbmQoJ29wdGlvbicpXG5cdFx0XHRcdC5yZW1vdmVBdHRyKCdzZWxlY3RlZCcpXG5cdFx0XHRcdC5lcShzZWxlY3RJbmRleClcblx0XHRcdFx0LnByb3AoJ3NlbGVjdGVkJyx0cnVlKVxuXHRcdFx0XHQucGFyZW50KClcblx0XHRcdFx0LnRyaWdnZXIoJ2NoYW5nZScpO1xuXHRcdFx0XHRcblx0XHRcdHNlbGYuc2VsZWN0ZWQgPSB7XG5cdFx0XHRcdGluZGV4OiBpbmRleCxcblx0XHRcdFx0dGl0bGU6IG9wdGlvbi50aXRsZVxuXHRcdFx0fTtcblx0XHRcdHNlbGYuZm9jdXNJbmRleCA9IGk7XG5cdFx0XHRpZih0eXBlb2Ygc2VsZi5vbkNoYW5nZSA9PT0gJ2Z1bmN0aW9uJyl7XG5cdFx0XHRcdHNlbGYub25DaGFuZ2UuY2FsbChzZWxmLiRzZWxlY3RbMF0se1xuXHRcdFx0XHRcdHRpdGxlOiBvcHRpb24udGl0bGUsIFxuXHRcdFx0XHRcdHZhbHVlOiBvcHRpb24udmFsdWVcblx0XHRcdFx0fSk7XG5cdFx0XHR9O1xuXHRcdH0sXG5cdFx0XG5cdFx0c2VhcmNoOiBmdW5jdGlvbigpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzLFxuXHRcdFx0XHRsb2NrID0gZnVuY3Rpb24oaSl7XG5cdFx0XHRcdFx0c2VsZi5mb2N1c0luZGV4ID0gaTtcblx0XHRcdFx0XHRzZWxmLiRpdGVtcy5yZW1vdmVDbGFzcygnZm9jdXMnKS5lcShzZWxmLmZvY3VzSW5kZXgpLmFkZENsYXNzKCdmb2N1cycpO1xuXHRcdFx0XHRcdHNlbGYuc2Nyb2xsVG9WaWV3KCk7XHRcblx0XHRcdFx0fSxcblx0XHRcdFx0Z2V0VGl0bGUgPSBmdW5jdGlvbihpKXtcblx0XHRcdFx0XHRyZXR1cm4gc2VsZi5vcHRpb25zW2ldLnRpdGxlLnRvVXBwZXJDYXNlKCk7XG5cdFx0XHRcdH07XG5cdFx0XHRcdFxuXHRcdFx0Zm9yKGkgPSAwOyBpIDwgc2VsZi5vcHRpb25zLmxlbmd0aDsgaSsrKXtcblx0XHRcdFx0dmFyIHRpdGxlID0gZ2V0VGl0bGUoaSk7XG5cdFx0XHRcdGlmKHRpdGxlLmluZGV4T2Yoc2VsZi5xdWVyeSkgPT0gMCl7XG5cdFx0XHRcdFx0bG9jayhpKTtcblx0XHRcdFx0XHRyZXR1cm47XG5cdFx0XHRcdH07XG5cdFx0XHR9O1xuXHRcdFx0XG5cdFx0XHRmb3IoaSA9IDA7IGkgPCBzZWxmLm9wdGlvbnMubGVuZ3RoOyBpKyspe1xuXHRcdFx0XHR2YXIgdGl0bGUgPSBnZXRUaXRsZShpKTtcblx0XHRcdFx0aWYodGl0bGUuaW5kZXhPZihzZWxmLnF1ZXJ5KSA+IC0xKXtcblx0XHRcdFx0XHRsb2NrKGkpO1xuXHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHR9O1xuXHRcdFx0fTtcblx0XHR9LFxuXHRcdFxuXHRcdHNjcm9sbFRvVmlldzogZnVuY3Rpb24oKXtcblx0XHRcdHZhciBzZWxmID0gdGhpcztcblx0XHRcdGlmKHNlbGYuZm9jdXNJbmRleCA+PSBzZWxmLmN1dE9mZil7XG5cdFx0XHRcdHZhciAkZm9jdXNJdGVtID0gc2VsZi4kaXRlbXMuZXEoc2VsZi5mb2N1c0luZGV4KSxcblx0XHRcdFx0XHRzY3JvbGwgPSAoJGZvY3VzSXRlbS5vdXRlckhlaWdodCgpICogKHNlbGYuZm9jdXNJbmRleCArIDEpKSAtIHNlbGYubWF4SGVpZ2h0O1xuXHRcdFx0XG5cdFx0XHRcdHNlbGYuJGRyb3BEb3duLnNjcm9sbFRvcChzY3JvbGwpO1xuXHRcdFx0fTtcblx0XHR9LFxuXHRcdFxuXHRcdG5vdEluVmlld3BvcnQ6IGZ1bmN0aW9uKHNjcm9sbFRvcCl7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXMsXG5cdFx0XHRcdHJhbmdlID0ge1xuXHRcdFx0XHRcdG1pbjogc2Nyb2xsVG9wLFxuXHRcdFx0XHRcdG1heDogc2Nyb2xsVG9wICsgKHdpbmRvdy5pbm5lckhlaWdodCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xpZW50SGVpZ2h0KVxuXHRcdFx0XHR9LFxuXHRcdFx0XHRtZW51Qm90dG9tID0gc2VsZi4kZHJvcERvd24ub2Zmc2V0KCkudG9wICsgc2VsZi5tYXhIZWlnaHQ7XG5cdFx0XHRcdFxuXHRcdFx0aWYobWVudUJvdHRvbSA+PSByYW5nZS5taW4gJiYgbWVudUJvdHRvbSA8PSByYW5nZS5tYXgpe1xuXHRcdFx0XHRyZXR1cm4gMDtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdHJldHVybiAobWVudUJvdHRvbSAtIHJhbmdlLm1heCkgKyA1O1xuXHRcdFx0fTtcblx0XHR9LFxuXHRcdFxuXHRcdGRlc3Ryb3k6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXM7XG5cdFx0XHRzZWxmLnVuYmluZEhhbmRsZXJzKCk7XG5cdFx0XHRzZWxmLiRzZWxlY3QudW53cmFwKCkuc2libGluZ3MoKS5yZW1vdmUoKTtcblx0XHRcdHNlbGYuJHNlbGVjdC51bndyYXAoKTtcblx0XHRcdGRlbGV0ZSBPYmplY3QuZ2V0UHJvdG90eXBlT2Yoc2VsZikuaW5zdGFuY2VzW3NlbGYuJHNlbGVjdFswXS5pZF07XG5cdFx0fSxcblx0XHRcblx0XHRkaXNhYmxlOiBmdW5jdGlvbigpe1xuXHRcdFx0dmFyIHNlbGYgPSB0aGlzO1xuXHRcdFx0c2VsZi5kaXNhYmxlZCA9IHRydWU7XG5cdFx0XHRzZWxmLiRjb250YWluZXIuYWRkQ2xhc3MoJ2Rpc2FibGVkJyk7XG5cdFx0XHRzZWxmLiRzZWxlY3QuYXR0cignZGlzYWJsZWQnLHRydWUpO1xuXHRcdFx0aWYoIXNlbGYuZG93bilzZWxmLmNsb3NlKCk7XG5cdFx0fSxcblx0XHRcblx0XHRlbmFibGU6IGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgc2VsZiA9IHRoaXM7XG5cdFx0XHRzZWxmLmRpc2FibGVkID0gZmFsc2U7XG5cdFx0XHRzZWxmLiRjb250YWluZXIucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJyk7XG5cdFx0XHRzZWxmLiRzZWxlY3QuYXR0cignZGlzYWJsZWQnLGZhbHNlKTtcblx0XHR9XG5cdH07XG5cdFxuXHR2YXIgaW5zdGFudGlhdGUgPSBmdW5jdGlvbihkb21Ob2RlLCBzZXR0aW5ncyl7XG5cdFx0XHRkb21Ob2RlLmlkID0gIWRvbU5vZGUuaWQgPyAnRWFzeURyb3BEb3duJytyYW5kKCkgOiBkb21Ob2RlLmlkO1xuXHRcdFx0dmFyIGluc3RhbmNlID0gbmV3IEVhc3lEcm9wRG93bigpO1xuXHRcdFx0aWYoIWluc3RhbmNlLmluc3RhbmNlc1tkb21Ob2RlLmlkXSl7XG5cdFx0XHRcdGluc3RhbmNlLmluc3RhbmNlc1tkb21Ob2RlLmlkXSA9IGluc3RhbmNlO1xuXHRcdFx0XHRpbnN0YW5jZS5pbml0KGRvbU5vZGUsIHNldHRpbmdzKTtcblx0XHRcdH07XG5cdFx0fSxcblx0XHRyYW5kID0gZnVuY3Rpb24oKXtcblx0XHRcdHJldHVybiAoJzAwMDAwJysoTWF0aC5yYW5kb20oKSoxNjc3NzIxNjw8MCkudG9TdHJpbmcoMTYpKS5zdWJzdHIoLTYpLnRvVXBwZXJDYXNlKCk7XG5cdFx0fTtcblx0XG5cdCQuZm4uZWFzeURyb3BEb3duID0gZnVuY3Rpb24oKXtcblx0XHR2YXIgYXJncyA9IGFyZ3VtZW50cyxcblx0XHRcdGRhdGFSZXR1cm4gPSBbXSxcblx0XHRcdGVhY2hSZXR1cm47XG5cdFx0XHRcblx0XHRlYWNoUmV0dXJuID0gdGhpcy5lYWNoKGZ1bmN0aW9uKCl7XG5cdFx0XHRpZihhcmdzICYmIHR5cGVvZiBhcmdzWzBdID09PSAnc3RyaW5nJyl7XG5cdFx0XHRcdHZhciBkYXRhID0gRWFzeURyb3BEb3duLnByb3RvdHlwZS5pbnN0YW5jZXNbdGhpcy5pZF1bYXJnc1swXV0oYXJnc1sxXSwgYXJnc1syXSk7XG5cdFx0XHRcdGlmKGRhdGEpZGF0YVJldHVybi5wdXNoKGRhdGEpO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0aW5zdGFudGlhdGUodGhpcywgYXJnc1swXSk7XG5cdFx0XHR9O1xuXHRcdH0pO1xuXHRcdFxuXHRcdGlmKGRhdGFSZXR1cm4ubGVuZ3RoKXtcblx0XHRcdHJldHVybiBkYXRhUmV0dXJuLmxlbmd0aCA+IDEgPyBkYXRhUmV0dXJuIDogZGF0YVJldHVyblswXTtcblx0XHR9IGVsc2Uge1xuXHRcdFx0cmV0dXJuIGVhY2hSZXR1cm47XG5cdFx0fTtcblx0fTtcblx0XG5cdCQoZnVuY3Rpb24oKXtcblx0XHRpZih0eXBlb2YgT2JqZWN0LmdldFByb3RvdHlwZU9mICE9PSAnZnVuY3Rpb24nKXtcblx0XHRcdGlmKHR5cGVvZiAndGVzdCcuX19wcm90b19fID09PSAnb2JqZWN0Jyl7XG5cdFx0XHRcdE9iamVjdC5nZXRQcm90b3R5cGVPZiA9IGZ1bmN0aW9uKG9iamVjdCl7XG5cdFx0XHRcdFx0cmV0dXJuIG9iamVjdC5fX3Byb3RvX187XG5cdFx0XHRcdH07XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRPYmplY3QuZ2V0UHJvdG90eXBlT2YgPSBmdW5jdGlvbihvYmplY3Qpe1xuXHRcdFx0XHRcdHJldHVybiBvYmplY3QuY29uc3RydWN0b3IucHJvdG90eXBlO1xuXHRcdFx0XHR9O1xuXHRcdFx0fTtcblx0XHR9O1xuXHRcdFxuXHRcdCQoJ3NlbGVjdC5kcm9wZG93bicpLmVhY2goZnVuY3Rpb24oKXtcblx0XHRcdHZhciBqc29uID0gJCh0aGlzKS5hdHRyKCdkYXRhLXNldHRpbmdzJyk7XG5cdFx0XHRcdHNldHRpbmdzID0ganNvbiA/ICQucGFyc2VKU09OKGpzb24pIDoge307IFxuXHRcdFx0aW5zdGFudGlhdGUodGhpcywgc2V0dGluZ3MpO1xuXHRcdH0pO1xuXHR9KTtcbn0pKGpRdWVyeSk7Il19