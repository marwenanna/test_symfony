// Example Basic
$("#example-basic").steps({
	headerTag: "h3",
	bodyTag: "section",
	transitionEffect: "slideLeft",
	autoFocus: true,
	
});


// Example Form
$("#example-form").steps({
	headerTag: "h3",
	bodyTag: "section",
	transitionEffect: "fade",
	transitionSpeed: '400',
	autoFocus: true,

	onFinished: function (event, currentIndex)
    {
		document.getElementById('form_client').submit();
		
		
		
    }
});


// Example Vertical
$("#example-vertical").steps({
	headerTag: "h3",
	bodyTag: "section",
	transitionEffect: "slideLeft",
	stepsOrientation: "vertical"
});