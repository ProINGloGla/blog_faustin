	var slide = true;
	function Menu(){
	if(slide == true){
		$("#menu").animate({ "margin-right": "10px" }, "fast" );
		slide=false;
	} else {
		$("#menu").animate({ "margin-right": "-20%" }, "fast" );
		slide=true;
	};
}