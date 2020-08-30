jQuery('document').ready(function() {
	
	var rng = jQuery('#myRange').val();
	var num = jQuery('#myRangeInput').val();
	var rng2 = jQuery('#my2Range').val();
	var num2 = jQuery('#my2RangeInput').val();
	
	jQuery('#myRange').on('input', function() {
		rng = jQuery('#myRange').val();
		num = jQuery('#myRangeInput').val();
		jQuery('#myRangeInput').val(rng);
	});
	
	jQuery('#myRangeInput').on('input', function() {
		rng = jQuery('#myRange').val();
		num = jQuery('#myRangeInput').val();
		jQuery('#myRange').val(num);
	});
	
	jQuery('#my2Range').on('input', function() {
		rng2 = jQuery('#my2Range').val();
		num2 = jQuery('#my2RangeInput').val();
		jQuery('#my2RangeInput').val(rng2);
	});
	
	jQuery('#my2RangeInput').on('input', function() {
		rng2 = jQuery('#my2Range').val();
		num2 = jQuery('#my2RangeInput').val();
		jQuery('#my2Range').val(num2);
	});
	
	jQuery('#no').on('click', function(){
		jQuery('#yes').prop('checked', false);
	});
	
	jQuery('#yes').on('click', function(){
		jQuery('#no').prop('checked', false);
	});
	
});