!function(){var t=window.WPLeafletMapPlugin;if(window.WPLeafletMapPlugin=new function(){function t(t){try{t()}catch(t){console.log("-- version --","v3.0.4"),console.error(t)}}this.VERSION="v3.0.4";var n=!1,i=[];this.push=function(e){n?t(e):i.push(e)},this.unshift=function(e){n?t(e):i.unshift(e)},this.init=function(){n=!0;for(var e=0,r=i.length;e<r;e++)t(i[e])},this.createMap=function(t){var n=document.getElementsByClassName("WPLeafletMap")[this.maps.length],i=L.map(n,t);return t.fitBounds&&(i._shouldFitBounds=!0),t.attribution&&function(t,n){if(!t)return;for(var i=t.split(";"),e=L.control.attribution({prefix:!1}).addTo(n),r=0,o=i.length;r<o;r++){var a=(u=i[r]).trim?u.trim():u.replace(/^\s+|\s+$/gm,"");e.addAttribution(a)}var u}(t.attribution,i),this.maps.push(i),i},this.createImageMap=function(t){var n=this.createMap(t);return n.is_image_map=!0,this.images.push(n),n},this.getCurrentMap=function(){return this.maps[this.maps.length-1]},this.getCurrentGroup=function(){var t=this.maps.length;return this.markergroups[t]||(this.markergroups[t]=this.newMarkerGroup(this.maps[t-1])),this.markergroups[t]},this.getCurrentMarkerGroup=this.getCurrentGroup,this.getGroup=function(t){return(new L.FeatureGroup).addTo(t)},this.newMarkerGroup=function(t){var n=this.getGroup(t);return n.timeout=null,t._shouldFitBounds&&n.on("layeradd",(function(i){i.layer instanceof L.FeatureGroup&&i.layer.on("ready",(function(){t.fitBounds(n.getBounds())})),window.clearTimeout(this.timeout),this.timeout=window.setTimeout((function(){try{t.fitBounds(n.getBounds())}catch(t){}}),100)}),n),n},this.propsToTable=function(t){var n,i=[];for(n in t)Object.prototype.hasOwnProperty.call(t,n)&&i.push(n);for(var e="<table>",r=0,o=(i=i.sort()).length;r<o;r++){var a=i[r];e+="<tr><td>"+a+"</td>",e+="<td>"+t[a]+"</td></tr>"}return e+="</table>"};var e=this.unescape=function(t){var n=document.createElement("div");return n.innerHTML=t,n.innerText||t},r=/\{ *(.*?) *\}/g;this.template=function(t,n){return null==n?t:t.replace(r,(function(t,i){var r=function(t){for(var n=t.split(" | "),i={},e=n.shift(),r=0,o=n.length;r<o;r++){var a=n[r].split(": "),u=a.shift(),s=a.join(": ")||!0;i[u]=s}return i.key=e,i}(i),a=function(t,n){for(var i=function(t){if(null==t)return[];for(var n=t.split(o),i=[],e=0,r=n.length;e<r;e++)""!==n[e]&&i.push(n[e]);return i}(e(n)),r=t,a=0,u=i.length;a<u;a++)if(!(r=r[i[a]]))return;return r}(n,r.key);return null==a?r.default||t:a}))};var o=/[.‘’'“”"\[\]]+/g;function a(t,n){"undefined"!=typeof L&&void 0!==L[t]?n():setTimeout((function(){a(t,n)}),100)}this.waitForSVG=function(t){a("SVGIcon",t)},this.waitForAjax=function(t){a("AjaxGeoJSON",t)},this.createScale=function(t){L.control.scale(t).addTo(this.getCurrentMap())},this.getIconOptions=function(t){for(var n,i=t||{},e=["iconSize","iconAnchor","shadowSize","shadowAnchor","popupAnchor"],r=L.Icon.Default.prototype.options,o=0,a=e.length;o<a;o++){var u=e[o],s=i[u];if(s){for(var h=s.split(","),c=0,p=h.length;c<p;c++)h[c]=Number(h[c]);i[u]=h}}return i.popupAnchor||(i.popupAnchor=((n=(n=i.iconSize||r.iconSize).slice())[0]=0,n[1]*=-1,n[1]-=3,n)),i.iconUrl&&(i.icon=new L.Icon(i)),i},this.maps=[],this.images=[],this.markergroups={},this.markers=[],this.lines=[],this.polygons=[],this.circles=[],this.geojsons=[]},t){for(var n=0,i=t.length;n<i;n++)window.WPLeafletMapPlugin.push(t[n]);for(var e in t.splice(0),t)t.hasOwnProperty(e)&&(window.WPLeafletMapPlugin[e]=t[e])}window.addEventListener?window.addEventListener("load",window.WPLeafletMapPlugin.init,!1):window.attachEvent&&window.attachEvent("onload",window.WPLeafletMapPlugin.init)}();
