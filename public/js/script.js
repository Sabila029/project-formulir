var total=0;
    function UpdateCost(elem) {
     total=0;

        var score1 = $("[name='radio_26']:checked").val()
        var score1 = $("[name='radio_26']:checked").val()
        var score1 = $("[name='radio_26']:checked").val()
        var score1 = $("[name='radio_26']:checked").val()
        var score1 = $("[name='radio_26']:checked").val()

     //    if (elem.checked == true) { 
    	// 	total += Number(elem.value); 
    	// }else{
    	// 	total -=Number(elem.value);
    	// }
     
    	document.getElementById('total').value = total.toFixed(0);
    }



    var total1=0;
    function UpdateCost1(elem1) {
     total1=0;
        if (elem1.checked == true) { 
    		total1 += Number(elem1.value); 
    	}else{
    		total1 -=Number(elem1.value);
    	}
     
    	document.getElementById('total1').value = total1.toFixed(0);
    }



    var total2=0;
    function UpdateCost2(elem2) {
     total2=0;
        if (elem2.checked == true) { 
    		total2 += Number(elem2.value); 
    	}else{
    		total2 -=Number(elem2.value);
    	}
     
    	document.getElementById('total2').value = total2.toFixed(0);
    }