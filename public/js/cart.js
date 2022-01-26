$('#addToCart').on('click', function(){
    const path = window.location.pathname;
    $.ajax(`/api/addToCart?id=${path.split('/').slice(-1)[0]}`) //Get id from the url of the current page
});