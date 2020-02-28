
Routes({
	"/": function() {
		$("#box").load("views/home.html");
	},
	"/skills": function() {
		$("#box").load("views/skills.html");
	},
	"/projects": function() {
		$("#box").load("views/projects.html");
	},
	"/contact": function() {
		$("#box").load("views/contact.html");
	},
	"/about": function() {
		$("#box").load("views/about.html");
	},
	default: "/"
});
