//Validation for Phone Number

    $("#btnsubmit").click(function () {
        var value = $("#inputPassword4").val();
        var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
        var result = regEx.test(value);
        if (!result) {
            alert(" Telephone Number is Invalid");
        }
    }) ;

    $("#inputPassword4").keyup(function () {
    if($("#inputPassword4").val().length>10){
        alert(" Telephone Number is Invalid")
    }
})
//Validation for Name

    $("#btnsubmit").click(function () {
        var value = $("#inputPassword2").val();
        var regEx = /^[a-zA-Z]*$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Name Is Invalid.Please Input Only Letters");
        }
    })
 ;
    $("#inputPassword2").keyup(function () {
    if($("#inputPassword2").val().length>20){
        alert("Name Is Invalid.Please Input Only Letters")
    }
})
//validation for salary

    $("#btnsubmit").click(function () {
        var value = $("#inputPassword").val().length>2;
        var regEx = /^\d{1,6}\.\d{1,6}$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Please input Salary Like : 0000.00");
        }
    })
 ;
    $("#inputPassword").keyup(function () {
    if($("#inputPassword").val().length>8){
        alert("Please input Salary Like : 0000.00")
    }
})
    //validation for cid

$("#btnsubmit").click(function () {
    var cid=$("#inputPassword1").val();
    var regEx ="/C-\d{3}/";
    var result=regEx.test(cid);
    if (!result) {
        alert("ID is Invalid")
    }
});

$("#inputPassword1").keyup(function () {
    if($("#inputPassword1").val().length>4){
        alert("ID is Invalid")
    }
})