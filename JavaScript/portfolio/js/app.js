// Initialize the WOW Animations
new WOW().init();

// Initialize The Routes
Routes({
	"/": function(){
		$('#main_content').load('views/home.php');
		$('#menu li a').removeClass('active');
		$('#menu-home').addClass('active');
	},
	"cv":function(){
		$('#main_content').load('views/cv.php');
		$('#menu li a').removeClass('active');
		$('#menu-cv').addClass('active');
	},
	"skills":function(){
		$('#main_content').load('views/skills.php');
		$('#menu li a').removeClass('active');
		$('#menu-skills').addClass('active');
	},
	"projects":function(){
		$('#main_content').load('views/projects.php');
		$('#menu li a').removeClass('active');
		$('#menu-projects').addClass('active');
	},
	"projects/:project_id":function(){
		$('#main_content').load('views/project.php?project_id='+UrlParams.project_id);
		$('#menu li a').removeClass('active');
		$('#menu-projects').addClass('active');
	},
	"blog":function(){
		$('#main_content').load('views/blog.php');
		$('#menu li a').removeClass('active');
		$('#menu-blog').addClass('active');
	},
	"contact":function(){
		$('#main_content').load('views/contact.php');
		$('#menu li a').removeClass('active');
		$('#menu-contact').addClass('active');
	},
	default: "/"
});