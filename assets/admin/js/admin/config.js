switch (window.location.origin) {
    case 'http://dental.com':
        var HOSTNAME = 'http://dental.com/';
        break;
    default:
        var HOSTNAME = 'http://localhost:8070/dental/';
    // var HOSTNAME = 'http://local.dental.com/';
}
switch (window.location.origin) {
    case 'http://dental.com':
        var HOSTNAMEADMIN = 'http://dental.com/admin/';
        break;
    default:
        var HOSTNAMEADMIN = 'http://localhost:8070/dental/admin';
    // var HOSTNAMEADMIN = 'http://local.dental.com/admin/';
}
