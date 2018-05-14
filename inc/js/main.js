(function($) {

	$(document).ready(function() {

		homePage();
		getDivStates(); //Get div info from cookie

		function homePage() {
			var i = 0,
				len = 0;
				
			$('.divItem').on('click', function(){
				var $this = $(this),
					data = 't';
				$this.toggleClass('toggleOn');

				$this.parent().find('> div').each(function(){
					data += ($(this).hasClass('toggleOn')) ? '1' : '0';
				});
				saveDivStates(data);
			})

            $('#div4 > span').text(getNumbers());
		}

	});
	
	function saveDivStates(divData) {
        $.ajax({
            url: '/ajax/state.php',
            type: 'POST',
            data: {
                'submit': 'saveDivs',
                'divData': divData
            },
            success: function (res) {           	
                // console.log(res);
            },
            error: function (err) {
                console.log("This has thrown an error : " + err);
            }
        });
    }
	function getDivStates() {

        $.ajax({
            url: '/ajax/state.php',
            type: 'GET',
            data: {
                'submit': 'initPage'
            },
            success: function (res) {
                var i = 1;

                if(res === 'none'){
                    return;
                }else{
                    //convert div states to an array
                    divData = res.substring(1, 5).split('');
                }
            
                for(; i < 5; ++i){
                    if(divData[i-1] === "1"){
                        $('#div' + i).addClass('toggleOn');
                    }
                }
                
            },
            error: function (err) {
                console.log("This has thrown an error : " + err);
            }
        });
    }
    function getNumbers(){
        var i = 0,
            nums = '',
            num = 0;

        for(; i < 9; i++){
            num = i * 2 + 1;
            if(i > 4){
                num = 18 - num;
            }
            nums += num.toString() + ' ';
         }
        return nums.trim();
    }

})(jQuery);