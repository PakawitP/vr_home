// var session_url = 'http://192.168.25.94:1884/red-nodes/stgthy4/';
// var username = 'production';
// var password = '074422188';
// var basicAuth = 'Basic ' + btoa(username + ':' + password);
// axios.get(session_url, {}, {
//     headers: {
//         'Authorization': + basicAuth,
//     },
// }).then(function (response) {
//     console.log('Authenticated');
// }).catch(function (error) {
//     console.log(error)
//     console.log('Error on Authentication');
// });

session_url = 'http://localhost:3200/api';
axios.get(session_url, {}, {
    
}).then(function (response) {
    // console.log(response);
    console.log('Authenticated');
}).catch(function (error) {
    // console.log(error)
    console.log('Error on Authentication');
});
