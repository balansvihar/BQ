var $bq = function(q) {
		var Q=[];
		if(typeof(q)=="string")
			Q=document.querySelectorAll(q);
		else if(typeof(q)=="object"){
			 Q[0]=(q);
		}
	    return {
			$el:Q,
			start:function(C){
				document.addEventListener('DOMContentLoaded',C);
			},
		    html:function(S) {
				if(!S)return Q[0].innerHTML;
				for(var i=0;i<Q.length;i++)
					Q[i].innerHTML=S;
				return this;
			},
		    val:function(S) {
				if(!S)return Q[0].value;
				for(var i=0;i<Q.length;i++)
					Q[i].value=S;
				return this;
			},
			append:function(S){
				for(var i=0;i<Q.length;i++)
					Q[i].innerHTML+=S;
				return this;
			},
			prepend:function(S){
				for(var i=0;i<Q.length;i++)
					Q[i].innerHTML=S+Q[i].innerHTML;
				return this;
			},
			attr:function(S,N){
				if(arguments[1]){
					for(var i=0;i<Q.length;i++)
						Q[i].setAttribute(S,N);
					return this;
				}else
					return Q[0].getAttribute(S);
			},
			removeAttr:function(S){
				for(var i=0;i<Q.length;i++)
				Q[i].removeAttribute(S);
				return this;
			},
			show:function(){
				for(var i=0;i<Q.length;i++)
					Q[i].style.display="block";
				return this;
			},
			hide:function(){
				for(var i=0;i<Q.length;i++)
					Q[i].style.display="none";
				return this;
			},
			remove:function(){
				for(var i=0;i<Q.length;i++)
					Q[i].remove();
				return this;
			},
			hasClass : function (S) {
				return !!Q[0].className.match(new RegExp('(?:\\s|^)' + S + '(?:\\s|$)'));
			},
			addClass:function(S){
				for(var i=0;i<Q.length;i++)
					Q[i].className=Q[i].className.replace(S,"");
				return this;
			},
			removeClass:function(S){
				for(var i=0;i<Q.length;i++)
				  Q[i].className = Q[i].className.replace(new RegExp('(?:\\s|^)' + S + '(?:\\s|$)'), ' ');
				return this;
			},
			css:function(S){
				var t="";
				for (var x in S) 
					t+=x+":"+S[x]+";"
				for(var i=0;i<Q.length;i++)
					Q[i].style.cssText=t;
				return this;
			},
			parent:function(){
				return Q[0].parentNode;
			},
			siblings:function(){
				Q[0].previousSibling;
			},
			on:function(E,C,B){
				for(var i=0;i<Q.length;i++)
					Q[i].addEventListener(E,C,B);
					return this;
			},
			router:function(C){
				window.onhashchange =function(){C(window.location.hash)};
				return this;
			},
			template:function(T,D) {
			  return T.replace(/{([^{}]*)}/g,function(a,b){
				  var r=D[b];
				  return typeof r==="string"? r:a;
			  });
			},
			resize:function(C){
				window.onresize =function(){C(e)};
				return this;
			},

			each:function(C){
				for (var i=0;i<Q.length;i++)
					C.call(i,i,Q[i]);
				return this;
			},
			ajax:function (L,M,P,C){
				var X=null;
				if (window.XMLHttpRequest)  X=new XMLHttpRequest(); else if (window.ActiveXObject) X=new ActiveXObject("Microsoft.XMLHTTP");
				if (X!==null){
					X.onreadystatechange=function(){
						if (X.readyState==4)
							if (X.status==200)
								C(X.responseText);
							else {
								console.log("ERR: "+L+ " = "+ X.status+" "+ X.statusText);
								C();
							}
					}; 
					X.open(M||"GET",L,true);  
					if(M=='POST'){
						X.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						X.setRequestHeader("Content-length", P.length);
						X.setRequestHeader("Connection", "close");
						X.send(P);
					}
					else
						X.send(null);
					
				}else
					console.log("No AJAX");
				return this;
			}
      };
};