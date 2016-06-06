$(function(){

	$('.lang-model').click(function(){
		$(this).toggleClass('active').siblings().removeClass('active');
	})



	////// time machine //////
	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var seconds = Math.floor((t / 1000) % 60);
		var minutes = Math.floor((t / 1000 / 60) % 60);
		var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		return {
		  'total': t,
		  'days': days,
		  'hours': hours,
		  'minutes': minutes,
		  'seconds': seconds
		};
	}

	function initializeClock(id, endtime) {
		var clock = document.getElementById(id);
		var daysSpan    = clock.querySelector('#clock_days');
		var hoursSpan   = clock.querySelector('#clock_hours');
		var minutesSpan = clock.querySelector('#clock_minutes');
		//var secondsSpan = clock.querySelector('.seconds');

		function updateClock() {
		    var t = getTimeRemaining(endtime);

		    daysSpan.innerHTML = t.days;
		    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		    //secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		    if (t.total <= 0) {
		      clearInterval(timeinterval);
		    }
		 }

		updateClock();
		var timeinterval = setInterval(updateClock, 1000);
		//console.log(secondsSpan)
	}

	//var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
	var deadline = '2016/06/21 06:34:59 GMT+08:00';
	initializeClock('clockdiv', deadline);


	/////  counterByGA /////
	/*
	$.getJSON("https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A121384372&start-date=2016-04-30&end-date=yesterday&metrics=ga%3Ausers&access_token=ya29.CjLYAp0-HDqN9_DPRT-vjnYsJeohyPNgxB2dG0q9D0tpvP2WmYVs-bjbzBlEgJcFXizCQg", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
            items.push( val );
        });
        var PVs = items[10];
		$("#pvs").append(PVs)
    });
    */
});
