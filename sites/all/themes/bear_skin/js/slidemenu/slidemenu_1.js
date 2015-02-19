var slideMenu=function(){
	var slides,count,width,expanded,collapsed,interval;
	return{
		build:function(){
			
			frame=document.getElementById('slides');
			slides=frame.getElementsByTagName('li');
			count=slides.length;
			width=frame.offsetWidth - ((count)*7);
			collapsed = 42;
			expanded=width-((count-1)*collapsed)-(count-1);
			interval = 10;
			
			if(typeof document.styleSheets[0].addRule == 'object') { 
				document.styleSheets[0].addRule('#slideshow .image', '{ width: '+expanded+'px !important; }', 0)
			} else {
				document.styleSheets[0].insertRule('#slideshow .image { width: '+expanded+'px !important; }', 0);
			}
			
			var i=0;
			for(i;i<count;i++){
				s=slides[i];
				this.timer(s)
				s.style.width = width/count + 'px';
			}
		},
		timer:function(s){
			s.onclick=function(){
				s.className = 'slide-'+i+' active';
				var i=0;
				for(i;i<count;i++){
					if(slides[i]!=s){
						slides[i].className = 'slide-'+i+' inactive';
					}
				}
				if(width!=frame.offsetWidth - ((count)*7)) slideMenu.build();
				clearInterval(frame.timer);
				frame.timer=setInterval(function(){
					slideMenu.slide(s);
				},interval);
			}
		},
		slide:function(s){
			var current = parseInt(s.style.width,'10') || s.offsetWidth;
			if(current < expanded){
				var owt=0;
				var i=0;
				for(i;i<count;i++){
					if(slides[i]!=s){
						var o,ow;
						var oi=0;
						o=slides[i];
						ow=parseInt(o.style.width,'10') || o.offsetWidth;
						if(ow>collapsed){
							oi=Math.floor((ow-collapsed)/interval);
							oi=(oi>0)?oi:1;
							o.style.width=(ow-oi)+'px';
						}
						owt += (ow-oi);
					}
				}
				s.style.width = (width-owt) + 'px';
			}else{
				clearInterval(frame.timer);
			}
		}
	};
}();