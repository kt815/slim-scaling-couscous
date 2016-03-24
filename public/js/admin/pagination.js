function PaginatorObj() {
    "use strict";

    function _paginator() {
        "use strict";
        $('body').on('click', '.paginator', function(e) {
        var _count = $(".count").text();
        $.ajax({
            type: "POST",
            url: "/jokes",
            data: 
                "count="         + _count,
            success : function(data){            
                if(data != "false"){
                    _addContent(data);   
                }
                else {
                    console.log("hhhh ..... false");
                } } }); }); } // function _paginator

    function myForEach(callback) {
        var count = "";
        callback.forEach(function(item, i) {
        
            count += "<div class=\"category\"><i class=\"fa fa-bookmark-o fa-1\"><\/i> " + "<a href=\"" + item['id'] + "\">" + item['name'] + "<\/a>" + "<\/div>" 

        });
        return(count); } // function myForEach

    function _addContent(data) {
        var myArray = jQuery.parseJSON(data);
        var _count = myArray['count'];
        $(".count").text(_count);    
        if (_count == 0) {
            $( ".paginator" ).addClass( "disabled" ); }        
        myArray = myArray['jokes'];

        myArray.forEach(function(item, myArray) {
            var a = item['categories'];
            var v = myForEach(a);
            var myVar = "<div class=\"callout\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-square-o fa-stack-2x text-grey\"><\/i><i class=\"fa fa-user-md fa-stack-1x text-blue    \"><\/i><\/span>" + item['author'] + "&nbsp;&nbsp;&nbsp;&nbsp;" + item['id'] + "<\/p><p><\/p><a href=\"/jokes/" + item['id'] + "\"><p class=\"lead\">"  + item['title'] +  "<\/p><\/a><p class=\"subheader\">" + item['text'] + "<\/p><p>" + v + "<\/p><\/div>";
            _addContent_Column(myVar); });  } //function _addContent

    function _addContent_Column(data) { 
            $(".jokes-column").append(data); }

    this.init = function() {
        "use strict";
        $("document")
            .ready(function() {
            _paginator(); }); } }

var PaginatorObj = new PaginatorObj();
PaginatorObj.init();
