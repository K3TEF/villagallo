window.app = window.app || {};
app.roster = {
    list: [],
    sort: "FirstName",
    get: function (){ 
        var data = app.members;
        app.roster.list = data;
        app.roster.render();
    },

    render: function () {
        $("tbody#mList").html($("#memberTemplate").render(app.roster.list));
        //app.roster.list = newList;
    },

    sortBy: function (field) {
        var newList = _.sortByOrder(app.members, [field, field], ['asc', 'desc']);
        app.roster.list = newList;

      app.roster.render();
    },

    filter: function (){

        var firstName = $("#sFirstName").val().toLowerCase().trim(),
            lastName = $("#sLastName").val().toLowerCase().trim(),
            callSign = $("#sCallSign").val().toLowerCase().trim(),
            currentDate = $("#sCurrentDate").val().toLowerCase().trim();
            console.log(currentDate);
        _.forEach(app.roster.list, function (o) {
            
            if (!o.FirstName.toLowerCase().startsWith(firstName)) {
                //console.log(o.FirstName);
                o.hide = true;
                return;
            }
            if (!o.LastName.toLowerCase().startsWith(lastName)) {
                o.hide = true;
                return;
            }
            if (!o.CallSign.toLowerCase().startsWith(callSign)) {
                o.hide = true;
                return;
            }
            if (!o.Current.toLowerCase().startsWith(currentDate)) {
                o.hide = true;
                return;
            }
            o.hide = false;

        });

        app.roster.render();

    },

}

$(function (){
    app.roster.get();

    $("#mFirstName").click(function () {
        app.roster.sortBy("FirstName");
    });
    $("#mLastName").click(function () {
        app.roster.sortBy("LastName");
    });
    $("#mCallSign").click(function () {
        app.roster.sortBy("CallSign");
    });
    $("#mCurrent").click(function () {
        app.roster.sortBy("Current");
    });

    $("#sFirstName,#sLastName,#sCallSign, #sCurrentDate").keyup(app.roster.filter);
});