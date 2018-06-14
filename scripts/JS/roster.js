window.app = window.app || {};
app.roster = {
    list: [],
    sort: "FirstName",
    get: function (){ 
        var data = app.members;
        app.roster.render(data);

    },

    render: function (newList) {
        $("tbody#mList").html($("#memberTemplate").render(newList));
    },

    sortBy: function (field) {
        var newList = _.sortByOrder(app.members, [field, field], ['asc', 'desc']);
        console.log(newList);

      app.roster.render(newList);
    },

}
$(document).ready(function () {

    app.roster.get()

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
});