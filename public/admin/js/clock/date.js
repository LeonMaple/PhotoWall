var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];
var dayNames = ["Sun, ", "Mon, ", "Tue, ", "Wed, ", "Thu, ", "Fri, ", "Sat, "]

var newDate = new Date();
var getMonth = newDate.getMonth()+1;
$('#Date').html(newDate.getFullYear() + '-' + getMonth + '-' + newDate.getDate());