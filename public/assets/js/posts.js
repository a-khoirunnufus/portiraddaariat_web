function descTrunc(str, max, add) {
    add = add || '...';
    return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
}
$(document).ready(function() {
    $('#dataTable').DataTable({
        'columnDefs': [
            {
                'targets': 2,
                'render': function(data, type) {
                    if (type === 'display') {
                        if ($('.desc').width() < 175) 
                            data = descTrunc(data, 50);
                        data = descTrunc(data, 150);
                    }
                    return data;
                }
            }
        ]
    });
    $('#notif-alert').show(function() {
        setTimeout(function() { 
            $('#notif-alert').alert('close'); 
        }, 10000);
    });
})