(function(){
	
	var classes = ["Data Structures", "Algorithms", "Operating Systems", "Databases", "Software Engineering", "Web-based Programming"];
	var languages = ["Java", "C", "SQL variants", "PHP", "HTML/CSS", "Javascript/JQuery"];
	
	$(document).on('ready', function() {
		//console.log("Test1");
		var output = [];
		for (var i=0; i<classes.length; i++){
			output[i]='<li>'+classes[i]+'</li>';
		}
		$('#class-list').html("<ul>"+output+"</ul>");
	});
	
	$(document).on('ready', function() {
		//console.log("Test2");
		var output = [];
		for (var i=0; i<languages.length; i++){
			output[i]='<li>'+languages[i]+'</li>';
		}
		$('#language-list').html("<ul>"+output+"</ul>");
	});
	
})();