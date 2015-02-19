var slideMenu=function(){
	var slides,count,width,expanded,collapsed,interval;
	return{
		build:function(){

			frame=document.getElementById('slides');
			slides=frame.getElementsByTagName('li');
			count=slides.length;
			width=frame.offsetWidth - ((count-1)*10);
			collapsed = 50;
			expanded=width-((count-1)*collapsed)-(count-1);
			interval = 10;

			if(typeof document.styleSheets[0].addRule == 'object') {
				document.styleSheets[0].addRule('#slideshow .image', '{ width: '+expanded+'px !important; }', 0)
			} else {
				//document.styleSheets[0].insertRule('#slideshow .image { width: '+expanded+'px !important; }', 0);
			}

			var i=0;
			for(i;i<count;i++){
				s=slides[i];
				this.timer(s)
				s.style.width = (width)/count + 'px';
				s.className = 'slide-'+i
				if(i===0) {
					s.className += ' first';
				}
			}
		},
		timer:function(s){
			s.onclick=function(){
				var i=0;
				for(i;i<count;i++){
					var classname;
					classname = '';
					if(i===0) {
						classname += 'first ';
					}
					classname += 'slide-'+i
					if(slides[i]==s){
						classname += ' active'
					} else {
						classname += ' inactive';
					}
					slides[i].className = classname;

				}

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